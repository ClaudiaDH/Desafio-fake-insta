<?php 

    //including the Post.php connection
    include_once "models/Post.php";

class PostController {
    //Starting a function to deal with the routes.
    public function action($routes){

        switch ($routes) {
            case 'posts':
                $this->postList();
            break;
            //whenever I type in the navigator "post-form" is gonna open the post register page.
            case 'post-form':
                $this->viewPostForm();
            break;     
            //page that is gonna deal with the input data
            case 'register-post':
                $this->registerPost();
            break;   

        }
    }

    private function viewPosts(){
        include_once "views/posts.php";
    }
    //Is gonna open the post register page
    private function viewPostForm(){
        include "views/newPost.php";
    }

    //this function is gonna deal with the input data.
    private function registerPost(){
        //creating a new Object.
        $post = new Post();
        //get information through the method POST from the input name="description "
        $description = $_POST['descript'];
        
        /*Dealing with Images*/
        $fileName = $_FILES ['img']['name'];
        $linkTemp = $_FILES ['img']['tmp_name'];
        $savePath = "views/image/$fileName";
        
        //moving the image from the temp path to the local I want to save it.
        move_uploaded_file($linkTemp,$savePath);
        /* Image moved */

        $result = $post->createPost($savePath,$description);

       
         
        //validation
        if($result){
            header('Location:/fake-insta/posts');
            
        }else{
            echo "Sorry! Something is wrong!";
        }
    

    }
    //when a type in the navigador posts Im gonna get All the posts
    private function postList(){
        //create new Object Post
        $post = new Post();
        //calling the postList from the Post.php
        $postsList = $post->postList();
        $_REQUEST['posts'] = $postsList;
        $this->viewPosts();
    }
}




?>