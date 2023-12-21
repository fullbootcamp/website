<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fullbootcamp</title>
  <link rel="stylesheet" href="styles/styledashboard.css">
  <script src="https://kit.fontawesome.com/74be4beb2d.js" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="grid-container">
    <header class="item1">
      <ul class="menu">
        <li><a  href="#home">Home</a></li>
        <li><a class="active" href="#routines">Routines</a></li>
        <li><a href="#fbsystem">FB System</a></li>
        <li><a href="#courses">Courses</a></li>
        <li><a href="#eBooks">eBooks</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#videos">Videos</a></li>
        <div class="login subnav">
        <a href="logout.php"></a><i class='fas fa-power-off '></i>
        <div class="subnav-content">
      <a href="logout.php">Log out</a>
    
    </div>
    </div>
      </ul>
    </header>

    <aside class="item2">
      <ul class="dashboard">
        <li class="dashboard">Weekly Plan</li>
        <li class="dashboard">Exercise Routine</li>
        <li class="dashboard">Learning Routine</li>
        <li class="dashboard">Content Routine</li>
      </ul>
     
    </aside>
  
    <main class="item3">
      <div class="grid-container1">
      <!-- Weekly table -->
      <div class="grid-item weekly-item">
        <i class='fas fa-address-card' style='font-size:48px;color:red'></i>
        <h2>Weekly Plan</h2>
      <table class="">
        <tr>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Sunday</th>
        </tr>
        <tr>
          <td><a href="#tableExercises">Exercises</a></td>
          <td><a href="#tableExercises">Exercises</a></td>
          <td><a href="#tableExercises">Exercises</a></td>
          <td><a href="#tableExercises">Exercises</a></td>
          <td><a href="#tableExercises">Exercises</a></td>
          <td><a href="#tableExercises">Exercises</a></td>
        </tr>
        <tr>
          <td><a href="#tableLearning">Learning</a></td>
          <td><a href="#tableLearning">Learning</a></td>
          <td><a href="#tableLearning">Learning</a></td>
          <td><a href="#tableLearning">Learning</a></td>
          <td><a href="#tableLearning">Learning</a></td>
          <td><a href="#tableLearning">Learning</a></td>
        </tr>
        <tr>
          <td><a href="#tableContent">Content</td>
          <td><a href="#tableContent">Content</a></td>
          <td><a href="#tableContent">Content</a></td>
          <td><a href="#tableContent">Content</a></td>
          <td><a href="#tableContent">Content</a></td>
          <td><a href="#tableContent">Content</a></td>
        </tr>
        <tr>
          <td><a href="#tableGoals">Goals</a></td>
          <td><a href="#tableGoals">Goals</a></td>
          <td><a href="#tableGoals">Goals</a></td>
          <td><a href="#tableGoals">Goals</a></td>
          <td><a href="#tableGoals">Goals</a></td>
          <td><a href="#tableGoals">Goals</a></td>
        </tr>
      </table>
    </div>
  
  <div class="grid-item">
  <!--Exercise table -->
  <i class='fas fa-running' style='font-size:48px;color:red'></i>
    <h2 id="exercices">Exercise Routine</h2>

    <table class="">
      <form action="">
      <tr>
        <th>Task</th>
        <th>Date</th>
        <th>Length</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Biceps</td>
        <td>Monday</td>
        <td>25 minutes</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label></td>
      </tr>
      <tr>
        <td>Legs, calves, Abs</td>
        <td>Tuesday</td>
        <td>25 minutes</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label></td>
      </tr>
      <tr>
        <td>Chest, triceps, calves</td>
        <td>Wednesday</td>
        <td>25 minutes</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label></td>
      </tr>
      <tr>
        <td>Back, Lower Back, Shoulders</td>
        <td>Thursday</td>
        <td>25 minutes</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label></td>
      </tr>
      <tr>
        <td>Biceps, Forearms, Abs</td>
        <td>Friday</td>
        <td>25 minutes</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label></td>
      </tr>
      <tr>
        <td>Legs, Abs</td>
        <td>Sunday</td>
        <td>25 minutes</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label><br><br>
          <input type="submit" value="Print">
        </td>
          
      </tr>
      
      </form>
      </table>
    </div>
  
  
    <div class="grid-item">
 
      <i class='fas fa-book' style='font-size:48px;color:red'></i>
    <h2 id="tableLearning">Learning Routine</h2>
    <!--Learning Table-->
    <table class="">
      <tr>
        <th>Subject</th>
        <th>Frequency</th>
        <th>Pomodoro</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Javascript</td>
        <td>Daily</td>
        <td>1</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label><br><br>
         
        </td>
        <tr>
          <td>PHP</td>
          <td>Daily</td>
          <td>1</td>
          <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
            <label for="task1"> coming soon</label><br>
            <input type="checkbox" id="task2" name="status2" value="done">
            <label for="status2"> done</label><br>
            <input type="checkbox" id="task3" name="status3" value="missedit">
            <label for="status3"> missed it</label><br><br>
          
          </td>
        </tr>
        <tr>
          <td>Sales/Funnels</td>
          <td>Daily</td>
          <td>1</td>
          <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
            <label for="task1"> coming soon</label><br>
            <input type="checkbox" id="task2" name="status2" value="done">
            <label for="status2"> done</label><br>
            <input type="checkbox" id="task3" name="status3" value="missedit">
            <label for="status3"> missed it</label><br><br>
            
          </td>
        </tr>
        <tr>
          <td>Youtube Automation</td>
          <td>Daily</td>
          <td>1</td>
          <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
            <label for="task1"> coming soon</label><br>
            <input type="checkbox" id="task2" name="status2" value="done">
            <label for="status2"> done</label><br>
            <input type="checkbox" id="task3" name="status3" value="missedit">
            <label for="status3"> missed it</label><br><br>
            <input type="submit" value="Print">
          </td>
        </tr>
      </tr>
    </table>
    </div>
     <!--Content Table-->
     <div class="grid-item">
      <i class='fas fa-camera' style='font-size:48px;color:red'></i>
      <h2 id="tableContent">Content Routine</h2>
     <table class="">
      <tr>
        <th>Platform</th>
        <th>Quantity</th>
        <th>Type</th>
        <th>Topic</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Youtube</td>
        <td>1</td>
        <td>Shorts</td>
        <td>Reaction-Voice-Over</td>
        <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
          <label for="task1"> coming soon</label><br>
          <input type="checkbox" id="task2" name="status2" value="done">
          <label for="status2"> done</label><br>
          <input type="checkbox" id="task3" name="status3" value="missedit">
          <label for="status3"> missed it</label><br><br>
         
        </td>
        <tr>
          <td>Facebook</td>
          <td>1</td>
          <td>reels</td>
          <td>Reaction-Voice-Over</td>
          <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
            <label for="task1"> coming soon</label><br>
            <input type="checkbox" id="task2" name="status2" value="done">
            <label for="status2"> done</label><br>
            <input type="checkbox" id="task3" name="status3" value="missedit">
            <label for="status3"> missed it</label><br><br>
          
          </td>
        </tr>
        <tr>
          <td>Instagram</td>
          <td>1</td>
          <td>Videos</td>
          <td>Reaction-Voice-Over</td>
          <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
            <label for="task1"> coming soon</label><br>
            <input type="checkbox" id="task2" name="status2" value="done">
            <label for="status2"> done</label><br>
            <input type="checkbox" id="task3" name="status3" value="missedit">
            <label for="status3"> missed it</label><br><br>
            
          </td>
        </tr>
        <tr>
          <td>Twitter X</td>
          <td>1</td>
          <td>Videos</td>
          <td>Reaction-Voice-Over</td>
          <td><input type="checkbox" id="task1" name="status1" value="comingSoon">
            <label for="task1"> coming soon</label><br>
            <input type="checkbox" id="task2" name="status2" value="done">
            <label for="status2"> done</label><br>
            <input type="checkbox" id="task3" name="status3" value="missedit">
            <label for="status3"> missed it</label><br><br>
            <input type="submit" value="Print">
          </td>
        </tr>
      </tr>
    </table>
    </div>
  </div>
  </div>
  </main>
    </div>
  </div>
  <footer class="item7">
    <p class="copyright">Copyright 2023 - Fullbootcamp </p>
  </footer>
</div>

</body>
</html>