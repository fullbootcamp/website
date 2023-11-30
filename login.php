<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fullbootcamp Login Page</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
 
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
        <form action="login.php" method="POST">
          <label for="email">Email</label>
          <input type="email" name="email">
          <label for="password">Password</label>
          <input type="password" name="password">
          <input id="login" type="submit" value="Login">
        </form>
        <a href="#forgotpwd">Forgot password</a>
        <button class="signup">Create FREE Account</button>
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