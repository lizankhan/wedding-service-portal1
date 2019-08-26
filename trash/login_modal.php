
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/uikit.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/Wedding Couple.png">
  <title>Wedding Service</title>
</head>
<body>

<!-- popup for login -->
<div class="modal mt" id="loginModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">User Login</h5>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php echo ErrorMessage();
                echo SuccessMessage();
           ?>

          <form action="login.php" method="post">

            <div class="form-group">
              <label for="userename">Username</label>
              <input class="form-control" name="username" type="text" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" name="password" type="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
            <label for="Type">Choose your type</label>
            <select class="form-control" name="type">
              <option value="1" selected>Catering</option>
              <option value="2">Photographer</option>
              <option value="3">Decorator</option>

            </select>
            </div>

            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" name="Submit" class="btn btn-warning" value="Submit">


            </div>

          </form>

        </div>

        <hr>
        <p class="mx-2 px-2">Don't have an account?? </p>
        <p class="mx-2 mt-0 px-2">Click to <a href="Register.php">Register</a></p>


      </div>
    </div>
  </div>
<!-- popup for login -->


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
</body>
</html>
