<?php
  $user = $_POST['user'];
  $pass = $_POST['pw'];
  $login_state = false;
  echo($login_state);

  $pf = explode("\n", file_get_contents("signup.txt"));
  
  
  if (isset($_POST["btn1"])){
      
    if(empty($user || $pass)){
      echo("<script>alert('There are empty fields!')</script>");
    }
    else{
      $up = $user . ":" . $pass;
      for ($i=0; $i<count($pf);$i++){
          if($up == $pf[$i]){
              
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


<<<<<<< HEAD



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
                   <li class="nav-li"><a class = "nav-link current-link" href="signin.php">Sign In</a></li>
                   <li class="nav-li"><a class = "nav-link" href="signup.php">Sign Up</a></li>
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


=======
>>>>>>> 6c096ca5c19cbd17107a6f0b4f341022deeb9f25
