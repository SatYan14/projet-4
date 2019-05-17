<?php

class Comments 
{
    private $id;

    private $author;

    private $comment;

    private $post_id;

    private $reported;


	public function __construct($data = []) 
	{
		if(!empty($data)) {
			$this->hydrate($data);
		}
	}

	public function hydrate(array $data) 
	{
		// $data = ["id" => 12,
		// 			"title" => "Mon titre"
		// ]
		foreach ($data as $key => $value)
		{
			// $key = "title", $value = "Mon titre"
			$method = 'set' . ucfirst($key);
			// $method = setTitle
			if(method_exists($this, $method))
            {
				// $this->setTitle("Mon titre")
                $this->$method($value);
            }
		}
	}

    public function getAuthor()
    {
        return $this->author;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}