<?php
include("../../path.php"); 
include("../../app/controllers/category.php");
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
                    <a href="<?php echo BASE_URL . "admin/topics/create.php";?>" class="col-3 btn btn-success">Add Category</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "admin/topics/index.php";?>" class="col-3 btn btn-warning">Edit Category</a>
                </div>
                
                <div class="row title-table">
                    <h2>Topics Managment</h2>
                    <div class="col-1">ID</div>
                    <div class="col-4">Post name</div>
                    <div class="col-4">Manage</div>
                </div>
                <?php foreach ($categories as $key => $category): ?>
                <div class="row post">
                    <div class="id col-1"><?=$key + 1;?></div>
                    <div class="title col-4"><?=$category['name'];?></div>
                    <div class="red col-2"><a href="edit.php?id=<?=$category['id']?>">Edit</a></div>
                    <div class="del col-2"><a href="edit.php?delete_id=<?=$category['id']?>">Delete</a></div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>

    <!-- Footer include -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>