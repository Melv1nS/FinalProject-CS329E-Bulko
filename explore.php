<?php 
   header('Access-Control-Allow-Origin: *');
   header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
   header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
?>

<html lang="en">

<head>
   <title>Foodies</title>
   <meta charset="UTF-8">
   <meta name="description" content="This is the webpage of Foodies">
   <meta name="author" content="Sean, Melvin, Keshav, Saahir">

   <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald"> -->
   <link rel="stylesheet" href="styles.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

   <script>
      var myurl = "https://cors-anywhere.herokuapp.com/https://jsonplaceholder.typicode.com/todos/1";
      $.ajax({
         url: myurl,
         headers: {
            'Authorization': 'Bearer ZcHQm0yi57KWnGDo4iFSYj5GP5DsmM413w4vphnUCVh45eqxJi1XB9KjNR-sjDGM4gdDGul2K9fBjcQPD2jK-X1hi_jDzMFpfEzpnGzLYGa6LNRxjwqrdW-xhpF0YnYx',
         },
         method: 'GET',
         dataType: 'json',
         success: function(data) {
            console.log('success: ' + data);
         }
      });
   </script>
   <script>
      function like(element) {

         //add logic to get number of likes

         var icon = element.children[0];

         if (icon.style.color == "") {
            icon.style = "color:red";
            var numLikes = parseInt(element.textContent) + 1
            element.textContent = numLikes + " ";
            element.appendChild(icon);
         }
         else {
            icon.style = "color:";
            var numLikes = parseInt(element.textContent) - 1
            element.textContent = numLikes + " ";
            element.appendChild(icon);
         }
         
      }

      function profile(element) {
         var icon = element.children[0];

         alert('Add functionality to redirect to profile page')
      }
   </script>
</head> 

<body class="d-flex flex-column min-vh-100">

<p></p>

<!-- START HEADER -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="home.php"><img src="images/blacklogo.png" width="30" height="30" alt="" /></a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="explore.php">Explore</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item ">
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

<div class="card-container">
   <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
         <div class="col-md-4">
            <img src="images/food1.png" class="card-img" alt="...">
         </div>
         <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title">Tikka Hut</h5>
               <p class="card-text">Just had the best butter chicken ever!</p>
               <div class="row">
                  <div class="col-md-4">
                     <a class="btn" onclick = "like(this)">0 <i class="fa fa-heart"></i></a>
                     <a class="btn" onclick = "profile(this)"><i class="fa-regular fa-user"></i> Jake </a>
                  </div>
                  <div class="col-md-8">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
         <div class="col-md-4">
            <img src="images/food2.png" class="card-img" alt="...">
         </div>
         <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title">Amy's Fine Eats</h5>
               <p class="card-text">The chicken was cooked perfectly! Definitely will return!</p>
               <div class="row">
                  <div class="col-md-4">
                     <a class="btn" onclick = "like(this)">0 <i class="fa fa-heart"></i></a>
                     <a class="btn" onclick = "profile(this)"><i class="fa-regular fa-user"></i> Emily </a>
                  </div>
                  <div class="col-md-8">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
         <div class="col-md-4">
            <img src="images/food3.png" class="card-img" alt="...">
         </div>
         <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title">Fire Thai</h5>
               <p class="card-text">Shrimp pad thai!!!!</p>
               <div class="row">
                  <div class="col-md-4">
                     <a class="btn" onclick = "like(this)">0 <i class="fa fa-heart"></i></a>
                     <a class="btn" onclick = "profile(this)"><i class="fa-regular fa-user"></i> Natalie </a>
                  </div>
                  <div class="col-md-8">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
         <div class="col-md-4">
            <img src="images/food4.png" class="card-img" alt="...">
         </div>
         <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title">The Lamb Shop</h5>
               <p class="card-text">Lamb chops from The Lamb Shop!</p>
               <div class="row">
                  <div class="col-md-4">
                     <a class="btn" onclick = "like(this)">0 <i class="fa fa-heart"></i></a>
                     <a class="btn" onclick = "profile(this)"><i class="fa-regular fa-user"></i> Hasan </a>
                  </div>
                  <div class="col-md-8">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
         <div class="col-md-4">
            <img src="images/food5.png" class="card-img" alt="...">
         </div>
         <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title">Akhsheiy's Grill</h5>
               <p class="card-text">Love the steak, it was absolute heat!</p>
               <div class="row">
                  <div class="col-md-4">
                     <a class="btn" onclick = "like(this)">0 <i class="fa fa-heart"></i></a>
                     <a class="btn" onclick = "profile(this)"><i class="fa-regular fa-user"></i> Terry </a>
                  </div>
                  <div class="col-md-8">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
         <div class="col-md-4">
            <img src="images/food6.png" class="card-img" alt="...">
         </div>
         <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title">Omar's Persian Grill</h5>
               <p class="card-text">Mediterranean? More like MID-iterranean!</p>
               <div class="row">
                  <div class="col-md-4">
                     <a class="btn" onclick = "like(this)">0 <i class="fa fa-heart"></i></a>
                     <a class="btn" onclick = "profile(this)"><i class="fa-regular fa-user"></i> Aidan </a>
                  </div>
                  <div class="col-md-8">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

   <!-- <div class = "explorebody">
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
   </div> -->

<!-- START FOOTER -->
   <footer class="mt-auto text-center fixed-bottom">
   <!-- Copyright -->
      <div class="text-center p-3">
            3/6/2022 Melvin, Keshav, Saahir, Sean
      </div>
   </footer>
<!-- END FOOTER -->

</body>
</html>