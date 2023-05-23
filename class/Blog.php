<?php

class Blog
{

    protected $db;

    /**
     * @param $db
     */
    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function getPost($id){
        $this->db->query("SELECT * FROM posts WHERE id = :id", ['id' => $id]);
    }
}