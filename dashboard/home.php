<?php
  $slogan = $_POST['slogan'];
  $description = $_POST['description'];

  $salvar = $_POST['salvar'];

  $connect = pg_connect("host=pgsql.loverani.com.br dbname=loverani user=loverani password=cvjunior1207");

  if(isset($salvar)) {
    $verifica = pg_query("SELECT * FROM info");

  if (pg_num_rows($verifica)<=0){
    $insert = pg_query("INSERT INTO info (slogan, description) VALUES ('$slogan', '$description');");
    echo"<script language='javascript' type='text/javascript'>
    alert('Sucesso');window.location
    .href='index.php';</script>";
    die();
  } else {
    $update = pg_query("UPDATE info SET slogan='$slogan', description='$description' WHERE id=1;");
    echo"<script language='javascript' type='text/javascript'>
    alert('Sucesso');window.location
    .reload();</script>";
    header("Location:index.php");
  }
  }
?>
