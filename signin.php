<?php
  $user = $_POST['user'];
  $pass = $_POST['pw'];

  $pf = explode("\n", file_get_contents("signup.txt"));
  $login_state = false;

  if(empty($user) || empty($pass)){
    echo("<script>alert('There are empty fields!')</script>");
  }
  else{
    $up = $user . ":" . $pass;
    for ($i=0; $i<count($pf);$i++){
        if($up == $pf[$i]){
            $login_state = true;
            setcookie("user", $user, time()+3600, "/");
            header('Location: home.php');
        }
    }

    if ($login_state == false){
      echo "<script>
              alert('Invalid Username or Password');
              window.location.href='index.html';
            </script>";
    }
  }
?>