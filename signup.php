<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    //something was posted
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $query = "select * from users where user_name = '$user_name' limit 1";
    $result = mysqli_query($con, $query);
    if(!empty($user_name)&&!empty($password)&& !is_numeric($user_name))
    {
        if($result){
            if($result && mysqli_num_rows($result) ===0){
				
        //save to database
        $user_id=random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con,$query);
        header("Location: index.php");
        die;
            }else{
                echo '<script>alert("Username has already been used")</script>';
            }
        
               
        }
        
        
    }else
    {
         echo '<script>alert("Please enter valid information")</script>';
       
    }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Signup</title>
        <style>
            body{
                background-image: url('background.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
        </style>
    </head>
    <body>
        <style type="text/css">
            #text{
                height:25px;
                border-radius: 5px;
                padding:4px;
                border:solid thin #aaa;
                width:100%;
            }
            
            #button{
                padding:10px;
                width:100px;
                color:white;
                background-color:lightblue;
                border:none;
            }
            #box{
                background-color:grey;
                margin-left: 10%;
                margin-top:15%;
                border-radius: 5px;
                border:solid thin #aaa;
                width:30%;
                padding:1%;
            }
            </style>
            <div id="box">
             <form method="post">
                 <div style="font-size: 20px;color: white;">Sign Up</div><br>
                        <span style="font-size:20px;color:white;">Username:</span>
			<input id="text" type="text" name="user_name"><br><br>
                        <span style="font-size:20px;color:white;">Password:</span>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Sign Up"><br><br>
			<a href="login.php">Click to Login</a><br><br>
		</form>
            </div>
    </body>
</html>
