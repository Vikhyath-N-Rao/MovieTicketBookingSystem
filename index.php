<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
		<!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body style="overflow-x: hidden; background-color:#FCD2D1;">
    <!-- Header code starts here -->
    <div class="row" id="header">
      <div class="col-md-4" >
        <h4 style="padding-left:15px;font-family:'Comic Sans MS';">Book online movie ticket</h4>
      </div>
      <div class="col-md-7" style="text-align: right;">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="movies.php">Movies</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="admin/login.php">Admin Login</a></li>
        </ul>
      </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
      <div class="col-md-12" style="padding:30px;margin-left:15px;margin-right:15px;">
        <h4>About Us</h4>
        <p><i><h5>
        Welcome to our online movie ticket booking platform, designed to make your movie experience effortless and enjoyable. We offer a user-friendly interface where you can explore the latest films, watch trailers, read detailed synopses, and book tickets with ease.

</h5><br><h5>Our platform brings you the convenience of booking your favorite movies from the comfort of your home. Whether you're into action, drama, comedy, or romance, our extensive selection caters to all tastes. With just a few clicks, you can secure your seat and skip the hassle of long lines at the theater.

</h5><br><h5>We are dedicated to providing a seamless and secure booking process. Manage your bookings easily, stay updated on the latest releases, and enjoy a smooth, stress-free movie-going experience.

</h5><br><h5>Thank you for choosing our service. Your entertainment is our priority—sit back, relax, and let us take care of the rest. Enjoy the show!</i></p>
</h5></div>
    </div>
    <center><h3><u>Some of the popular movies</u></h3></center>
    <div class="row" style="margin:20px;">
      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/movie1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Movie cast</h5>
            <p class="card-text">Akshay Kumar<br>Katrina Kaif<br>Ranveer Singh<br>Ajay Devgan</p>
            <a href="viewMovie.php?mid=1" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/movie2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Movie cast</h5>
            <p class="card-text">Ajay Devgan<br>Amy Aela<br>Amitabh Bachchan<br>Boman Irani</p>
            <a href="viewMovie.php?mid=2" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/movie3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Movie cast</h5>
            <p class="card-text">Pratik Gandhi<br>Shreya Dhanwanthary<br>Hemanth Kher<br>Anjali Barot</p>
            <a href="viewMovie.php?mid=3" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/movie4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Movie cast</h5>
            <p class="card-text">Aamir Khan<br>Darsheel Safary<br>Tisca Chopra<br>Vipin Sharma</p>
            <a href="viewMovie.php?mid=4" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
