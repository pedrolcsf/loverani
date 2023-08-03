<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      header("Location:index.php");
    }else{
      header("Location:login.html");
    }
?>