<?php
class Database{
    public static $connection = null;

    public function __construct()
    {
        if(self::$connection){
            return self::$connection;
        }

        $this->connect();
        return self::$connection;
    }

    public function connect(){
        $servername = 'localhost';
        $username = "root";
        $password = "";
        $db_name = 'ajax_sql';

        // tao ket noi
        self::$connection = new mysqli($servername, $username, $password, $db_name);

        // kiem tra ket noi
        if(self::$connection->connect_error){
            die("Connection failed: ".self::$connection->connect_error);
        }
    }

    public function disconnect(){
        self::$connection->close();
    }
}