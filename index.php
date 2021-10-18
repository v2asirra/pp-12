<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <meta charset=" utf-8">
        <meta name="viewport" content="device=-width, initial-scale=1.0">
        <title>ChatBox</title>
        
</head>
<body>
    <div id="main">
        <br> <br> <br>
    <h4>Manage your team easily and Secretly</h4>
    <img src="icon.png" width="100px" /> <br>
    <span style="color:red;">
    <?php
    if (isset($_GET['login']))
    {
        echo "incorrect username or password , try again";

    }
    ?>
    </span>
    <table>

            <form method="POST" action="login.php">
                
                <input type="text" name="username" placeholder="Enter Your user Name">
                <br>
                <input type="password" name="password" placeholder="Enter Your Password ">
                 <br>
                 <button type="submit" name="login"> Login </button>
</form>
</table>
</div>
<div id="footer">
    all right reserved & copy 2012-<?php echo date ('y');?>
</div>
</body>
</html>
                
                
                
