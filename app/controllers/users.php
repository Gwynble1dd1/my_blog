<?php 
include  SITE_ROOT . "/app/database/db.php";

$errMSG = '';

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


// код для регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST["login"]);
    $email = trim($_POST["mail"]);
    $pass_first = trim($_POST["pass-first"]);
    $pass_second = trim($_POST["pass-second"]);

    if($login === '' || $email === '' || $pass_first === ''){
        $errMSG = 'Not all field filled';
    }elseif (mb_strtolower($login, 'UTF-8') < 2){
        $errMSG = 'Login can not be shorter 2 symbols';
    }elseif ($pass_first !== $pass_second) {
        $errMSG = 'Passwords not same';
    }
    else{
        $exist = selectOne('users', ['email'=> $email]);
        if(!empty($exist['email']) && $exist['email'] === $email){
            $errMSG = 'User with this email is exist';
        }else{
            $pass = password_hash($pass_first, PASSWORD_DEFAULT);
            $post = [
                "admin"=> $admin,
                "username"=> $login,
                "email"=> $email,
                "password"=> $pass
            ];
        
            $id = insert('users', $post);
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
        $errMSG = 'Not all field filled';
    }else{
        $exist = selectOne('users', ['email'=> $email]);
        if($exist && password_verify($password, $exist['password'])){
            UserAuth($exist);
        }else{
            $errMSG = 'Wrong email or password!';
        }}

}else{
    $email = '';
}

?>