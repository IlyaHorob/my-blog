<?php
include_once 'DB.php';

class Article
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        
        return $this;
    }
    
    public function save()
    {
        $db = DB::getInstance();
        
        $articleId = (int) $this->getId();
        $title = $db->real_escape_string($this->getTitle());
        $content = $db->real_escape_string($this->getContent());
        if (!empty($articleId)) {
            $query = "UPDATE articles SET title = '$title',content = '$content' WHERE id='$articleId'";
        } else {
            $query = "INSERT INTO articles (`title`, `content`) " .
                "VALUES ('$title', '$content')";
        }
        $result = $db->query($query);
        if (!$result) {
            die('Article is not added ' . $db->error);
        }
        if (empty($articleId)) {
            $this->setId($db->insert_id);
        }
        
        return true;
    }
    
    public function delete()
    {
        if ($this->getId() != null) {
            $db = DB::getInstance();
            $query = "UPDATE articles SET enabled = 0 WHERE id='{$this->getId()}'";
            $result = $db->query($query);
            if (!$result) {
                die($db->error);
            }
            
            return true;
        }
        
        return false;
    }
}
