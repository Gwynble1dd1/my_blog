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
                    <h2>Adding Post</h2>
                </div>

                <div class="row add-post">
                    <form action="create.php" method="post">
                    <form>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Title" aria-label="Name of post">
                        </div>

                        <div class="col">
                            <label for="content" class="form-label">Post</label>
                            <textarea class="form-control" id="content" rows="6"></textarea>
                        </div>
                        <div class="input-group col">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Submit post</button>
                        </div>

                    </form>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>