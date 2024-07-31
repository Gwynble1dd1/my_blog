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
        $img = '';
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
        $title = '';
        $content = '';
    };


// editing category
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $category = selectOne('category', ['id'=> $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
};

// // updating category
// if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-edit'])){
//     $name = trim($_POST["name"]);
//     $description = trim($_POST["description"]);
//     $id = $_POST["id"];
//     if($name === '' || $description === ''){
//         $errMSG = 'Not all field filled';
//     }elseif (mb_strlen($name, 'UTF-8') < 2){
//         $errMSG = 'Category name can not be shorter than 2 symbols';
//     }else{
//         $exist = selectOne('category', ['name'=> $name]);
//         if(!empty($exist['name']) && $exist['name'] === $name){
//             $errMSG = 'Same category is exist';
//         }else{
//             $category = [
//                 "name"=> $name,
//                 "description"=> $description
//             ];
//             $id = $_POST["id"];
//             $category_id = update('category', $id, $category);
            
//             header('location: ' . BASE_URL .'admin/topics/index.php');
 
//             // $errMSG = "<div style ='color: green;'> User <strong> $login </strong> has beed created </div>";
//         }
//     }};

// // Deleting category
// if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
//     $id = $_GET['delete_id'];

//     delete('category', $id);

//     header('location: ' . BASE_URL .'admin/topics/index.php');
// };

?>