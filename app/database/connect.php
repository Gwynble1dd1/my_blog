<?php



try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_blog","root","");
    echo "Connected Successfully <br>";
    } catch (PDOException $e) {
        echo "ERROR: -->" . $e->getMessage();
        die();
    }

    
?>