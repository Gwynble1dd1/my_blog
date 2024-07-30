<?php

session_start();
require('connect.php');

// функция для проверки

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
    exit();
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
                $value = "'".$value."'";
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

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    return $query->fetch(); // выбрать только одну запись
}

// запись нового пользователя в БД

function insert($table, $params){
    global $pdo;
    $i = 0;
    $column = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0){
            $column = $column . "$key";
            $mask = $mask . "'" . "$value" . "'";
        }else{
            $column = $column . ", $key";
            $mask = $mask . ", '" . "$value" ."'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($column) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $pdo->lastInsertId();
}

// обновление записи в БД

function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else {
            $str = $str .", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id =" . $id;
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

// функция удаления

function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table  WHERE id =" . $id;
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

?>