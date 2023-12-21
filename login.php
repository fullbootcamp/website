<?php session_start();
if (isset($_SESSION["user"])) {
  header("Location: dashboard.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fullbootcamp Login Page</title>
  <link rel="stylesheet" href="styles/styles.css">
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
    <!-- <button class="btn btn-outline-success"><a href="login.php" class="loginButton">Login</a></button> -->
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
        <?php
        if(isset($_POST["sign-in"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
          require_once "config.php";
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
          if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"] = "yes";
            header("Location: dashboard.php");
            die();
          }else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
          }
          }else {
          echo "<div class='alert alert-danger'>Email does not match</div>";
        }        }

        ?>
      <form action="login.php" method="POST">
   
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating p-1 m-5 text-info">
      <input type="email" class="form-control text-info" id="floatingInput" name="email" placeholder="name@example.com">
      
    </div>
    <div class="form-floating p-1 m-5">
      <input type="password" name="password" class="form-control text-info" id="floatingPassword" placeholder="Password">
     
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit" value="Sign-in" name="sign-in">Sign in</button><br><br>
    <div>
      <p>Not registered yet? <a href="register.php">Sign up for FREE!</a></p>
    </div>
  
  </form>
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