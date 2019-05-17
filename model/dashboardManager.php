<?php

class dashboardManager 
{
    private $name;

    private $password;

    private $db;

    public function __construct()
    {
        $this->db = DataBaseConnexion::getDataBaseConnexion();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword() 
    {
        return $this->password;
    }

    public function getName()
    {
        return $this->name;
    }


    public function verifyConnexion($login, $password, $table='users')
    {
        $req = $this->db->query("SELECT * FROM $table WHERE login ='" . $login . "'");
		$req->execute();
		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $table);
        $data = $req->fetch();
        if($data == false) {
            return $data;
        } 
        return password_verify($password, $data['password']);
    }
    
    public function getAllReportedComments($table)
    {
        $req = $this->db->query("SELECT * FROM  $table WHERE reported = 'reported'");
		$data = $req->fetchAll(PDO::FETCH_CLASS);
		return $data;
    }

    public function deleteThisReportedComment($id) 
    {
        $req = $this->db->query('DELETE FROM comments WHERE id=' . $id);
    }

    public function keepThisReportedComment($id)
    {
        $req = $this->db->query('UPDATE comments SET reported = \'\' WHERE id=' . $id);
    }

    public function deletePost($id)
    {
        $req = $this->db->query('DELETE FROM posts WHERE id=' . $id);
    }
    
    public function updatePost($id, $content, $title) 
    {
        $link = mysqli_connect("localhost", "root", "", "projet2");
        $escapeContent = mysqli_real_escape_string($link, $content);
        $escapeTitle = mysqli_real_escape_string($link, $title);
        $req = $this->db->query("UPDATE posts SET content = '$escapeContent', title = '$escapeTitle' WHERE id=" . $id);
    }

    public function addPost($content, $title) 
    {
        $datetime = date_create()->format('Y-m-d H:i:s');
        $req = $this->db->prepare('INSERT INTO posts(id, title, content, date_added) VALUES(:id, :title, :content, :date_added)');
        $req->execute(array(
            'id' => null,
	        'title' => $title,
            'content' => $content,
            'date_added' => $datetime
	));
    }
}