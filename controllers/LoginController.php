<?php 
    session_start();
    //including the Login.php connection 
    include "models/Login.php";
   



    class LoginController {
        //function to deal with the route of the use login.
        public function action($routes){
            switch ($routes) {
                //opening the sign up view
                
                case 'sign-in':
                    $this->viewSignIn();
                break;
                case 'user-signIn':
                    $this->userSignIn();
                break;
                case "logout":
                    $this->logout();
                break;
  
            }
        }
        private function viewSignIn(){
            include "views/signIn.php";
        }

        //function to compare the data
        private function userSignIn(){
            $login = new Login();

            //getting the email from the input 
            $email = $_POST['email'];
  
            //using the authentication function to send de email get in the input
            //Get the registered email
            $result = $login->userAuthentication($email);

            //Get de password stored in the db in the variable
            $passDb = $result[0][pass];
            //Password typed in the password input.
            $senha = md5($_POST['pass']);
            

            if($senha === $passDb){
                echo "certo";
                //var_dump($senha);
                $_SESSION['username'] = $result;
                header('Location:/Desafio-fake-insta/posts');

            }else{
                
                echo "errado!";
                var_dump($passDb);
                
            }
            

           
        }
        //user logout function
        private function logout(){
           
            session_destroy();
            header('Location:/Desafio-fake-insta/sign-in');
        }

            

     }

    
?>