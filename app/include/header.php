    <!-- Header start-->
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>
                        <a href="<?php echo BASE_URL ?>"> My Blog </a></h1> <!-- Clickable logo -->
                </div>
                <nav class="col-8"> 
                  <!-- Navigation links-->
                    <ul>
                        <li><a href="<?php echo BASE_URL ?>"><i class="fa-solid fa-house"></i>Main</a></li>
                        <li><a href="<?php echo BASE_URL . '/' ?>"><i class="fa-solid fa-address-card"></i>About</a></li>
                        <li><a href="#"><i class="fa-solid fa-server"></i>Services</a></li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-user-tie"></i>
                                Cabinet
                            </a><!-- Sub menuв -->
                            <ul>
                                <li><a href="log.php">Admin Panel</a></li>
                                <li><a href="#">Log Off</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header finish -->