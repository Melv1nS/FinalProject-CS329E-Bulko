<?php
$user = $_POST['user'];
$pass = $_POST['pw'];
$repass = $_POST['pwconfirm'];

if (isset($_POST['signup'])){
  if(empty($user || $pass || $repass)){
    echo("<script>alert('There are still empty fields!')</script>");
  }
  else{
    if (count($user)<6 && count($user)>11){
      echo("<script>alert('Username must be 6-11 digits!')</script>");
    }
    if ($pass != $repass){
      echo("<script>alert('Passwords entered are incompatible!')</script>");
    }
    else{
      $up = $user . ":" . $pass . "\n";
      $myfile = fopen("testfile.txt", "w");
      fwrite($myfile, $up);
      fclose($myfile);
    }
  }
}

?>





