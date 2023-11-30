<?php
require_once('config.php');
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
    $errors = array();
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Email is not valid! Please enter valid email.");
    }
    if (strlen($password) < 8) {
      array_push($errors, "Password must be at least 8 characters long.");
    }
    if ($password !== $repeatPassword) {
      array_push($errors, "Password does not match");
    }
    if (count($errors) > 0) {
      foreach ($errors as $error) {
        echo "<div class='alert alert-danger'>$error</div>";
      } 

    } else {
      echo $firstName . " " . $lastName . " " . $email;

    }
  



    
  }
  ?>
  <div class="grid-container">
    <div class="item1">
      <header>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#ebooks">eBooks</a></li>
          <li><a href="#vlogs">Vlogs</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#routine">Routines</a></li>
        </ul>
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
        <form action="register.php" method="post">
          <input class="fields" type="text" name="firstname" placeholder="First Name" required><br>
          <input class="fields" type="text" name="lastname" placeholder="Last Name" required><br>
          <input class="fields" type="email" name="email" placeholder="Email" required><br>
          <input class="fields" type="password" name="password" placeholder="Password"  required><br>
          <input class="fields" type="password" name="repeat_password" placeholder="Password"  required><br>
          <input id="signup" type="submit" name="create" value="Register Now">
        </form>
        <a href="#forgotpwd">Already a member?</a>
      </main>
    </div>
    <div class="item4"></div>
    <div class="item5">
      <footer class="text-footer"><p>
        Copyright Fullbootcamp 2024
      </p></footer>
    </div>
  </div>
  
</body>
</html>