<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?PHP
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Failed to connect to DB");
}

