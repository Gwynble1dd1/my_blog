<?php 
include SITE_ROOT . "/app/database/db.php";

if (!$_SESSION){
    header("location: ". BASE_URL ."log.php");
}

$errMSG = [];
$id = '';
$name = '';
$description = '';
$img = '';
$category = '';

$categories = selectAll('category');
$posts = selectAll('posts');
$posts_author = selectAllFromPostsWithUsers('posts', 'users');

// form to create post
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-post'])){
    if(!empty($_FILES['img']['name'])){
        $imgName = time()."_".$_FILES['img']['name'];
        $fileType = $_FILES['img']['type'];
        $imgTmp = $_FILES['img']['tmp_name'];
        $imgSize = $_FILES['img']['size'];


        $destination = ROOT_PATH . '\assets\img\posts\\'. $imgName;

        if(strpos($fileType, 'image') === false) {
            array_push($errMSG, 'Only image supported');
        }
        elseif($imgSize > 5242880){
             array_push($errMSG, 'File size must be less than 5 MB');
        }

        $result = move_uploaded_file($imgTmp, $destination);
        if($result){
            $_POST["img"] = $imgName;
        }else{
             array_push($errMSG, 'Error in uploading image to server');
        }
    }else{
         array_push($errMSG, 'Error in uploading image to post');
    }


    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);
    $category = trim($_POST["category"]);
    $img = $_POST["img"];
  

    $is_publish = isset(($_POST["publish"])) ? 1 : 0;


    if($title === '' || $content === '' || $category === ''){
         array_push($errMSG, 'Not all field filled');
    }elseif (mb_strlen($title, 'UTF-8') < 7){
        array_push($errMSG, 'Title name can not be shorter than 7 symbols');
    }else{
            $post = [
                "id_author"=>$_SESSION['id'],
                "title"=> $title,
                "content"=> $content,
                "img"=> $img,
                "status"=>$is_publish,
                "category_id"=> $category
            ];
            $post = insert('posts', $post);
            $new_category_id = selectOne('posts', ['id' => $id]);
            
            header('location: ' . BASE_URL .'admin/posts/index.php');
 
            // $errMSG = "<div style ='color: green;'> User <strong> $login </strong> has beed created </div>";
        }
    }else{
        $id = '';
        $title = '';
        $content = '';
        $is_publish = '';
        $category = '';
    };


// editing post
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $post = selectOne('posts', ['id'=> $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $category = $post['category_id'];
    $is_publish = $post['status'];
};

// updating post
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-post'])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $img = $_POST['img'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $is_publish = isset(($_POST["publish"])) ? 1 : 0;

    if(!empty($_FILES['img']['name'])){
        $imgName = time()."_".$_FILES['img']['name'];
        $fileType = $_FILES['img']['type'];
        $imgTmp = $_FILES['img']['tmp_name'];
        $imgSize = $_FILES['img']['size'];


        $destination = ROOT_PATH . '\assets\img\posts\\'. $imgName;

        if(strpos($fileType, 'image') === false) {
            array_push($errMSG, 'Only image supported');
        }
        elseif($imgSize > 5242880){
             array_push($errMSG, 'File size must be less than 5 MB');
        }

        $result = move_uploaded_file($imgTmp, $destination);
        if($result){
            $_POST["img"] = $imgName;
        }else{
             array_push($errMSG, 'Error in uploading image to server');
        }
    }else{
         array_push($errMSG, 'Error in uploading image to post');
    }

    if($title === '' || $content === '' || $category === ''){
         array_push($errMSG, 'Not all field filled');
    }elseif (mb_strlen($title, 'UTF-8') < 7){
        array_push($errMSG, 'Title name can not be shorter than 7 symbols');
    }else{
            $post = [
                "id_author"=>$_SESSION['id'],
                "title"=> $title,
                "content"=> $content,
                "img"=> $_POST['img'],
                "status"=>$is_publish,
                "category_id"=> $category
            ];

            $post = update('posts', $id, $post);
            header('location: ' . BASE_URL .'admin/posts/index.php');
        }
    }else{ 
        // $title = $_POST["title"];
        // $content = $_POST["content"];
        // $is_publish = isset($_POST['publish']) ? 1 : 0;
        // $category = $_POST["category_id"];
    };
;

// Deleting post
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('posts', $id);
    header('location: ' . BASE_URL .'admin/posts/index.php');
};

// publish or unpublish
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $is_publish = $_GET['publish'];
    
    $post_id = update('posts', $id, ['status'=> $is_publish]);
    header('location: ' . BASE_URL .'admin/posts/index.php');
    exit();
};


?>