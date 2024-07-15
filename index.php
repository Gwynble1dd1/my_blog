<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=my_site","root","");
    echo "Connected Successfully <br>";
    } catch (PDOException $e) {
        echo "ERROR: -->" . $e->getMessage();
        die();
    }

    $name = 'Hacker';

    $update_query = "UPDATE users SET age = 99 where name = :username"; // просто создаем переменную с запросом
    $prepared_update_query = $conn->prepare($update_query); // подготавливаем запрос

    $prepared_update_query->execute(['username'=>$name]);


?>