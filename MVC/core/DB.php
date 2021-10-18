<?php
    class DB{
        protected $server = "localhost";
        protected $username = "root";
        protected $password = "root";
        protected $conn;
        protected $db = "news";
        function __construct()
        {
            $this->conn = mysqli_connect($this->server,$this->username,$this->password,$this->db);
            mysqli_query($this->conn,"SET NAMES'utf8'");
        }
    }

?>