<?php
include("../../path.php"); 
include("../../app/controllers/posts.php");
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
                    <a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-3 btn btn-success">Make Post</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Manage Posts</a>
                </div>

                <div class="row title-table">
                    <h2>Enteries Managment</h2>
                    <div class="col-1">ID</div>
                    <div class="col-3">Post name</div>
                    <div class="col-2">Author</div>
                    <div class="col-6">Manage</div>
                </div>
                <?php foreach ($posts_author as $key => $post):?>
                <div class="row post">
                    <div class="id col-1"><?=$key + 1?></div>
                    <div class="title col-4"><?=substr($post['title'],0,50);?></div>
                    <div class="author col-2"><?=$post['username'];?></div>
                    <div class="red col-1"><a href="edit.php?id=<?=$post['id'];?>">Edit</a></div>
                    <div class="del col-2"><a href="edit.php?delete_id=<?=$post['id'];?>">Delete</a></div> 
                    <?php if($post['status']): ?>
                        <div class="status col-2"><a href="edit.php?publish=0&pub_id=<?=$post['id'];?>">Unpublish</a></div>
                    <?php else:?>
                        <div class="status col-2"><a href="edit.php?publish=1&pub_id=<?=$post['id'];?>">Publish</a></div>
                    <?php endif;?>
                </div>
                <?php endforeach;?>

            </div>

        </div>
    </div>

    <!-- Footer include -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>