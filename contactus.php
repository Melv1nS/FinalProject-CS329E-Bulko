<!DOCTYPE html>

<html lang="en">

<head>
   <title>Foodies</title>
   <meta charset="UTF-8">
   <meta name="description" content="This is the webpage of Foodies">
   <meta name="author" content="Sean, Melvin, Keshav, Saahir">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
   <link rel="stylesheet" href="styles.css">
</head> 

<body>

<!-- BODY GOES HERE -->

<div class="page-container">
   <div class="content-wrap">
      <div class = "header">
         <!-- LOGO -->
         <!-- <li class="nav-li"></li> -->
         <div class="topnav">
            <a href="home.php"><img class = "logo" src="images/logo.png" alt="Logo of Foodies"></a>
            <a href="explore.php">Explore</a>
            <a class="active" href="contactus.php">Contact</a>
            <a href="faq.php">FAQs</a>
            <a href="post.php">Create Post</a>
            <?php echo "<p class='topnav-name push'> Hello " . $_COOKIE["user"] . "</p>"?>
            <a href="signout.php">Sign Out</a>
         </div>
   
      </div>
       
      <div class = "boddy" style='font-family: oswald;'>
      
         <h1>Contact Us!</h1>
         <p class = "contactUsText">Saahir, Shaojie(Sean), Melvin, and Keshav are all students at The University of Texas at Austin.
         Saahir, Sean, and Keshav are majoring in Mathematics, while Melvin is pursuing a degree in Management Information Systems.
         They decided to create Foodies based off their passion for finding good food, as well as their shared interest in web programming.
         If you have any questions, don't hesitate to email us at foodies@gmail.com !</p>

         <p>Contact the Members!</p>
         <div class="card1">
            <div class="flip-card">
               <div class="flip-card-inner">
                  <div class="flip-card-front">
                     <img src="saahir_pfp.jpg" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back">
                     <h1>Saahir Janmohamed</h1>
                     <p>E-mail: saahirjanmohamed@gmail.com</p>
                     <p>Foodie Username: @saahir</p>
                  </div>
               </div>
            </div>
         </div>
         <p>Shaojie: shaojiehou@utexas.edu
            <br>Foodie Account: @shaojie
         </p>
         <P>Melvin: melvin.sureshbabu@gmail.com
            <br>Foodie Account: @melvin 
         </P>
         <p>Keshav: kshavt@gmail.com
            <br>Foodie Account: @keshav
         </p>
      
      </div>
   </div>

   <footer>
      <p>3/28/2022 Melvin, Keshav, Saahir, Sean</p>
   </footer>
   
</div>


</body>
</html>