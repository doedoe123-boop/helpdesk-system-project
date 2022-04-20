<?php
class DB{
    protected $host='localhost';
    protected $user='root';
    protected $password='';
    protected $database='sis_db';

    public $conn;

    public function __construct()
    {
        $this->conn=new mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->conn->error){
            die('Database error');
        }
    }
}



