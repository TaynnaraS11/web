<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$conn = mysqli_connect('localhost','phpmyadmin','12345','login');
if (isset($login) && isset($senha)) {
 $verifica = mysqli_query($conn,"SELECT * FROM users WHERE nome =
 '$login' AND pass = '$senha'");
 if (mysqli_num_rows($verifica)<=0) {
 echo '<h1 style="color:red;">Acesso não autorizado</h1>';
 }
 else{
 echo '<h1 style="color:blue;">Acesso Correto</h1>';
 }
}
?> 
