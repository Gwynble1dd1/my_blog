<?php 
include("path.php"); 
include SITE_ROOT . "/app/database/db.php";
$post= selectOne('posts',['id'=> $_GET['post']]);
$user =selectOne('users',['id'=> $post['id_author']]);
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
    <link rel="stylesheet" href="/my_blog/assets/css/style.css">
</head>
  <body>
<!-- Header include-->
<?php include("app/include/header.php"); ?>
    
    <!-- Main block start -->
  <div class="container">
      <div class="content row">
        <!-- Maint Content -->
        <div class="main-content col-md-9 col-12">
          <h2>
            <?=$post['title'];?>
          </h2>

        <div class="single_post row">
            <div class="img col-12">
              <img src="<?=BASE_URL . 'assets/img/posts/'. $post['img']?>" alt="<?=$post['title']?>" class="img-thumbnail">
            </div>

            <div class="info">
                <i class="far fa-user"> <?=$user['username'];?> </i>
                <i class="far fa-calendar"> <?=$post['created_date'];?></i>
            </div>

            <div class="single_post-text col-12">
              <p>
              <?=$post['content'];?>
              </p>
            </div>
          </div>

        </div>
        <!-- Sidebar Content -->
        <div class="sidebar col-md-3 col-12">
          <div class="section search">
            <h3>Search</h3>
            <form action="/my_blog/index.php" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Search..." id="">
            </form>
          </div>

          <div class="section topics">
            <h3>Categories</h3>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Fictions</a></li>
              <li><a href="#">Eat</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Pentesting</a></li>
              <li><a href="#">Snails</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>    
    <!-- Main block stop -->
    
  <!-- Footer include -->
  <?php include("app/include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>