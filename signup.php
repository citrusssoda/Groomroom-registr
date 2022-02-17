
<?php
session_start(); //запуск сессии
require_once 'connect.php';
//подключение к БД

$fio = $_POST['fio'];//переменная с ФИО
$login=$_POST['login'];//логин
$email=$_POST['email'];//почта
$password=$_POST['password'];//пароль
$password_confirm=$_POST['password_confirm'];//повтор пароля


if($password===$password_confirm){
    //если пароли совпадают,то
    $sql = "INSERT INTO users (`id_user`, `fio`, `login`, `email`, `password`, `id_role`) VALUES (NULL, '$fio', '$login', '$email', '$password', '2')";
$res = mysqli_query($connect, $sql) or die ("Ошибка". mysqli_error($connect));
    //$sql = mysqli_query($connect,  "INSERT INTO users ('id_user', 'fio', 'login', 'email', 'password', 'id_role') VALUES (NULL, '$fio', '$login', '$email', '$password', '2')");
    $_SESSION['message']="Вы зарегестрировались!";//вывод сообщения
    header('location: index.php');//Вернуться к входу
}
else{
    //если нет
    $_SESSION['message']="Пароли не совпадают!";//Ошибка
    header('location: reg.php');//Вернуться к регистрации
}

?>

