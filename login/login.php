<?php
	extract($_POST);


	$db = mysqli_connect("localhost:3306","root","","test");				//string,username,password,database name
	$stmt="select * from username_table where username=".$uname." and password = ".$pwd.";";		//sql query
	
	
	$res = mysqli_query($db,$stmt);				//query object
	
	

	$err="";
	
	if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
	{
		while($arr=mysqli_fetch_assoc($res))	
		{	
			header("location:welcome.html");
		}


		session_start();								//start session name
		$_SESSION["uname"]=$uname;
	
	}
	else
		$err="Login credentials Incorrect. Please try again";
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label><br>
                <input id="username_input" type="text" name="uname" class="form-control" >
            </div>    
            <div class="form-group">
                <label>Password</label><br>
                <input id="password_input" type="password" name="pwd" class="form-control">
                
            </div>
            <div class="form-group">
                <input id="submit_login" type="submit" class="btn btn-primary" value="Login" ><br><br>
                <span class="help-block" style="color:red"><?php echo $err; ?></span>
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>   
    </div> 
</body>
</html>

