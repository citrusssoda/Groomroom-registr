<?php
session_start(); //запуск сессии
require_once 'connect.php';
//подключение к БД

$nazv_z = $_POST['nazv_z'];
$opis_z=$_POST['opis_z'];
$kategor=$_POST['kategor'];


if($nazv_z!=''){
    $check_user = mysqli_query($connect, "SELECT * FROM `users`");
if(mysqli_num_rows($check_user)>0){
   
    $user = mysqli_fetch_assoc($check_user);
    $path = 'uploads/'. time(). $_FILES['photo1']['name'];
    if (!move_uploaded_file($_FILES['photo1']['tmp_name'], '../'.$path)){
        $_SESSION['message'] = "error";
        header('location: polz.php');
    }
    //если пароли совпадают,то
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
    "id" => $user['id_user'],
    "fio" => $user['fio'],
    "email" => $user['email'],
    "id_role" => $user['id_role'],
    "photo1" => $user['photo1']
    ];
    $sql = "INSERT INTO zayavki (`id_zayavki`, `nazv_z`, `opis_z`, `id_kategor`, `photo1`, `photo2`, `id_status`,`id_user`) VALUES (NULL, '$nazv_z', '$opis_z', 'idkategor','$path','photo2','1', '1')";
$res = mysqli_query($connect, $sql) or die ("Ошибка". mysqli_error($connect));
    $_SESSION['message']="Заявка создана!";//вывод сообщения
    header('location: polz.php');//Вернуться к входу
}
else{
    //если нет
    $_SESSION['message']="Вы не заполнили поле(я)";//Ошибка
    header('location: polz.php');//Вернуться к регистрации
}
}
?>

