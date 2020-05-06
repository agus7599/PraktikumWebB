<?php

    class koneksi {

        private $host;
        private $user;
        private $pass;
        private $database;
        public $conn;
        public function __construct($host ,$user ,$pass,$database)
        {
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->database = $database;
            $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->database);
            if($this->conn->connect_errno){
                echo "Gagal koneksi".$this->conn->connect_error;
                exit();
            }
        }

       

    }

?>