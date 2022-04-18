<html>
<head>
    <title>Foodies</title>
    <meta charset="UTF-8">
    <meta name="description" content="This is the webpage of Foodies">
    <meta name="author" content="Sean, Melvin, Keshav, Saahir">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="styles.css">
</head>

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
                  <li class="nav-li"><a class = "nav-link" href="signin.html">Sign In</a></li>
                  <li class="nav-li"><a class = "nav-link current-link" href="signup.html">Sign Up</a></li>
                  <li class="nav-li"><a class = "nav-link" href="post.html">Create Post</a></li>
                </ul>
             </nav>
        </div>
        
        <div class = "boddy" style='font-family: oswald;'>
          <center>
            <h1>Sign Up</h1>
            <form>
              <label for="user">Username:</label><br>
              <input type="text" id="user" name="user"><br>
              <!-- <label for="email">Email address:</label><br>
              <input type="text" id="email" name="email"> -->
              <br><label for="pw">Password:</label><br>
              <input type="text" id="pw" name="pw">
              <label for="dd"><br>Confirm your password:</label><br>
              <input type="text" id="pwconfirm" name="pwconfirm">
              <label for="dob"><br>Date of Birth:</label><br>
              <input type="date" id="birth" name="birth"><br>
              <br><input type="submit" value="Sign up" name="signup">
            </form>     
        
            <h2 style='font-family: oswald;'>If you already have created an account, you can sign in <a href="signin.html">here!</a>
            </h2>   
          </center>
        </div>
      </div>
    </div>

    <footer>
      <p>3/28/2022 Melvin, Keshav, Saahir, Sean</p>
    </footer>

  </div>
</body>
</html>



