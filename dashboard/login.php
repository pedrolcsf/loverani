<?php
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);

  $connect = pg_connect("host=pgsql.loverani.com.br dbname=loverani user=loverani password=cvjunior1207");

  if(isset($entrar)) {
    $verifica = pg_query("SELECT * FROM users WHERE email =
    '$login' AND password = '$senha'") or die("erro ao selecionar");

  if (pg_num_rows($verifica)<=0){
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='login.html';</script>";
    die();
  } else {
    setcookie("login",$login);
    header("Location:verify.php");
  }
  }
?>
