<?php

class Blog
{

    protected $db;

    /**
     *
     */
    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    /**
     * @param $id
     * @return void
     */
    public function getPostOne($id){
       return $this->db->query("SELECT * FROM posts WHERE id = :id", ['id' => $id]);
    }

    /**
     *
     * @return void
     */
    public function getPosts(){
        return $this->db->query("SELECT * FROM posts");

    }
}