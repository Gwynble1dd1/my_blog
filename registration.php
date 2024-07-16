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
                        <a href="/my_blog/index.html"> My Blog </a></h1> <!-- Clickable logo -->
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
<!-- Registration form start -->
<div class="container reg_from">
    <form class="row justify-content-center" method="post" action="/my_blog/registration.php">
        <h2>Registration Form</h2>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Login</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your login name">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Repeate password</label>
            <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-secondary">Register</button>
            <a href="auth.php">Log In</a>
        </div>
        
    </form>
</div>

<!-- Registration form finished -->

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