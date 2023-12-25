<?php 

$Fullname=$_REQUEST['Fullname'];
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];

if ( isset($_POST['Signup']))
{
    $host="localhost";
    $Email="root";
    $Password="";
    $db="ReNew";

    $conn = mysqli_connect($host,$Email,$Password,$db);
    
    $insert = "insert into ReNewTech values('$Fullname','$Email','$Password')";
     mysqli_query($conn,$insert);
   if($conn){
    echo("<h1 style='color:green;'> Your Join is Done! </h1>");
   } else {
    echo("<h1 style='color:green;'> Your Join is Failed! </h1>");

   }
}

?>