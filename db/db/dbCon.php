<?php
//mysql://b3babb87e9ebab:6c27a460@eu-cdbr-west-02.cleardb.net/heroku_28ed2d562907d38?reconnect=true

$connection=mysqli_connect("eu-cdbr-west-02.cleardb.net","b3babb87e9ebab", "6c27a460");
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

?>



