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
            <li class="nav-item active">
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

<!--
    PLACE YOUR CONTENT HERE
-->

<div class="m-4">
    <h1>FAQ</h1>
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Can I post non-food pictures?</button>									
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Foodie is an app meant strictly for food media, so make sure to stick to taking pics of your meals!</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">How do I edit my username and bio?</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Go to your profile page by clicking the 'Profile' icon in the navigation bar, signing in, and designing your profile on the directed webpage. </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">How do I get in contact with the Foodies team?</button>                     
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Check our 'Contact Us' for information on our team and our contact information.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">How do I interact with friends on Foodies?</button>                     
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>You are able to interact with the people in your life on Foodies by following their accounts, as well as using likes and comments to interact with their posts.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">How do I get my post on the 'Top Posts' feature?</button>                     
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Our top posts takes the posts with most interaction on our site and displays them on viewers' 'Explore' page. Get all your followers to like and comment on your post to gain more traction and land in our trending posts!</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">Can I post non-food pictures?</button>                     
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Foodie is an app meant strictly for food media, so make sure to stick to food pictures!</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven">What happens if I forgot my username or password?</button>                     
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>In the case that you have forgotten your login information, an email will be sent to your account email to receive your username or reset your password.</p>
                </div>
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