<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        #BG 
        {
            border: 2px solid black;
            padding: 400px;
            background: url(halloween-background-with-forest-castle-of-terror-and-pumpkin-backdrop_1024x1024@2x.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .link-button {
          background-color: #f4511e;
          border: none;
          color: white;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
          margin: 4px 2px;
          opacity: 0.6;
          transition: 0.3s;
          display: inline-block;
          text-decoration: none;
          cursor: pointer;
        }

        .link-button:hover {opacity: 1}
    </style>
    <script type="text/javascript">
        function myfunc()
        {
            location.href="homePage.html";
        }
    </script>
</head>
<body>
    <div id="BG">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <div id="link-to-website">
            <button class="link-button" value="Go to home page" onclick="myfunc()">GO TO WEBSITE</button>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</div>
</body>
</html>

tmb_24197_7235.jpg