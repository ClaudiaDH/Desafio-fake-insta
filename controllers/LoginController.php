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
            $result = $login->userAuthentication($email);
            

            $pass = password_verify($_POST['pass'],$result[0]['pass']);
           
            if($pass){  
               
                
                $_SESSION["nomeUsuarioLogado"] = [$result[0]["username"]];

                $_SESSION["idUsuarioLogado"] = [$result[0]["id"]];




                
                

                
                   
                header('Location:/fake-insta/posts');
                }else{
                echo "E-mail ou senha inválidos =(";
                }
        }
        //user logout function
        private function logout(){
           
            session_destroy();
            header('Location:/fake-insta/posts');
        }

            

     }

    
?>