<?php
include_once "Connection.php";
class Login extends Connection{
    //function to get the email from the databasa
    public function userAuthentication($email){
        $db = parent::createConnection();
        $query = $db->prepare("SELECT * FROM users WHERE email=? ");
        $query->execute([$email]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

               
}

?>