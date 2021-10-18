<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.php");
}
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <meta charset=" utf-8">
        <meta name="viewport" content="device=-width, initial-scale=1.0">
        <title>Messenger</title>
        
</head>
<body>
    <div id="main_home">
        <div id="userinfo">
            <?php
            echo $_SESSION["username"];
            ?> 
            <a href="logout.php">Logout</a>
            </div>
        <div id="msgscreen">
        <?php 
        $sql="SELECT * FROM messege";
        $result=mysqli_query($conn,$sql);
        echo "<table border='1'>
        <tr>
        <th>username</th>
        <th>messege</th>
        </tr>";
     
    while ($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo"<td style ='font-size:20px; background-color:pink; '>".$row['username']."</td>";
        echo"<td style ='font-size:23px; background-color:orange; '>".$row['messege']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    ?>

</div>
<div id="msgbox">
    <form  method="post" action="send.php">
        <textarea name="messege" cols="10" rows="4" > </textarea>
        <button type="submit">send</button>
</form>
</div>
</div>
</body>
</html>
                
                
                
