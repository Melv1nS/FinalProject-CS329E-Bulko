<?php
  $user = $_POST['user'];
  $pass = $_POST['pw'];
  
  echo($user);
  echo($pass);

  // $pf = explode("\n", file_get_contents("signup.txt"));
  
  
  // if (isset($_POST["btn1"])){
      
  //   if(empty($user || $pass)){
  //     echo("<script>alert('There are empty fields!')</script>");
  //   }
  //   else{
  //     $up = $user . ":" . $pass;
  //     for ($i=0; $i<count($pf);$i++){
  //         if($up == $pf[$i]){
              
  //             $login_state = true;
  //             setcookie("user_pass",$up,time()+120,"/");
  //             header('Location: explore.html');
  //         }
  
  //     }
  //     if ($login_state == false){
  //         echo("<script>alert('Wrong Username or Password')</script>"); 
  //     }
  //   }
  // }
?>


