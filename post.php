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
<div class="d-flex mx-auto align-items-center" style="margin-top: 5%">

    <form method="POST" action="#">
         <h1>Create Post</h1>

         <!-- Restaurant input -->
         <div class="form-outline mb-4">
            <label class="form-label" for="restaurant">Restaurant</label>
            <input type="text" id="restaurant" name="restaurant" class="form-control" />
         </div>


         <!-- Caption input -->
         <div class="form-outline mb-4">
            <label class="form-label" for="caption">Caption</label>
            <input type="password" id="restaurant" name="caption" class="form-control" />
         </div>

         <!-- Picture input -->
         <div class="form-outline mb-4">  
            <label class="form-label" for="pw">Picture</label>
            <input type="file" name="image">
         </div>
      
         
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Create Post</button>
    </form>
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