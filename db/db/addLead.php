<?php
   

   function adLead($fullName,$phoneNum,$email){
    $connection=mysqli_connect("localhost","root", "");
    if(mysqli_connect_errno())
         {
             echo "error!".mysqli_connect_error();
         }
    $sql='USE mysql';
    if(mysqli_query($connection,$sql))
    {
       // echo "Using mysql. </br>";
    }
    else
    {
        echo "Error ".mysqli_error($connection);
    }
    $sql="INSERT INTO `geek1` (`fullName`, `phoneNumber`, `email`) VALUES ('$fullName', '$phoneNum', '$email');";   

    if(mysqli_query($connection,$sql))
    {
        //echo('lead added!');
    }
    else
    {
        echo "Error ".mysqli_error($connection);
    }
   }
   
?>

<!-- ?php
    // require_once('./db/dbCon.php');
    // require_once('./db/addLead.php');
    
    // $isValidFields=isset($_GET['fullName'])&&isset($_GET['phoneNum'])&&isset($_GET['email']);
    // if( $isValidFields){
    //     adLead($_GET['fullName'], $_GET['phoneNum'],$_GET['email']);
    // }

?> -->

