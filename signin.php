<head>
    <title>Foodies</title>
    <meta charset="UTF-8">
    <meta name="description" content="This is the webpage of Foodies">
    <meta name="author" content="Sean, Melvin, Keshav, Saahir">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="styles.css">
</head> 

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

<?php
  $user = $_POST['user'];
  $pass = $_POST['pw'];
  $login_state = false;
  echo($login_state);
  
  $pf = explode("\n", file_get_contents("signup.txt"));
  
  // for ($i=0; $i<count($pf);$i++){
  // echo($pf[$i]."<br>");
  // }
  
  if (isset($_POST["btn1"])){
      // echo("in submit"."<br>");
      if(empty($user || $pass)){
          echo("<script>alert('There are empty fields!')</script>");
      }
      else{
          $up = $user . ":" . $pass;
          for ($i=0; $i<count($pf);$i++){
              if($up == $pf[$i]){
                  // echo("in login true"."<br>");
                  $login_state = true;
                  setcookie("user_pass",$up,time()+120,"/");
                  header('Location: explore.html');
              }
      
          }
          if ($login_state == false){
              echo("<script>alert('Wrong Username or Password')</script>"); 
          }
  
      }
  }


?>





<body>
  <div class="page-container">
    <div class="content-wrap">
      <div class="Home" style='font-family: oswald;'>
        <div class = "header">
             <!-- LOGO -->
             <!-- <li class="nav-li"></li> -->
             <nav>
                <ul class = "nav-list">
                   <li class="nav-li"><a class = "nav-link" href="index.html"><img class = "logo" src="logo.png" alt="Logo of Foodies"></a></li>
                   <li class="nav-li"><a class = "nav-link" href="explore.html">Explore</a></li>
                   <li class="nav-li"><a class = "nav-link" href="contactus.html">Contact Us</a></li>
                   <li class="nav-li"><a class = "nav-link" href="faq.html">FAQs</a></li>
                   <li class="nav-li"><a class = "nav-link current-link" href="signin.html">Sign In</a></li>
                   <li class="nav-li"><a class = "nav-link" href="signup.html">Sign Up</a></li>
                   <li class="nav-li"><a class = "nav-link" href="post.html">Create Post</a></li>
                   
                </ul>
             </nav>
    
        </div>
        
        
        <div class = "boddy" style='font-family: oswald;'>
          <center>
            <h1>Sign In!</h1>
            <form>
              <label for="fname">Email or username:</label><br>
              <input type="text" id="user" name="user"><br>
              <label for="lname">Password:</label><br>
              <input type="password" id="pw" name="pw"><br>
              <br><input type="button" onclick="usercheck(document.getElementById('user').value, 
              document.getElementById('pw').value)" value="Sign in">
            </form>     
        
            <h2 style='font-family: oswald;'>If you have not created an account yet, you can sign up <a href="signup.html">here!</a>
            </h2>   
          </center>
        </div>
    
    
      </div>

      <footer>
        <p>3/28/2022 Melvin, Keshav, Saahir, Sean</p>
      </footer>
      
    </div>
  </div>

</body>


