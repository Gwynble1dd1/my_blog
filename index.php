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
    <!-- Header start-->
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>
                        <a href="/my_blog/index.php"> My Blog </a></h1> <!-- Clickable logo -->
                </div>
                <nav class="col-8"> 
                  <!-- Navigation links-->
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-house"></i>Main</a></li>
                        <li><a href="#"><i class="fa-solid fa-address-card"></i>About</a></li>
                        <li><a href="#"><i class="fa-solid fa-server"></i>Services</a></li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-user-tie"></i>
                                Cabinet
                            </a><!-- Sub menuв -->
                            <ul>
                                <li><a href="">Admin Panel</a></li>
                                <li><a href="">Log Off</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header finish -->

    <!-- Carousel start -->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Top favorite posts</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/my_blog/assets/img/arnel-hasanovic-unsplash.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-test carousel-caption d-none d-md-block">
              <h5><a href="">First slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/my_blog/assets/img/austin-chan-unsplash.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-test carousel-caption d-none d-md-block">
              <h5><a href=""></a>Second slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/my_blog/assets/img/image2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-test carousel-caption d-none d-md-block">
              <h5><a href=""></a>Third slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/my_blog/assets/img/florian-klauer-unsplash.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-test carousel-caption d-none d-md-block">
              <h5><a href=""></a>Four slide label</a></h5>
            </div>
          </div>
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

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="/my_blog/assets/img/arnel-hasanovic-unsplash.png" alt="" class="img-thumbnail">
            </div>
            <div class="post-text col-12 col-md-8">
              <h3>
                <a href="">Lorem ipsum.</a>
              </h3>
              <i class="far fa-user"> Name </i>
              <i class="far fa-calendar"> June 12, 2045</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Sit iste cumque fugit praesentium mollitia, dolore provident quos itaque facilis nostrum sint consequuntur rerum, 
                distinctio eaque incidunt impedit porro minus illum!
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="/my_blog/assets/img/austin-chan-unsplash.png" alt="" class="img-thumbnail">
            </div>
            <div class="post-text col-12 col-md-8">
              <h3>
                <a href="">Lorem ipsum.</a>
              </h3>
              <i class="far fa-user"> Name </i>
              <i class="far fa-calendar"> June 12, 2045</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Sit iste cumque fugit praesentium mollitia, dolore provident quos itaque facilis nostrum sint consequuntur rerum, 
                distinctio eaque incidunt impedit porro minus illum!
              </p>
            </div>
          </div>
          
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="/my_blog/assets/img/austin-chan-unsplash.png" alt="" class="img-thumbnail">
            </div>
            <div class="post-text col-12 col-md-8">
              <h3>
                <a href="">Lorem ipsum.</a>
              </h3>
              <i class="far fa-user"> Name </i>
              <i class="far fa-calendar"> June 12, 2045</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Sit iste cumque fugit praesentium mollitia, dolore provident quos itaque facilis nostrum sint consequuntur rerum, 
                distinctio eaque incidunt impedit porro minus illum!
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="/my_blog/assets/img/austin-chan-unsplash.png" alt="" class="img-thumbnail">
            </div>
            <div class="post-text col-12 col-md-8">
              <h3>
                <a href="">Lorem ipsum.</a>
              </h3>
              <i class="far fa-user"> Name </i>
              <i class="far fa-calendar"> June 12, 2045</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Sit iste cumque fugit praesentium mollitia, dolore provident quos itaque facilis nostrum sint consequuntur rerum, 
                distinctio eaque incidunt impedit porro minus illum!
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="/my_blog/assets/img/austin-chan-unsplash.png" alt="" class="img-thumbnail">
            </div>
            <div class="post-text col-12 col-md-8">
              <h3>
                <a href="">Lorem ipsum.</a>
              </h3>
              <i class="far fa-user"> Name </i>
              <i class="far fa-calendar"> June 12, 2045</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Sit iste cumque fugit praesentium mollitia, dolore provident quos itaque facilis nostrum sint consequuntur rerum, 
                distinctio eaque incidunt impedit porro minus illum!
              </p>
            </div>
          </div>


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
    
  <!-- Footer start -->
  <div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
              <h3 class="logo-text">My blog</h3>
              <p>
                Blog made for practice HTML, CSS and PHP. 
                I made it for IT-Safe
              </p>
          
              <div class="contact">
                <span><i class="fa-solid fa-phone"></i>&nbsp; 123-456-789</span>
                <span><i class="fa-solid fa-envelope"></i>&nbsp; test@mail.com</span>
              </div>
              
              <div class="socials">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>

          <div class="footer-section links col-md-4 col-12">
            <h3>Quick Links</h3>
            <br>
            <ul>
              <a href="#">
                <li>Action</li>
              </a>
            </ul>
            <ul>
              <a href="#">
                <li>Command</li>
              </a>
            </ul>
            <ul>
              <a href="#">
                <li>Exercise</li>
              </a>
            </ul>
          </div>

          <div class="footer-section contact-form col-md-4 col-12">
            <h3>Contacts</h3>
            <br>
            <form action="index.html" method="post">
              <input type="email" name="email" class="text-input contact-input" placeholder="You email...">
              <textarea name="message" class="text-input contact-input" rows="4" placeholder="Your message..."></textarea>
              <button type="submit" class="btn btn-big contact-btn">
                <i class="fa-solid fa-envelope"></i>Send
              </button>
            </form>
          </div>
        </div>
        <div class="footer-bottom">
          &copy; my_blog.com | Developed by Gwynble1dd
        </div>
      
    </div>
  <!-- Footer finish -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>