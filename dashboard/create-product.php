<?php
  $name = $_POST['name'];

  $adicionar = $_POST['adicionar'];

  $connect = pg_connect("host=pgsql.loverani.com.br dbname=loverani user=loverani password=cvjunior1207");

  if(isset($adicionar)) {
    $insert = pg_query("INSERT INTO products (name) VALUES ('$name');");
    echo"<script language='javascript' type='text/javascript'>
    alert('Sucesso');window.location
    .href='index.php';</script>";
  }
?>
