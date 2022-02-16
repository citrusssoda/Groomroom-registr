<?php
session_start();
require_once 'connect.php';
if(!$_SESSION['user']){
    header('location: admin.php');
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
<form class="regis" action="" method="" enctype="multipart/from-data">
<h2>Вы зашли как: <?= $_SESSION['user']['fio']?>, Вы - АДМИНИСТРАТОР ! </h2>
<?php
$sql = mysqli_query($connect, "SELECT * FROM `zayavki`");
?>
<select name="zayavki">
<?
while($obect = mysqli_fetch_assoc($sql)) {?>
    <option value="<?=$obect['nazv_z']?>"><?=$obect['opis_z']?><?=$obect['id_kategor']?><?=$obect['id_status']?></option>
<?}?>
</select>
<br><br>
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
</td></tr>
  </table>
</body>
</html>