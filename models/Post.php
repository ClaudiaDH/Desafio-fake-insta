<!-- Here I'm gonna insert what I'm gonna fill in the newPost input, into the database -->
<!--Sending the input information to the database-->

<?php

    //including the Connection file;
    include_once "Connection.php";

    //because this class is gonna need some information from the Connection class we need to use the word "extends".
    
    class Post extends Connection{

        //creating a function to create the Post that is gonna receive 2 arguments.
        public function createPost($img,$descript){
            //Sending the information to the database
            //db is gonna receive the connection with the database that is comming from the Connection.php, that why we use the parent class
            //parent:: --> reference to the parent class that is Connection

            $db = parent::createConnection();
            //preparing to insert the information into the table.
            $query = $db->prepare("INSERT INTO posts (img,descript) values (?,?,?)");
            return $query->execute([$img, $descript]);

        
        }
        
        //Starting the function to list the posts
        public function postList() {

            $db = parent::createConnection();
            //list the posts in a scpecific order
            $query = $db->query('SELECT * FROM posts ORDER BY id DESC');
            //translate in a way that php understand. In this case is translating to Object.
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            return $result;

        }

    }


?>

