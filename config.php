<?php 
    class Database {
        private $host="127.0.0.1";
        private $database_name = "campus";
        private $username ="campus";
        private $password ="campus2023";
        public $conn;

        public function getConnection(){
            $this -> conn = null;
            try{
                $this ->conn=new PDO("mysql:host=".$this->host."; dbname=". $this->database_name, $this->username, $this->password);
                $this ->conn->exec("set names utf8");
            }catch(PDOExeption $exception){
                echo "Fallo en la conexion a la base de datos".$exception->getMessage();
            }
            return $this->conn;
        }
    }
?>
