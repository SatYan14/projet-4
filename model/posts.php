<?php

class Posts
{
	private $id;

	private $title;

	private $content;

	private $date;

	private $comments = [];

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

	public function getResume()
    {
		return substr($this->getContent(), 0, 200);
    }

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function addComment($comment)
	{
		$this->comments[] = $comment;
	}
}