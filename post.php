<!DOCTYPE html>

<html lang="en">

<head>
   <title>Create Post</title>
   <meta charset="UTF-8">
   <meta name="description" content="This is the webpage of Foodies">
   <meta name="author" content="Sean, Melvin, Keshav, Saahir">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>

<body class="backcolor">
   <div class = "page-container">

      <div class="content-wrap">
         <div class = "header">
            <!-- LOGO -->
            <!-- <li class="nav-li"></li> -->
            <div class="topnav">
               <a href="home.php"><img class = "logo" src="logo.png" alt="Logo of Foodies"></a>
               <a href="explore.php">Explore</a>
               <a href="contactus.php">Contact</a>
               <a href="faq.php">FAQs</a>
               <a class="active" href="post.php">Create Post</a>
               <?php echo "<p class='topnav-name push'> Hello " . $_COOKIE["user"] . "</p>"?>
               <a href="signout.php">Sign Out</a>
            </div>
   
         </div>
         
         <div class="body">
            <h1 class = "headd">Create Post</h1>
            </div>
            
            <div class="post">
            <p>
            <form method = "POST" action = >
               <table class = "centered">
                  <tr>
                     <td>Upload Picture:</td>
                  </tr>
                  <tr>
                     <td><input type="file" name="image"></td>
                  </tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr>
                     <td>Restaurant Name:</td>
                  </tr>
                  <tr>
                     <td><label><input name = "name" type = "text" size = "40"/> </label></td>
                  </tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr>
                     <td>Caption:</td>
                  </tr>
                  <tr>
                     <td><label><textarea name = "comments" rows="6" cols="40" ></textarea> </label></td>
                  </tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr>
                     <td id = "centerbutton"><input type = "submit" value = "Post!"/><input type="reset" value="Cancel"/></td>
                 </tr>
               </table>
            </form>
            </p>
            </div>
      </div>
      <footer>
         <p>3/6/2022 Melvin, Keshav, Saahir, Sean</p>
      </footer>
   </div>
</div>
