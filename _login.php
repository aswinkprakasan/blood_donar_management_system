<?php

//connecting to database via config.php inpartials folder//

include 'config.php';

//if username exists//

$ifexists=true;

//fetching details//

$email=$_POST["email"];
$pass=$_POST["password"];


//checking is username exists//

$emailexists=false;
$isvalid=false;

$checkemail="SELECT * FROM donor_table WHERE email='$email'";
$result=mysqli_query($conn,$checkemail);
if(mysqli_num_rows($result)==1)
{
   
    $emailexists=true;
    $data=mysqli_fetch_row($result);

    //checking if credentials are valid//

    if($data[7]==$email && $data[1]==$pass)
    {
        echo "Password";
        header("Location:dashboard.php");
        $isvalid=true;
    }
}

?>