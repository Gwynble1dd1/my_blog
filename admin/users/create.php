<?php
    include "../../path.php";
    include "../../app/controllers/users.php";
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
        <?php include("../../app/include/sidebar-admin.php") ?>

            <div class="posts col-9">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-3 btn btn-success">Add User</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-3 btn btn-warning">Manage User</a>
                </div>

                

                <div class="row title-table">
                    <h2>Creating user</h2>
                </div>

                <div class="row add-post">
                <div class="mb-12 col-12 col-md-12 error">
                        <p>
                            <!-- error aray output -->
                            <?php include("../../app/helps/errorInfo.php") ?>
                        </p>
                    </div>

                    <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Login</label>
                        <input name="login" value="<?=$login;?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your login name">
                    </div>

                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="mail" type="email" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Repeate password</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
                    </div>

                    <input name="admin" class="form-check-input" value="1" type="checkbox" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">isAdmin</label>
                    
                    <div class="col">
                        <button name="create-user" class="btn btn-primary" type="submit">Create user</button>
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