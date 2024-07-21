<?php
include("../../path.php"); 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4cdb3a5b68.js" crossorigin="anonymous"></script>
    <!--  Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <!-- My css -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

  <body>
    <!-- Header include-->
    <?php include("../../app/include/header-admin.php"); ?>
    
    <div class="container">
        <div class="row">
            <div class="sidebar col-3">
                <ul>
                    <li>
                        <a href="">Records</a>
                    </li>
                    <li>
                        <a href="">Users</a>
                    </li>
                    <li>
                        <a href="">Categories</a>
                    </li>
                </ul>
            </div>

            <div class="posts col-9">
                <div class="button row">
                    <a href="create.php" class="col-3 btn btn-success" >Add Post</a>
                    <span class="col-1"></span>
                    <a href="index.php" class="col-3 btn btn-warning">Manage Posts</a>
                </div>

                <div class="row title-table">
                    <h2>Enteries Managment</h2>
                    <div class="col-1">ID</div>
                    <div class="col-4">Post name</div>
                    <div class="col-3">Author</div>
                    <div class="col-4">Manage</div>
                </div>

                <div class="row post">
                    <div class="id col-1">2</div>
                    <div class="title col-4">Test post</div>
                    <div class="author col-3">NoName Author</div>
                    <div class="red col-2"><a href="">Edit</a></div>
                    <div class="del col-2"><a href="">Delete</a></div>
                </div>


                <div class="row post">
                    <div class="id col-1">2</div>
                    <div class="title col-4">Test post</div>
                    <div class="author col-3">NoName Author</div>
                    <div class="red col-2"><a href="">Edit</a></div>
                    <div class="del col-2"><a href="">Delete</a></div>
                </div>

                <div class="row post">
                    <div class="id col-1">2</div>
                    <div class="title col-4">Test post</div>
                    <div class="author col-3">NoName Author</div>
                    <div class="red col-2"><a href="">Edit</a></div>
                    <div class="del col-2"><a href="">Delete</a></div>
                </div>

            </div>

        </div>
    </div>

    <!-- Footer include -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>