
<?php
session_start(); //запуск сессии
require_once 'connect.php';
//подключение к БД


$login=$_POST['login'];
$password=$_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' and `password`='$password'");
//echo mysqli_num_rows($check_user);  проверка кол-ва строк с указанными данными

if(mysqli_num_rows($check_user)>0){
    
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
    "id" => $user['id_user'],
    "fio" => $user['fio'],
    "email" => $user['email'],
    "id_role" => $user['id_role']
    ];
    if($_SESSION['user']['id_role']==1){
        header('location: admin.php');//зайти в профиль админа
    }
    else{
    header('location: polz.php');//зайти в профиль пользователя
    }
}
else{
    $_SESSION['message']="Ошибка данных!";//вывод сообщения
    header('location: index.php');//Вернуться к входу
}
?>