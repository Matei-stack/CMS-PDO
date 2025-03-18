<?php

class Database
{

    private $host = DB_host;
    private $db_name = DB_name;
    private $db_user = DB_user;
    private $db_pass = DB_pass;


    public $con;

    public function getConnection()
    {
        $this->con = null;

        try {

            $this->con =  new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->db_user, $this->db_pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Conncetion error" . $exception->getMessage();
        }
        return $this->con;
    }
}
