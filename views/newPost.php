<!-- PAGE THAT IS GONNA REGISTER MY POSTS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Post Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>

    <!--Including the header in the code-->
    <?php include_once "views/includes/header.php"; ?>

    <main class="board">

        <h1>Register New Post</h1>

        <!-- In the action I need to put the route that Im gonna create to take me to the Post Creation-->
        <form action="/fake-insta/register-post" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="img" id="exampleFormControlFile1" class="form-control-file" required>

            </div>

            <div class="form-group">
                <label for="descript">Descripton</label>
                <input type="text" name="descript" id="descript" class="form-control-file" required>
                
            </div>

            <button type="submit" class="btn btn-success">Post</button>
            
        
        </form>


    
    
    </main>

            <!-- ***** JS Scripts ***** -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
</body>
</html>