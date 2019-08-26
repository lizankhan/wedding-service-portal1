

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
  <link rel="stylesheet" href="css/style3.css">
  <title>Wedding Service</title>
</head>
<body>
  <!--Navigation-->

  <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <div class="container">
      <a href="index.php" class="navbar-brand">Wedding
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
          <li class="nav-item ">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item active">
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
    <section id="contact" class="text-center text-light py-5">
      <div class="dark-overlay">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="text-light font-italic mt-5">CONTACT US</h1>
              <p class="lead font-weight-bold font-italic"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
            </div>
          </div>
        </div>
        </div>
    </section>

    <section class="text-dark ">
      <h5> <a class="lead" href="index.html"> Home/</a><small class="text-muted"> Contact</small></h5>
    </section>


<!--Contact Form-->

<section id="Form" class="py-5 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
            <h3 class="py-3 text-center">Please fill out this form to contact us</h3>
            <form class="" action="https://formspree.io/asojib786@gmai.com" method="post">
              <div class="row mx-2">
                <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" placeholder="First Name" class="form-control mb-3">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" placeholder="Last Name" class="form-control mb-3">
                    </div>
                </div>
            </div>
            <div class="row mx-2">
              <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control mb-3">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" placeholder="Phone Number" class="form-control mb-3">
                  </div>
              </div>
            </div>
            <div class="row mx-2">
              <div class="col-lg-12">
                  <div class="form-group">
                    <textarea  rows="5" cols="80" class="form-control"></textarea>
                  </div>
              </div>
            </div>
            <div class="row mx-2">
              <div class="col-lg-12 text-center  pb-3">
                  <button type="submit" name="button" class="btn btn-outline form-control bg-dark text-light">Send</button>
              </div>
            </div>
            </form>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h4 class="">Get In Touch</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consequuntur.</p>
            <h4>Address</h4>
            <p>House #100, Uttara, Dhaka</p>
            <h4>Email</h4>
            <p>test@gmail.com</p>
            <h4>Phone</h4>
            <p class="mb-2">+434 3434 3433</p>
            <p>+434 3434 3433</p>
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
        <p class="lead m-3">Copyright 2019 &copy; Wedding Organizer</p>
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
