<?php
  include("path.php");
  include("app/controllers/category.php");
  $posts = selectAllFromPostsWithUsersOnIndex('posts', 'users');
  $top_posts = selectTopPosts('posts');
  // tt($top_posts);
  
  // tt($posts);
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
    <!-- Carousel start -->
  <div class="container">
      <div class="row">
          <h2 class="slider-title">Top favorite posts</h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide">
            
            <div class="carousel-inner">
            <?php foreach ($top_posts as $key => $top_post): ?>
              <?php if($key == 0): ?>
                <div class="carousel-item active">
                  <?php else:?>
                <div class="carousel-item">
                  <?php endif;?>
                  <img src="<?=BASE_URL . 'assets/img/posts/'. $top_post['img']?>" class="d-block w-100" alt="<?=$top_post['title']?>">
                <div class="carousel-caption-test carousel-caption d-none d-md-block">
                  <h5><a href="single.php?post=<?=$top_post['id']?>"><?=mb_substr($top_post['title'],0, 120, 'UTF-8') . '...'?></a></h5>
                </div>
              <?php endforeach;?>
            </div>
            

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  </div>
    <!-- Carousel finish -->
    
    <!-- Main block start -->
  <div class="container">
      <div class="content row">
        <!-- Maint Content -->
        <div class="main-content col-md-9 col-12">
          <h2>Last publication</h2>
          <?php foreach ($posts as $post): ?>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="<?=BASE_URL . 'assets/img/posts/'. $post['img']?>" alt="<?=$post['title']?>" class="img-thumbnail">
            </div>
            <div class="post-text col-12 col-md-8">
              <h3>
                <a href="single.php?post=<?=$post['id']?>"><?=mb_substr($post['title'],0, 120, 'UTF-8') . '...'?></a>
              </h3>
              <i class="far fa-user"><?=$post['username']?></i>
              <i class="far fa-calendar"><?=$post['created_date']?></i>
              <p class="preview-text">
                <?=substr($post['title'],0, 150) . '...'?>
              </p>
            </div>
          </div>
          <?php endforeach;?>
        </div>
        <!-- Sidebar Content -->
        <div class="sidebar col-md-3 col-12">
          <div class="section search">
            <h3>Search</h3>
            <form action="./index.php" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Search..." id="">
            </form>
          </div>

          <div class="section topics">
            <h3>Categories</h3>
            <ul>
            <?php foreach ($categories as $key => $category): ?>
              <li><a href="#"><?=$category['name'];?></a></li>
              <?php endforeach; ?>
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