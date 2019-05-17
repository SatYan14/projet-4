<?php

class PostsManager
{
	private $db;

	public function __construct()
	{
		$this->db = DataBaseConnexion::getDataBaseConnexion();
	}


	public function getAllPosts($table)
	{
		$req = $this->db->query('SELECT id, title, content, DATE_FORMAT(date_added, \'%d/%m/%Y \') AS date FROM ' . $table. ' ORDER BY ID DESC');
		$data = $req->fetchAll();
		$posts = [];
		foreach ($data as $value) 
		{
			$post = new Posts($value);
			$posts[] = $post;
		} 
		return $posts;
	}

	public function getOnePost($id, $table) 
	{
		$req = $this->db->query('SELECT * FROM ' . $table.' WHERE id = ' .$id);
		$req->execute();
		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $table);
		$data = $req->fetch();
		return $data;
	}
}