<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: polz.php');
}

?>

<html>
<head>
<meta charset="utf8mb4_unicode_ci">
    <title>Главная</title>  
    <link href="woow.css" rel="stylesheet">
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
<form class="regis" action="signin.php" method="post">
<label>Логин</lable>
<input name="login" type="text" placeholder="Введите логин">
<label>Пароль</lable>
<input name="password" type="password" placeholder="Введите пароль">
<button type="submit">Войти</button>
<p>Впервые у нас?<a class="urll" href="reg.php"> Зарегистрируйтесь!</a></p>
<?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>
</form>
<a class="FIO">СМИРНОВА С ИС18</a>

</td><td>

<br>

</td><td>
  <div class="inf" >  
  <center> <a class="zagolovok">Наши выполненные заявки:</a><br><br><br>
  <a class="info">Заявка: помойте нашу собаку и сделайте её меньше<br>Описание: пожалуйста, помойте нашу собаку как можно быстрее<br>Категория: Мытьё<br> Статус: Решена</a> <br> <img src="https://mtdata.ru/u16/photo3759/20344246345-0/original.jpg" width="40%" height="20%">
 <p><a href="#" class="rollover"> </a></p>
  <br>
  <a class="info">Заявка: Купите нам собаку<br>Описание: Хотим милую собаку<br>Категория: Покупка<br> Статус: Отклонена</a><br><img src="https://content.foto.my.mail.ru/mail/marina_spb2003/_blogs/i-33112.jpg" width="40%" height="20%">
  <br><br>
<a class="info">Мы моем собак<br>с 2015 года!</a><br></center>
</div>
</td></tr>
  </table>
</body>
</html>