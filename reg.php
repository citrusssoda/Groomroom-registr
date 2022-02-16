<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: /');
}

?>

<html>
<head>
    <meta charset="utf8mb4_unicode_ci">
    <title>Регистрация</title>
    <link rel="stylesheet" href="woow.css">
</head>
<body>
<div class="shapka1">
  <center> <table height="auto" class="shapka3"><tr><td>
  <img class ="fon" src="logo.svg">
</td><td>
<h1 class="text1">Груминг-студия "ЧистоПёс"</h1>
</td></tr></table></center>
    </div class="shapka1">

    <table class="content1"><tr><td>
<form class="regis" action="signup.php" method="post">
<label>Ф.И.О.</lable>
<input type="text" name="fio" placeholder="Введите своё ФИО">
<label>Логин</lable>
<input type="text" name="login" placeholder="Придумайте логин">
<label>Почта</lable>
<input type="email" name="email" placeholder="Введите свою почту">
<label>Пароль</lable>
<input type="password" name="password" placeholder="Придумайте пароль">
<label>Подтвердите пароль</lable>
<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
<button type="submit">Зарегистрируйтесь</button>
<p>Уже зарегестрированы?<a class="urll" href="index.php"> Авторизируйтесь!</a></p>
 <?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>

</form>
</td></tr>
  </table>
</body>
</html>