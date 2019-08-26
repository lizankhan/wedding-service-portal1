<?php

include_once "connection.php";

$sql = "SELECT * FROM user WHERE type LIKE '%4' ORDER BY id DESC";
$result = $conn->query($sql);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/uikit.min.css">
   <link rel="shortcut icon" type="image/x-icon" href="img/index.jpg">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/navbar-fixed.css">
   <link rel="stylesheet" href="css/style2.css">
   <title>Wedding Service</title>
 </head>
 <body>
   <!--Navigation-->

   <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
     <div class="container">
       <a href="index.html" class="navbar-brand">Wedding
         Organizer</a>
       <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div id="navbarNav" class="collapse navbar-collapse">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="about.php">About Us</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="show_member.php">Services</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="blog.php">Blog</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="contact.php">Contact</a>
           </li>
           <li class="dropdown nav-item">
             <a class=" dropbtn nav-link" data-toggle="modal" data-target="#popUplogIn">LogIn</a>
           </li>
         </ul>
       </div>
     </div>
   </nav>

 <!--Header-->
   <section id="about" class="text-center text-light py-5">
     <div class="dark-overlay">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 m-3">
             <h1 class="text-light font-weight-bold font-italic mt-5">Community Centers</h1>
             <p class="lead">Check Out Our Every Community Center</p>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!--Com-->

   <section class="text-dark py-3">
     <h5> <a class="lead" href="index.html"> Home/</a><span class="lead"> community Center</span></h5>
   </section>
   <?php
      if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
       //echo "name: " . $row["name"].  "email: " .$row["email"]. "</hr>type: " . $row["type"]. "</br>";

 ?>
 <section class="comu py-2" id="center">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 my-4">
         <img src="img/cc2.jpg" alt="Sorry" class="img-fluid rounded">
       </div>
       <div class="col-lg-6 text-center ">
         <h3><?php echo $row["cname"];  ?></h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consequuntur.</p>
         <h4>Address</h4>
         <p>House #100, Uttara, Dhaka</p>
         <h4>Email</h4>
         <p><?php echo $row["email"];  ?></p>
         <h4>Phone</h4>
         <p><?php echo $row["phn"];  ?></p>
         <div class="d-flex flex-row justify-content-center">
           <div>
             <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
           </div>
           <div>
             <a href="#"><i class="fab fa-twitter"></i></a>
           </div>
           <div>
             <a href="#"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
         <div class="">
           <button type="button" href="" name="button" class="btn btn-outline bg-primary">Read More <?php echo $row["id"];  ?></button>
         </div>
       </div>
     </div>
   </div>
 </section>
 <div class="container">
   <div class="row">
     <div class="col-lg-4">

     </div>
     <div class="col-lg-4">
       <hr class="bg-info">
     </div>
     <div class="col-lg-4">

     </div>
   </div>
 </div>

    <?php
  }
}
     ?>


     <section id="gallery" class="py-3" uk-lightbox>
         <div class="container">
           <div class="row text-center mb-3">
             <div class="col">
               <h2>Photo Gallery</h2>
               <p class="lead">Check out our photos from every corner</p>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div>
                 <a href="img/comu4.jpg">
                   <img src="img/comu4.jpg" class="img-fluid rounded" alt="">
                 </a>
               </div>
             </div>
             <div class="col-md-4">
               <div>
                 <a href="img/comu2.jpg">
                   <img src="img/comu2.jpg" class="img-fluid rounded" alt="">
                 </a>
               </div>
             </div>
             <div class="col-md-4">
               <div>
                 <a href="img/comu3.jpg">
                   <img src="img/comu3.jpg" class="img-fluid rounded" alt="">
                 </a>
               </div>
             </div>
           </div>
           <div class="row pt-0 pt-md-4">
             <div class="col-md-4">
               <div>
                 <a href="img/comu7.jpg">
                   <img src="img/comu7.jpg" class="img-fluid rounded" alt="">
                 </a>
               </div>
             </div>
             <div class="col-md-4">
               <div>
                 <a href="img/comu5.jpg">
                   <img src="img/comu5.jpg" class="img-fluid rounded" alt="">
                 </a>
               </div>
             </div>
             <div class="col-md-4">
               <div>
                 <a href="img/comu6.jpg">
                   <img src="img/comu6.jpg" class="img-fluid rounded" alt="">
                 </a>
               </div>
             </div>
           </div>
         </div>
       </section>

       <!--available services-->

       <section id="services" class="py-5 text-center">
         <div class="container">
           <div class="row">
             <div class="col-md-4 mt-2">
               <div class="card">
                 <div class="card-header">
                   <h3>Service Plan One</h3>
                 </div>
                 <div class="card-body">
                   <div class="card-title text-dark">
                     <h4> $59.99/Month</h4>
                     </div>
                   <div class="card-text lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                   <ul class="list-group py-2">
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature One
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Two
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Three
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Four
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Five
                     </li>
                   </ul>
                   <a href="form.html" class="btn btn-block btn-info mt-2">Order Now</a>
                 </div>
                 <div class="card-footer">
                   <p class="text-muted mb-0"> One Days Plan</p>
                 </div>
               </div>
             </div>
             <div class="col-md-4 mt-2">
               <div class="card">
                 <div class="card-header">
                   <h3>Service Plan Two</h3>
                 </div>
                 <div class="card-body">
                   <div class="card-title text-dark">
                     <h4> $99.99/Month</h4>
                     </div>
                   <div class="card-text lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                   <ul class="list-group py-2">
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature One
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Two
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Three
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Four
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Five
                     </li>
                   </ul>
                   <a href="#" class="btn btn-block btn-info mt-2">Order Now</a>
                 </div>
                 <div class="card-footer">
                   <p class="text-muted mb-0"> Two Days Plan</p>
                 </div>
               </div>
             </div>
             <div class="col-md-4 mt-2">
               <div class="card">
                 <div class="card-header">
                   <h3>Service Plan Three</h3>
                 </div>
                 <div class="card-body">
                   <div class="card-title text-dark">
                     <h4> $159.99/Month</h4>
                     </div>
                   <div class="card-text lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                   <ul class="list-group py-2">
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature One
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Two
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Three
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Four
                     </li>
                     <li class="list-group-item">
                       <i class="fas fa-check"></i> Feature Five
                     </li>
                   </ul>
                   <a href="#" class="btn btn-block btn-info mt-2">Order Now</a>
                 </div>
                 <div class="card-footer">
                   <p class="text-muted mb-0"> Three Days Plan</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>

       <!-- FAQ Section -->
       <section id="accordion" class="py-5 bg-dark">
         <div class="container">
           <div class="row text-center text-light">
             <div class="col">
               <h2 class="text-light">Frequently Asked Questions</h2>
             </div>
           </div>
           <div class="row mt-5">
             <div class="col-md-6">
               <div class="card bg-light text-dark my-2">
                 <div class="card-header" id="headingOne">
                   <h5 class="mb-0">
                     <a href="#collapseOne" class="text-dark" data-toggle="collapse">
                     Question One?</a>
                   </h5>
                 </div>
                 <div id="collapseOne" class="collapse p-3" data-parent="#accordion">
                   <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet corrupti qui, architecto ad officia? Quo.</p>
                 </div>
               </div>
               <div class="card bg-light text-dark my-2">
                 <div class="card-header" id="headingTwo">
                   <h5 class="mb-0">
                     <a href="#collapseTwo" class="text-dark" data-toggle="collapse">
                     Question Two?</a>
                   </h5>
                 </div>
                 <div id="collapseTwo" class="collapse p-3" data-parent="#accordion">
                   <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet corrupti qui, architecto ad officia? Quo.</p>
                 </div>
               </div>
               <div class="card bg-light text-dark my-2">
                 <div class="card-header" id="headingThree">
                   <h5 class="mb-0">
                     <a href="#collapseThree" class="text-dark" data-toggle="collapse">
                     Question Three?</a>
                   </h5>
                 </div>
                 <div id="collapseThree" class="collapse p-3" data-parent="#accordion">
                   <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet corrupti qui, architecto ad officia? Quo.</p>
                 </div>
               </div>
             </div>
             <div class="col-md-6">
               <div class="card bg-light text-dark my-2">
                 <div class="card-header" id="headingFour">
                   <h5 class="mb-0">
                     <a href="#collapseFour" class="text-dark" data-toggle="collapse">
                     Question Four?</a>
                   </h5>
                 </div>
                 <div id="collapseFour" class="collapse p-3" data-parent="#accordion">
                   <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet corrupti qui, architecto ad officia? Quo.</p>
                 </div>
               </div>
               <div class="card bg-light text-dark my-2">
                 <div class="card-header" id="headingFive">
                   <h5 class="mb-0">
                     <a href="#collapseFive" class="text-dark" data-toggle="collapse">
                     Question Five?</a>
                   </h5>
                 </div>
                 <div id="collapseFive" class="collapse p-3" data-parent="#accordion">
                   <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet corrupti qui, architecto ad officia? Quo.</p>
                 </div>
               </div>
               <div class="card bg-light text-dark my-2">
                 <div class="card-header" id="headingSix">
                   <h5 class="mb-0">
                     <a href="#collapseSix" class="text-dark" data-toggle="collapse">
                     Question Six?</a>
                   </h5>
                 </div>
                 <div id="collapseSix" class="collapse p-3" data-parent="#accordion">
                   <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet corrupti qui, architecto ad officia? Quo.</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>


       <!--popUp Login-->
       <div class="modal" id="popUplogIn">
           <div class="container">
             <div class="modal-dialog">
               <div class="modal-content bg-light text-dark">
                 <button class="close text-dark text-right mx-2" data-dismiss="modal">&times;</button>
                 <div class="modal-body py-3">
                   <div class="pb-4">
                     <h4 class="text-center">LOGIN</h4>
                   </div>
                   <div class="row">
                     <div class="col-lg-6 m-0">
                       <div>
                        <a href="" class="lol btn btn-block bg-primary"><i class="fab fa-facebook-f"></i>CONNECT WITH FACEBOOK</a>
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <form action="login.php" method="POST">
                         <div class="form-group">
                               <input type="text" placeholder="Username" name="uname" class="form-control ">
                             </div>
                             <div class="form-group">
                               <input type="password" name="password" placeholder="Password" class="form-control">
                             </div>
                             <input type="submit" class="btn btn-outline bg-success btn-block" value="Submit">
                       </form>
                     </div>
                   </div>
                   <div class="row text-center pt-2 m-0">
                     <h8> Not registered yet? <a href="Registration.php">Register</a> </h8>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

       <!--Copyright-->

       <section id="copyright" class="text-center text-light">
         <div class="container">
           <div class="row">
             <div class="col">
               <p class="lead m-3">Copyright 2018 &copy; Wedding Organizer</p>
             </div>
           </div>
         </div>
       </section>



         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/uikit.min.js"></script>
         <script src="js/uikit-icons.min.js"></script>
         <script src="js/navbar-fixed.js"></script>
       </body>
       </html>

   </body>
 </html>
