<?php


class CommentsManager
{
    private $db;

    public function __construct()
    {
        $this->db = DataBaseConnexion::getDataBaseConnexion();
    }

    public function getAllComments($table)
    {
        $req = $this->db->query('SELECT * FROM ' . $table);
		$data = $req->fetchAll(PDO::FETCH_CLASS);
		return $data;
    }

    public function getAllCommentsByPost($post ,$idPost, $table)
    {
        $req = $this->db->query('SELECT * FROM ' . $table.' WHERE post_id = ' .$idPost);
        $data = $req->fetchAll();
        $comments = [];
		foreach ($data as $value) 
		{
            $comment = new Comments($value);
            $post->addComment($comment);
			$comments[] = $comment;
		} 
		return $comments;
    }

    public function reportedComment($commentId)
    {
        $req = $this->db->exec('UPDATE comments SET reported = \'reported\' WHERE id =' . $commentId);
    }
    
    public function addComment($postId, $author, $comment) 
    {
        $escapeAuthor = htmlentities($author);
        $escapeComment = htmlentities($comment);
        $req = $this->db->prepare('INSERT INTO comments(id, author, comment, post_id, reported) VALUES(null, :author, :comment, :post_id, null)');
        $req->execute(array(
	        'author' => $escapeAuthor,
	        'comment' => $escapeComment,
            'post_id' => $postId
	));
    }

}