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
         <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" style="color: white" href="post.php">Create Post</a>
         </li>
      </ul>
      <ul class="navbar-nav ms-auto">
         <?php 
            echo "<a class='navbar-brand'> Hello " . $_COOKIE["user"] . "</a>"
         ?>
         <li class="nav-item">
            <a class="nav-link" href="signout.php"> Sign Out</a>
         </li>
      </ul>
   </div>
</nav>

<!-- END HEADER -->

<!--
    PLACE YOUR CONTENT HERE
-->

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