<?php include("path.php"); ?>
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
            Post title with 17 words Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Nam repellat, nesciunt consequatur quaerat inventore similique?
        </h2>

        <div class="single_post row">
            <div class="img col-12">
              <img src="/my_blog/assets/img/austin-chan-unsplash.png" alt="" class="img-thumbnail">
            </div>

            <div class="info">
                <i class="far fa-user"> Name </i>
                <i class="far fa-calendar"> June 12, 2045</i>
            </div>

            <div class="single_post-text col-12">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus corrupti error,
                sequi distinctio ex magni <a href="">tenetur</a> tenetur numquam omnis doloribus voluptatum eveniet facere sunt rerum deleniti, 
                dignissimos delectus non dolorum cumque fugit odit iste itaque quisquam pariatur? Facilis quis est maxime aspernatur magnam blanditiis
                quos expedita vero iste sed, obcaecati cumque sint aperiam soluta hic cupiditate, nulla corrupti error iure tenetur libero.
                Praesentium, cumque rem debitis voluptatum illum tempora ipsa distinctio fugiat quae necessitatibus ipsum unde ea nihil commodi,
                aperiam aliquid, sed iure. Dicta esse, voluptas ex in fugiat vero. Numquam molestiae placeat vitae ad fugiat necessitatibus 
                veniam dolor commodi ullam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur voluptas sed impedit dolorem deserunt vitae rem accusantium officiis,
                pariatur natus nisi labore ipsum rerum! Recusandae esse aliquam enim voluptatibus asperiores, reprehenderit 
                sint. Quo animi blanditiis voluptatem eligendi dolores excepturi velit nam veritatis, consequuntur libero accusantium 
                incidunt dolore ullam officia error. Explicabo assumenda ut blanditiis culpa accusantium recusandae quos odio commodi voluptatibus 
                tempora sequi obcaecati saepe debitis hic animi, ea ullam perspiciatis eos! Quidem, voluptates quis. Assumenda sunt fugiat dolore, quod 
                iste accusantium neque ut laudantium inventore mollitia ullam. Cupiditate perspiciatis labore placeat suscipit impedit, rem autem. Quibusdam
                possimus maxime ipsa quis magni atque et. Porro fuga a quos inventore, fugit voluptates, autem assumenda eligendi dolorem impedit numquam nobis cupiditate in nemo
                nihil tempore debitis, deserunt alias pariatur. Eius excepturi temporibus quas, reiciendis facilis, quos eum ut rerum numquam tempora praesentium? Qui quod cupiditate
                ratione praesentium corrupti commodi maxime minus modi inventore veniam mollitia tenetur exercitationem nesciunt pariatur nam placeat, sed voluptatem quos enim 
                ab aliquid quibusdam, porro perspiciatis cumque. Delectus ipsum, consectetur, tempore repellendus neque praesentium a quia ullam vero officia voluptatum odio 
                voluptate iste nobis atque. 
                Voluptatibus sequi fugit quo obcaecati ex necessitatibus quod fuga, sit doloremque facere! Temporibus.
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