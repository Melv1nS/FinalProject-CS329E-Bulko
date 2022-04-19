<!DOCTYPE html>

<html lang="en">

<head>
   <title>Foodies</title>
   <meta charset="UTF-8">
   <meta name="description" content="This is the webpage of Foodies">
   <meta name="author" content="Sean, Melvin, Keshav, Saahir">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head> 

<body>
<!-- BODY GOES HERE -->

   <div class = "page-container">

      <div class="content-wrap">
         <div class = "header">

            <!-- <li class="nav-li"></li> -->
            <div class="topnav">
               <a class="active" href="home.php"><img class = "logo" src="logo.png" alt="Logo of Foodies"></a>
               <a href="explore.php">Explore</a>
               <a href="contactus.php">Contact</a>
               <a href="faq.php">FAQs</a>
               <a href="post.php">Create Post</a>
               <?php echo "<p class='topnav-name push'> Hello " . $_COOKIE["user"] . "</p>"?>
               <a href="signout.php">Sign Out</a>
            </div>
   
         </div>
         
         <div class = "home-content">
            <img class="centerlogo" src="logo.png" alt="logo in the center">
            <p>
               Food with friends. It doesn’t get any better than this.
            </p>
   
            <p>
               Foodies unite! There's finally a social media centered around food pictures and food pictures only! 
               <br>No more wasting time scrolling through countless memes and vacation pics just to find the good stuff!
               <br>Connect with your friends and see all the cool resturaunts they go to and the dishes they get!
               <br>Create an account now to start your foodie adventure!
            </p>
         </div>

      </div>
      
      <!-- <div class="content-wrap"> 
         <div class = "body">
      
            <img class="centerlogo" src="logo.png" alt="logo in the center">
            <p>Food with friends.<br>It doesn’t get any better than this.</p>
      
            <p>
               Foodies unite! There's finally a social media centered around food pictures and food pictures only! 
               <br>No more wasting time scrolling through countless memes and vacation pics just to find the good stuff!
               <br>Connect with your friends and see all the cool resturaunts they go to and the dishes they get!
               <br>Create an account now to start your foodie adventure!
            </p>
            
         </div>
      </div> -->
      
      <footer>
         <p>3/28/2022 Melvin, Keshav, Saahir, Sean</p>
      </footer>
   </div>
 
</div>

</body>
</html>