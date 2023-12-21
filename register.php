<?php
require_once('config.php');

session_start();
if (isset($_SESSION["user"])) {
  header("Location: login.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fullbootcamp Registration Page</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
  body {
  background-color: #2B2A4C !important;
}
  </style>
</head>
<body>
  <?php
  if(isset($_POST['create'])) {
    $firstName  = $_POST['firstname'];
    $lastName   = $_POST['lastname'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $repeatPassword   = $_POST['repeat_password'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Email is not valid! Please enter valid email.");
    }
    if (strlen($password) < 6) {
      array_push($errors, "Password must be at least 8 characters long.");
    }
    if ($password !== $repeatPassword) {
      array_push($errors, "Password does not match");
    }
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
      array_push($errors, "Email already in our database!");
    }
    if (count($errors) > 0) {
      foreach ($errors as $error) {
        echo "<div class='alert alert-danger'>$error</div>";
      } 

    } else {
      $sql = "INSERT INTO users(firstname,lastname, email, password ) VALUES (?, ?, ?, ? )";
      $stmt = mysqli_stmt_init($conn);
      $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
      if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $passwordHash);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>Thank you for registering! Please confirm your email!</div>";
      }else {
        die("Something went wrong");
      }

    }
  



    
  }
  ?>
  <div class="grid-container">
    <div class="item1">
      <header>
      <div class="container">
  <div class="row">
  <div class="col-sm m-3">
</div>
    <div class="col-sm m-3">
    
    </div>
    <div class="col-sm m-3">
    <button class="btn btn-outline-success"><a href="login.php" class="loginButton">Login</a></button>
    </div>
  </div>
</div>

        
       
        <!-- <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#ebooks">eBooks</a></li>
          <li><a href="#vlogs">Vlogs</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#routine">Routines</a></li>
        </ul> -->
      </header>
    </div>
    <div class="item2">
      <aside>
        <h1 class="logo">Fullbootcamp</h1>
        <p class="slogan">Become a Front End Master in 90 Days<br><span>2024's Bootcamp Challenge</span><br>Crack the Code, Embrace the exceptional pace, leverage our exclusive <span class="fb-system">FB-System</span>,<br> and become job-ready, career-ready.</p>
      </aside>
    </div>
    <div class="item3">
      <main>
      <form class="form-signin" action="register.php" method="post">
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal text-success">Register for FREE</h1>
      
      <input type="text"  name="lastname" class="form-control" placeholder="First Name" required autofocus><br>
      
      <input type="text"  name="firstname" class="form-control" placeholder="Last Name" required autofocus><br>
    
      <input type="email"  name="email" class="form-control" placeholder="Email address" required autofocus><br>
      
      <input type="password" name="password" class="form-control" placeholder="Password" required><br>
      <input type="password" name="repeat_password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> I have read the terms and conditions***
        </label>
      </div>
      <input class="btn btn-lg btn-success btn-block" type="submit" name="create" value="Create FREE Account">
      
    </form>
        <!-- <form action="register.php" method="post">
          <input class="fields" type="text" name="firstname" placeholder="First Name" required><br>
          <input class="fields" type="text" name="lastname" placeholder="Last Name" required><br>
          <input class="fields" type="email" name="email" placeholder="Email" required><br>
          <input class="fields" type="password" name="password" placeholder="Password"  required><br>
          <input class="fields" type="password" name="repeat_password" placeholder="Password"  required><br>
          <input id="signup" type="submit" name="create" value="Register Now">
        </form> -->
        <a href="login.php">Already a member?</a>
      </main>
    </div>
    <div class="item4"></div>
    <div class="item5">
      <footer class="text-footer">
      <p class="mt-5 mb-3 text-danger">&copy; Copyright Fullbootcamp 2023-2024</p>
      <p>
        
      </p></footer>
    </div>
  </div>
  
</body>
</html>