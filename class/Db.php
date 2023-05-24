<?php

class Db
{
    protected $db;
    protected $stm;

    /**
     * @param $server
     * @param $database
     * @param $user
     * @param $password
     */
    public function __construct($server, $database, $user, $password)
    {
        try {
            $this->db = new PDO("mysql:host=$server; dbname=$database; charset=UTF8", $user, $password);
           /* if ($this->db){
               echo 'db is connect....';
            }*/
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

    }

    /**
     * @param $query
     * @param $data
     * @param prepare() mi nachysta SQL query ale bez konkretnych dat
     * @param execute() dosadi konkretne data do SQL query
     * @param fetchAll mi vrati pole objektov
     * @param fetch mi vrati objekt
     * @return array|false
     */
    public function query($query, $data = []){

        $this->stm = $this->db->prepare($query);
        $this->stm->execute($data);

        return $this->stm->fetchAll(PDO::FETCH_OBJ);

    }


}