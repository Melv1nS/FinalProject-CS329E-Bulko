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
   
   <style type = "text/css">
    .img1,.img2,.img3 {position: absolute; top: 70px; left: 150px; z-index: 0;}
    .img4,.img5,.img6 {position: absolute; top: 430px; left: 150px; z-index: 0;}
    .likeimg1{position: absolute; top: 80px; left: 1100px; z-index: 0;}
    .likeimg2{position: absolute; top: 440px; left: 1100px; z-index: 0;}
    .headpic1{position: absolute; top: 80px; left: 750px; z-index: 0;}
    .headpic2{position: absolute; top: 440px; left: 750px; z-index: 0;}
    #name1{position: absolute; top: 70px; left: 790px; z-index: 0;}
    #name2{position: absolute; top: 430px; left: 790px; z-index: 0;}
    #c1{position: absolute; top: 130px; left: 750px; z-index: 0;}
    #c2{position: absolute; top: 480px; left: 750px; z-index: 0;}
    .content{font-family: initial;}
    .explorebody{border-style: ridge;
                border-width: 4px;
                padding-bottom: 370px;
            }

    #line {
        height: .5px;
        background-color: rgb(32, 34, 42);
        margin-top: 365px;
    }

  </style>
     <script>
        var top_img1 = "food1";
        var top_img2 = "food4";
        var img_src1 = new Array ("food1", "food2", "food3");
        var img_src2 = new Array ("food4","food5","food6");
        i = 0;

        setInterval(function changeImg() {
            
            var new_img1 = img_src1[i];
            var new_img2 = img_src2[i];

            if (i < img_src1.length){
                i++;
            }
            if (i == img_src1.length){
                i = 0;
            }
            styleTop1 = document.getElementById(top_img1).style;
            styleNew1 = document.getElementById(new_img1).style;

            styleTop2 = document.getElementById(top_img2).style;
            styleNew2 = document.getElementById(new_img2).style;

            styleTop1.zIndex = "0";
            styleNew1.zIndex = "10";

            styleTop2.zIndex = "0";
            styleNew2.zIndex = "10";

            top_img1 = new_img1;
            top_img2 = new_img2;


            },3000)

   </script>
</head> 

<body class="d-flex flex-column min-vh-100">

<!-- START HEADER -->
<nav class="navbar navbar-expand-lg navbar-custom">
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
         <li class="nav-item">
            <a class="nav-link" href="home.php"><img src="images/blacklogo.png" width="30" height="30" alt="" /></a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" href="explore.php">Explore</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" style="color: white" href="post.php">Create Post</a>
         </li>
      </ul>
      <ul class="navbar-nav ms-auto">
         <li class="nav-item">
            <?php 
               echo "<a class='nav-link disabled'> Hello " . $_COOKIE["user"] . "</a>"
            ?>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="signout.php"> Sign Out</a>
         </li>
      </ul>
  </div>
</nav>

<!-- END HEADER -->

   <div class = "explorebody">
      <form action = "">
            <p>
               <img class = "img1"  id = "food1" src = "images/food1.png"
                  alt = "(Picture of food1)" width = "500" height = "310" />
               <img class = "img2"  id = "food2" src = "images/food2.png"
                  alt = "(Picture of food2" width = "500" height = "310" />
               <img class = "img3"  id = "food3" src = "images/food3.png"
                  alt = "(Picture of food3)" width = "500" height = "310">
               <img class = "img4"  id = "food4" src = "images/food4.png"
                  alt = "(Picture of food4)" width = "500" height = "310" />
               <img class = "img5"  id = "food5" src = "images/food5.png"
                  alt = "(Picture of food5" width = "500" height = "310" />
               <img class = "img6"  id = "food6" src = "images/food6.png"
                  alt = "(Picture of food6)" width = "500" height = "310">
            </p>
         </form>

      <div class="content">

            <img class="likeimg1" id="like1" src="images/like.png"
               alt = "(Picture of like button)" width="30" height = "30" />

            <img class="likeimg2" id="like2" src="images/like.png"
               alt = "(Picture of like button)" width="30" height = "30" />

            <img class="headpic1" id="head1" src="images/head.png"
               alt = "(Picture of head pic)" width="30" height = "30" />

            <img class="headpic2" id="head2" src="images/head.png"
               alt = "(Picture of head pic)" width="30" height = "30" />

         <div class = user1>

            <p id="name1">
               Alex   
            </p>

            <p id="c1">
               <b>Thai Spice</b><br>
               <br>
               Thai food here is all about balance – achieving the <br>perfect harmony between sweet, sour, hot and salty.<br> 
               I like the Pad Thai and Curry specifically. Serving<br> is perfect here as well.
            </p>
            
            <hr id="line"/>
         </div>

         <div class = user2>
            <p id="name2">
               Oliva
            </p>
            <p id="c2">
               <b>Grill Garden</b><br>
               <br>
               There are all kinds of barbecue you can imagine. The <br>gilled dronestick is especially good. Parking is 
               also <br>accessible around the restaurant.
            </p>
         </div>

      </div>
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