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
    $repass = $_POST['pwconfirm'];

    $show = "SELECT username FROM foodieuser WHERE username='".$user."';";
    $compare = "SELECT pwd from foodieuser WHERE username = '".$user."';";
    $insert = "INSERT INTO foodieuser (username, pwd) VALUES ('$user', '$pass');";
    $update = "UPDATE foodieuser SET pwd = '$pass' WHERE username = '$user';";

  // echo $user;
  // echo $pass;
  // echo $repass;
  if (isset($_POST['submit'])){
    if(preg_match('/^[a-zA-Z0-9]{5,}$/', $user) && $pass == $repass) { // for english chars + numbers only
        // valid username, alphanumeric & longer than or equals 5 chars
        // $up = $user . ":" . $pass . "\n";
        // $myfile = file_put_contents('signup.txt', $up.PHP_EOL , FILE_APPEND | LOCK_EX);
        if ($result = $mysqli -> query($show)) {
            while ($row = $result -> fetch_row()) {
              // printf ($row[0]."<br>");
              // printf ($user."<br>");
              if ($row[0] == $user){
                $state = true;
              }             
            }
          }
          if ($state == false){
            $result = $mysqli->query($insert);
            echo "New user registered";
            setcookie("user", $user, time()+3600, "/");
            header("Location: home.php");
          }
          else{
              echo "<script>
              alert('User has been existed');
              window.location.href='signup.html';
          </script>";
          }        

        //make a cookie
    }
    else {
        echo "<script>
                alert('Invalid Username or Password');
                window.location.href='signup.html';
            </script>";
    }
}

  // echo '<script> usercheck({'.$user.'}) </script>'

  //validation
  //make cookie
  //redirect to home


// if (isset($_POST['signup'])){
//   if(empty($user || $pass || $repass)){
//     echo("<script>alert('There are still empty fields!')</script>");
//   }
//   else{
//     if (count($user)<6 && count($user)>11){
//       echo("<script>alert('Username must be 6-11 digits!')</script>");
//     }
//     if ($pass != $repass){
//       echo("<script>alert('Passwords entered are incompatible!')</script>");
//     }
//     else{
//       $up = $user . ":" . $pass . "\n";
//       echo($up);
//       $myfile = fopen("signup.txt", "w");
//       fwrite($myfile, $up);
//       fclose($myfile);
//       header("Location: home.html");
//     }
//   }
// }

?>

<script>

    function usercheck(u, p1){

        u2 = [u.split('')];
        p = [p1.split('')];

        ulen = u.length;
        plen = p1.length;

        var letterNum = /^[0-9a-zA-Z]+$/;

        if (ulen > 10 || ulen < 6 || isNaN(u2[0][0])==false) {
            alert("Invalid username or password");
        }
        else if(u.match(letterNum)==false){
            alert("Invalid username or password");
        }

        else if (plen > 10 || plen < 6){
            alert("Invalid username or password");
        }

        else if (p1.match(letterNum)==false){
            alert("Invalid username or password");
        }

        else if(hasLowerCase(p1)==false || hasUpperCase(p1)==false || hasNum(p1)==false) {
            alert("Invalid username or passwrod")
        }

        else {
            alert("User validated")
        }
    }

    function hasLowerCase(s) {
        return (/[a-z]/.test(s));
    }

    function hasUpperCase(s) {
        return (/[A-Z]/.test(s));
    }

    function hasNum(s){
        return (/[0-9]/.test(s));
    }

</script>

