<?php 
    session_start();
    //including the User.php connection 
    include "models/User.php";

    class UserController {
        //function to deal with the route of the user.
        public function action($routes){
            switch ($routes) {
                //opening the sign up view
                case 'sign-up':
                    $this->viewSignUp();
                break;
                //dealing with the user register
                case 'user-register':
                    $this->userRegister();
                break;
               
                
  
            }
        }

        //function to open the sign up page
        private function viewSignUp(){
            include "views/signUp.php";
        }
        




        protected function userRegister(){
            //getting the information from the Post method.
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            // *** need to criptography the password
            $passhash = md5($password);

            

            //creating a new object of the User class
            $newUser =  new User();
            $result = $newUser->setUser($username,$email,$passhash);

            //validating
            if($result){
                $username = $_POST['username'];
                $user = new User;
                //get the information to send to the header.php login
                $result = $user->getUser($username);

                $_SESSION['user'] = $result;

                header('Location:/Desafio-fake-insta/posts');
            }else{
                //var_dump($pass);
                echo "Not today! :(";
            }
        }
            
        }
       

    




?>