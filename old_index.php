<?php
require_once 'setting.php'; // connect file setting.php
// DB connect
$connection = new mysqli($host, $user, $password, $data); // создание сессии

if ($connection->connect_error) die('Error connection'); // die останосит быльнейшее выполнение кода

$query = "SELECT * FROM users";
$result = $connection->query($query); // вызов метода query

if (!$result) die('Error result'); // если НЕТ переменной result, то закончить подключение

$rows = $result->num_rows; // колличество строк в базе данных
for($i = 0; $i < $rows; ++$i) { 
    $result->data_seek($i); // обращение к каждой строке по одному
    echo 'ID: ' .$result->fetch_assoc()['id']. ' '; 
    $result->data_seek($i); // fetch_assoc сдвигает позицию на единицу
    echo 'Name: ' .$result->fetch_assoc()['name']. '<br>'; 
}
$result->close(); // закончить запрос

$connection->close(); // закрываем подключение к БД

// echo '<pre>'; //отрытие тег форматирования html
// print_r($rows);
// echo '</pre>';

?>