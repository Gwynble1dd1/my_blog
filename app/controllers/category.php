<?php 
include SITE_ROOT . "/app/database/db.php";


$errMSG = '';
$id = '';
$name = '';
$description = '';
$categories = selectAll('category');

// form to create category
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-create'])){

    $name = trim($_POST["name"]);
    $description = trim($_POST["description"]);

    if($name === '' || $description === ''){
        $errMSG = 'Not all field filled';
    }elseif (mb_strlen($name, 'UTF-8') < 2){
        $errMSG = 'Category name can not be shorter than 2 symbols';
    }else{
        $exist = selectOne('category', ['name'=> $name]);
        if(!empty($exist['name']) && $exist['name'] === $name){
            $errMSG = 'Same category is exist';
        }else{
            $category = [
                "name"=> $name,
                "description"=> $description
            ];
        
            $id = insert('category', $category);
            $category_id = selectOne('category', ['id' => $id]);
            
            header('location: ' . BASE_URL .'admin/topics/index.php');
 
            // $errMSG = "<div style ='color: green;'> User <strong> $login </strong> has beed created </div>";
        }
    }
    }else{
        $name = '';
        $description = '';
    };


// editing category
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $category = selectOne('category', ['id'=> $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
};

// updating category
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-edit'])){
    $name = trim($_POST["name"]);
    $description = trim($_POST["description"]);
    $id = $_POST["id"];
    if($name === '' || $description === ''){
        $errMSG = 'Not all field filled';
    }elseif (mb_strlen($name, 'UTF-8') < 2){
        $errMSG = 'Category name can not be shorter than 2 symbols';
    }else{
        $exist = selectOne('category', ['name'=> $name]);
        if(!empty($exist['name']) && $exist['name'] === $name){
            $errMSG = 'Same category is exist';
        }else{
            $category = [
                "name"=> $name,
                "description"=> $description
            ];
            $id = $_POST["id"];
            $category_id = update('category', $id, $category);
            
            header('location: ' . BASE_URL .'admin/topics/index.php');
 
            // $errMSG = "<div style ='color: green;'> User <strong> $login </strong> has beed created </div>";
        }
    }};

// Deleting category
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];

    delete('category', $id);

    header('location: ' . BASE_URL .'admin/topics/index.php');
};

?>