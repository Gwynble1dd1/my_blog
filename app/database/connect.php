<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_blog","root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    echo "Connected Successfully <br>";
    } catch (PDOException $e) {
        echo "ERROR: -->" . $e->getMessage();
        die();
    }

    
?>