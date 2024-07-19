<?php 
require('connect.php');

// функция для проверки
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}
// функция проверки на ошибки при подключении к БД
function dbCheckError($query){
    $errorInfo = $query->errorInfo();

    if ($errorInfo[0] !== PDO::ERR_NONE) {
        echo $errorInfo[2];
        exit();
    }
    return true;
}

// Запрос на получение данных с одной таблицы по параметрам
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)){
                $value = "'". $value ."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND  $key = $value";
            }
            $i++;
        }
    }
   
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    
    return $query->fetchAll(); // выбрать все записи
}


// Запрос на получение одной строки с таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)){
                $value = "'". $value ."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND  $key = $value";
            }
            $i++;
        }
    }

    tt($sql);
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    
    return $query->fetch(); // выбрать только одну запись
}


$params = [
    'admin' => 1,
    'username' => 'Sam'
];
// tt(selectAll('users', $params));


tt(selectOne('users', ['admin = 0']));

?>