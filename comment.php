<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" href="comment.css?v=<?=$version?>">
    <link href="https://fonts.cdnfonts.com/css/medula-one" rel="stylesheet">
    <!-- cookie writing -->
    <script>document.cookie = "username=useradmin and passwd=f14f286ca435d1fa3b9d8041e8f06aa0af7ab28ea8edcd7e11fd485a100b632b";</script>
</head>
<body> 
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="index.html">Vote</a>
        </div>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="comment.php">Comment</a></li>
        </ul>
      </div>
    </nav>
    <div class="mainbody">
      <div class="box"> 
        <form method="GET">
          <div class="form">
          
          <h2>Tell us about the experience about the site. </h2>
          <div class="inputbox">
            <input type="text" id="citizenship" name="name" required="required" >
            <span>Your Name: </span>
            <i></i>
          </div>

          <div class="inputbox">
              <input type="text" name="comment" id="password" required="required" >
              <span>Tell your opinion about the site</span><br>
              <i></i>
            </div>
            <input type="submit" value="Submit">
          </div>
          <div class="output">
            <?php
            if (isset($_GET["name"]) && isset($_GET["comment"])) {
                $name = $_GET["name"];
                $comment = $_GET["comment"];
    
                $sanitizedName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
                echo "<p><strong>" . $sanitizedName . "</strong>!</p>";
                echo "<p>Your Comment: " . $comment . "</p>";
            }
            ?>
        </div>
      </form>
      
    </div>
  </div>
  </body>
</html>