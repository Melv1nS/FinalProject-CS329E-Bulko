<?php   
  $state = false;
  $cstate = false;
  $server = "spring-2022.cs.utexas.edu";
  $dbuser   = "cs329e_bulko_shaojie";
  $dbpwd    = "and!manual&During";
  $dbName = "cs329e_bulko_shaojie";

  $mysqli = new mysqli ($server, $dbuser, $dbpwd, $dbName);

  $user = $_POST['user'];
  $pass = $_POST['pw'];

  $show = "SELECT username FROM foodieuser WHERE username='".$user."';";
  $compare = "SELECT pwd from foodieuser WHERE username = '".$user."';";
  $insert = "INSERT INTO foodieuser (username, pwd) VALUES ('$user', '$pass');";
  $update = "UPDATE foodieuser SET pwd = '$pass' WHERE username = '$user';";

  // $pf = explode("\n", file_get_contents("signup.txt"));
  $login_state = false;
  if (isset($_POST['submit2'])){
    if(empty($user) || empty($pass)){
      echo("<script>alert('There are empty fields!')</script>");
    }
    else{
      if ($result = $mysqli -> query($compare)) {
        while ($row = $result -> fetch_row()) {
          if ($row[0] == $pass){
            $cstate = true;
          }    
      }
    }
      // $up = $user . ":" . $pass;
      // for ($i=0; $i<count($pf);$i++){
      //     if($up == $pf[$i]){
      //         $login_state = true;
    if ($cstate == true){
      $login_state = true;
      setcookie("user", $user, time()+3600, "/");
      header('Location: home.php');
    }
          // }
      // }

    if ($login_state == false){
      echo "<script>
                alert('Invalid Username or Password');
                window.location.href='index.html';
              </script>";
      }
    }
}
?>