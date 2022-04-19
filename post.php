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
                <nav>
                   <ul class = "nav-list">
                      <li class="nav-li"><a class = "nav-link" href="index.html"><img class = "logo" src="logo.png" alt="Logo of Foodies"></a></li>
                      <li class="nav-li"><a class = "nav-link" href="explore.html">Explore</a></li>
                      <li class="nav-li"><a class = "nav-link" href="contactus.html">Contact Us</a></li>
                      <li class="nav-li"><a class = "nav-link" href="faq.html">FAQs</a></li>
                      <li class="nav-li"><a class = "nav-link" href="signin.html">Sign In</a></li>
                      <li class="nav-li"><a class = "nav-link" href="signup.html">Sign Up</a></li>
                      <li class="nav-li"><a class = "nav-link current-link" href="post.html">Create Post</a></li>
                   </ul>
                </nav>
       
             </div>
             
             <div class="body">
                <h1 class = "headd">Create Post</h1>
                </div>
                
                <div class="post">
                <p>
                <form method = "POST" action = "post.html">
                   <table class = "centered">
                      <tr>
                         <td>Upload Picture:</td>
                      </tr>
                      <tr>
                         <td><input type="file" name="image" id="pic"></td>
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
                         <td><label><input name = "name" type = "text" id="rname" size = "40"/> </label></td>
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
                         <td><label><textarea name = "comments" rows="6" cols="40" id="caption" ></textarea> </label></td>
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

          <?php
            if(isset($_POST["pic"]) && isset($_POST["rname"]) && isset($_POST["caption"])){
                   $picfile = $_POST["pic"];
                   $rname = $_POST["rname"];
                   $caption = $_POST["caption"];
                   
            }
            
          ?>

          <footer>
             <p>3/6/2022 Melvin, Keshav, Saahir, Sean</p>
          </footer>
       </div>
    </div>
    
?>