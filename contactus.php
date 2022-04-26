<!DOCTYPE html>

<html lang="en">

<head>
   <title>Foodies</title>
   <meta charset="UTF-8">
   <meta name="description" content="This is the webpage of Foodies">
   <meta name="author" content="Sean, Melvin, Keshav, Saahir">
   <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald"> -->
   <link rel="stylesheet" href="styles.css">
</head> 


<body class="d-flex flex-column min-vh-100">

<!-- START HEADER -->
<nav class="navbar navbar-expand-lg navbar-custom">
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
         <li class="nav-item">
            <a class="nav-link" href="home.php"><img src="images/blacklogo.png" width="30" height="30" alt="" /></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="explore.php">Explore</a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" href="contactus.php">Contact</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
         </li>
         <li class="nav-item ">
            <a class="nav-link" style="color: white" href="post.php">Create Post</a>
         </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <ul class="navbar-nav ms-auto">
            <?php 
               echo "<a class='navbar-brand'> Hello " . $_COOKIE["user"] . "</a>"
            ?>
            <li class="nav-item">
               <a class="nav-link" href="signout.php"> Sign Out</a>
            </li>
         </ul>
         <li class="nav-item">
            <a class="nav-link" href="signout.php"> Sign Out</a>
         </li>
      </ul>
  </div>
</nav>

         <p>Contact the Members!</p>
         <div class="card1">
            <div class="flip-card">
               <div class="flip-card-inner">
                  <div class="flip-card-front">
                     <img src="images/saahir_pfp.jpg" alt="Avatar" style="width:300px;height:300px;">
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

<div class = "contact" style='font-family: oswald;'>
      <h1>Contact Us!</h1>
      <p class = "contactUsText">Saahir, Shaojie(Sean), Melvin, and Keshav are all students at The University of Texas at Austin.
      Saahir, Sean, and Keshav are majoring in Mathematics, while Melvin is pursuing a degree in Management Information Systems.
      They decided to create Foodies based off their passion for finding good food, as well as their shared interest in web programming.
      If you have any questions, don't hesitate to email us at foodies@gmail.com !</p>

      <p>Contact the Members!</p>
      <p>Saahir: saahirjanmohamed@gmail.com
         <br>Foodie Account: @saahir
      </p>
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

<!-- START FOOTER -->
<footer class="mt-auto text-center">
  <!-- Copyright -->
  <div class="text-center p-3">
      3/6/2022 Melvin, Keshav, Saahir, Sean
  </div>
</footer>
<!-- END FOOTER -->

</body>
</html>