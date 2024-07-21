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
                            <?php if (isset($_SESSION['id'])): ?>
                                <a href="#">
                                <i class="fa-solid fa-user-tie"></i>
                                <?php echo($_SESSION['login']); ?>
                                </a>
                            <!-- Sub menuв -->
                            <ul>
                            <?php if ($_SESSION['admin']): ?>
                                <li><a href="admin/admin.php">Admin Panel</a></li>
                            <?php endif; ?>
                                <li><a href="#">Log Off</a></li>
                            </ul>

                            <?php else: ?>
                                <a href="<?php echo BASE_URL . 'log.php' ?>">
                                <i class="fa-solid fa-user-tie"></i>
                                Log In
                                </a>

                                <ul>
                                    <li><a href="<?php echo BASE_URL . 'registration.php' ?>">Registration</a></li>
                                </ul>
                            <?php endif; ?>


                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header finish -->