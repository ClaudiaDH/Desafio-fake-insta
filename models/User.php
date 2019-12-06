<?php

    include_once "Connection.php";

    class User extends Connection {

        //function to register new user in the database
        public function setUser($username, $email, $pass){
            //variable to get the Connection function create connection
            $db = parent::createConnection();
            //preparing the info to insert into the database
            $query = $db->prepare("INSERT INTO users (username,email,pass) values (?,?,?)");
            return $query->execute([$username,$email,$pass]);

        }
        public function getUser($username){
            $db = parent::createConnection();
            $query = $db->prepare("SELECT * FROM users WHERE username =?");
            $query->execute([$username]);
            $result = $query->fetch(PDO::FETCH_OBJ);
            return $result;
          }
    

    }

?>