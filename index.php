<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
session_start();
$_SESSION;
include("connection.php");
include("functions.php");
$user_data=check_login($con);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSAD Project</title>
    </head>
    <body>
        <a href="logout.php">logout</a>
        <br> 
        Hello,<?php echo $user_data['user_name'];?>
        <?php
        // put your code here
        ?>
    </body>
</html>
