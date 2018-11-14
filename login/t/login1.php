<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'demo');

$check=0; 

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// checking request method used for accessing the page
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){

        extract($_POST);
        
        $db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);   // db is a connect variable


        $stmt = "select * from users where username=".$username." and password = ".$password.";";

        $res = mysqli_query($db,$stmt);

        if($res && mysqli_num_rows($res)==1)                //atleast one row and only one row
        {
             
            
        }



    }}

/*

        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
*/
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <style type="text/css">
        body, html
        { 
            font: 14px sans-serif;


         }
        
        .wrapper{ width: 350px; padding: 20px; }
        #BG 
        {
            padding: 400px;
            background-image: url(halloween-background-with-forest-castle-of-terror-and-pumpkin-backdrop_1024x1024@2x.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin:0px;
            height: 100%;
        }

        #submit_login {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            padding:10px;
            border-radius: 5px;
            margin:10px;
        }

        #submit_login:focus {
            color: #fff;
            background-color: #286090;
            border-color: #122b40;
        }

        #submit_login:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }

        #username_input
        {
            margin:10px;
            padding:5px;
            border-radius: 5px;
        }
        
        #password_input
        {
            margin:10px;
            padding:5px;
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <div id="BG">
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login.php" method="post">
            <div class="form-group">
                <label>Username</label><br>
                <input id="username_input" type="text" name="username" class="form-control">
                <span><?php /*if($check) echo "Working"; else echo "Not working"*/ echo is_bool($res);?></span>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group ">
                <label>Password</label><br>
                <input id="password_input" type="password" name="password" class="form-control"><br>
                <span class="help-block"><?php echo $password_err; ?></span>
        
            </div>
            <div class="form-group">
                <input id="submit_login" type="submit" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>   
    </div> 
</body>
</html>