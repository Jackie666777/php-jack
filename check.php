<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == 'admin' && $password == '1234'){
    echo "Welcome to Dashoard";
    $_SESSION["username"] = $username ;
    echo " Hi ". $_SESSION["username"];
    header ("location: dashboard");
  }else{
    echo "Username or Password ผิดพลาด";
  }

?>