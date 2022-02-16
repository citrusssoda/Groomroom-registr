<?php
session_start(); 
require_once 'connect.php';
if(!$_SESSION['user']){
    header('location: polz.php');
   
}
?>

<html>
<head>
<meta charset="utf8mb4_unicode_ci">
    <title>Главная</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="shapka1">
  <center> <table height="auto" class="shapka3"><tr><td>

<img src="logo.png" width="120" height="120">
</td><td>
<h1 class="text1">Груминг-студия "ЧистоПёс"</h1>
</td></tr></table></center>
    </div class="shapka1">

    <table class="content1"><tr><td>
<form class="regis" action="newzayav.php" method="post" enctype="multipart/from-data">
<h2>Это ваш профиль, <?= $_SESSION['user']['fio']?>.</h2>
<p>Вы можете создать заявку, заполнив форму:</p>
<label>Название</lable>
<input type="text" name="nazv_z" placeholder="Введите название заявки">
<label>Описание</lable>
<input type="text" name="opis_z" placeholder="Введите описание заявки">
<br><br>
<?php
$sql = mysqli_query($connect, "SELECT * FROM `kategor`");
?>
<select name="kategoriya">
<?
while($obect = mysqli_fetch_assoc($sql)) {?>
    <option value="<?=$obect['id_kategor']?>"><?=$obect['name_k']?></option>
<?}?>
</select>
<br><br>
<label>Изображение ДО:</lable>
<input type="file" name="photo1">

<button type="submit">Войти</button>
<br><br>
<a class="urll" href="logout.php" class="logout"> Выйти</a>
<?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>

</form>
<br><br>
<img src='<?= $_SESSION['id_user']['photo1']?>' width="100px" alt="">
</td></tr>
  </table>
</body>
</html>