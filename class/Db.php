<?php

class Db
{
    protected $db;
    protected $stm;

    /**
     * @param $db
     */
    public function __construct($server, $database, $user, $password)
    {
        try {
            $this->db = new PDO("mysql:host=$server; dbname=$database; charset=UTF8", $user, $password);
            if ($this->db){
                //echo 'Som pripojeny k db....';
            }
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

    }

    public function query($query, $data = []){
        $this->stm = $this->db->prepare($query);
        $this->stm->execute($data);

        return $this->stm->fetchAll(PDO::FETCH_OBJ);

    }


}