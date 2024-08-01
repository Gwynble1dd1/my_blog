<?php 
include  SITE_ROOT . "/app/database/db.php";

$errMSG = [];

function UserAuth($param){
    $_SESSION['id'] = $param['id'];
    $_SESSION['login'] = $param['username'];
    $_SESSION['admin'] = $param['admin'];
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . 'admin/index.php');
    }else{
        header('location: '. BASE_URL);
    }   
};

$users = selectAll('users');



// код для регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST["login"]);
    $email = trim($_POST["mail"]);
    $pass_first = trim($_POST["pass-first"]);
    $pass_second = trim($_POST["pass-second"]);

    if($login === '' || $email === '' || $pass_first === ''){
        array_push($errMSG, 'Not all field filled');
    }elseif (mb_strtolower($login, 'UTF-8') < 2){
        array_push($errMSG,'Login can not be shorter 2 symbols');
    }elseif ($pass_first !== $pass_second) {
        array_push($errMSG,'Passwords not same');
    }
    else{
        $exist = selectOne('users', ['email'=> $email]);
        if(!empty($exist['email']) && $exist['email'] === $email){
            array_push($errMSG, 'User with this email is exist');
        }else{
            $pass = password_hash($pass_first, PASSWORD_DEFAULT);
            $user = [
                "admin"=> $admin,
                "username"=> $login,
                "email"=> $email,
                "password"=> $pass
            ];
        
            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id]);
            
            UserAuth($user);
 
            // $errMSG = "<div style ='color: green;'> User <strong> $login </strong> has beed created </div>";
        }
    }
    }else{
        $login = '';
        $email = '';
    };
// код для авторизиции
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    $email = trim($_POST["mail"]);
    $password = trim($_POST["password"]);
    if($email === '' || $password === ''){
        array_push($errMSG, 'Not all field filled');
    }else{
        $exist = selectOne('users', ['email'=> $email]);
        if($exist && password_verify($password, $exist['password'])){
            UserAuth($exist);
        }else{
            array_push($errMSG, 'Wrong email or password!');
        }}

}else{
    $email = '';
}

//--------------------------------------------------------------------------------------------------------------------------------------------
// код для регистрации нового пользователя ADMIN
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])){

    $admin = 0;
    $login = trim($_POST["login"]);
    $email = trim($_POST["mail"]);
    $pass_first = trim($_POST["pass-first"]);
    $pass_second = trim($_POST["pass-second"]);

    if($login === '' || $email === '' || $pass_first === ''){
        array_push($errMSG,  "Not all field filled");
    }elseif (mb_strtolower($login, 'UTF-8') < 2){
        array_push($errMSG,  'Login can not be shorter 2 symbols');
    }elseif ($pass_first !== $pass_second) {
        array_push($errMSG, 'Passwords not same');
    }
    else{
        $exist = selectOne('users', ['email'=> $email]);
        if(!empty($exist['email']) && $exist['email'] === $email){
            array_push($errMSG, 'User with this email is exist');
        }else{
            $pass = password_hash($pass_first, PASSWORD_DEFAULT);
            if(isset($_POST['admin'])) $admin = 1;
            $user = [
                "admin"=> $admin,
                "username"=> $login,
                "email"=> $email,
                "password"=> $pass
            ];
        
            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id]);
 
            // $errMSG = "<div style ='color: green;'> User <strong> $login </strong> has beed created </div>";
        }
    }
    }else{
        $login = '';
        $email = '';
    };


// Deleting user
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('users', $id);
    header('location: ' . BASE_URL .'admin/users/index.php');
};


// editing user in admin
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
    $user = selectOne('users', ['id'=> $_GET['edit_id']]);

    $id = $user['id'];
    $login = $user['username'];
    $email = $user['email'];
    $admin = $user['admin'];
};



if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){

    $id = $_POST['id'];
    $login = $_POST['login'];
    $email = $_POST['mail'];
    $passF = $_POST['pass-first'];
    $passS = $_POST['pass-second'];
    $admin = isset(($_POST["admin"])) ? 1 : 0;

    if($login === ''){
         array_push($errMSG, 'Not all field filled ');
    }elseif (mb_strlen($login, 'UTF-8') < 2){
        array_push($errMSG, 'Login can not be shorter than 7 symbols');
    }elseif ($passF !== $passS) {
        array_push($errMSG, 'Passwords not same');
    }else{
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        if(isset($_POST['admin'])) $admin = 1;
        $user = [
            "admin"=> $admin,
            "username"=> $login,
            // "email"=> $email,
            "password"=> $pass
        ];
    
        $user = update('users', $id, $user);
        header('location: ' . BASE_URL .'admin/users/index.php');

        }
    }else{
        // $id =  $user['id'];
        // $admin =  $user['admin'];
        // $username = $user['username'];
        // $email = $user['email'];
    };
;

?>