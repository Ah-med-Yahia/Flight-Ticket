<!DOCTYPE html>


<html>

<head>

    <title>

        Update

    </title>

</head>

<body style="background-color:gray ;">


<?php
session_start();
$con = mysqli_connect('localhost', 'root', '','projet');
$email= '';
$password='';
$email_ero='';
$error='';

if(isset($_POST['email']))
{
    $email=$_POST['email'];
}

$check_email="SELECT * FROM login WHERE email='$email'";
$check=mysqli_query($con,$check_email);
$num_rows=mysqli_num_rows($check);

if($num_rows==1)
{
if(isset($_POST['submit']))
{
    $password=$_POST['newpassword'];
    $result = mysqli_query($con,"UPDATE login SET password=$password WHERE email='$email'");
    header("location: profile.php");
}
}
else{
    $ero='email not exist';
    $error=1;
}

?>

    <center>

        <form method="post" action="update.php" style="padding: 180px;">

            <div>
                <p style="color: blue;">
<?php

if(isset($_POST['submit'])){
    if($error==1){
        echo $ero;
    }
}


?>
                </p>
                <input type="text" name="email" placeholder="email"
                    style="text-align: center;font-size: larger;
                    border-radius:25px; 
                height:50px; width: 300px; 
                border: none; outline: none; "> </input>


                <br><br>

                <input type="password" name="newpassword" placeholder="New password" minlength="8" maxlength="20"
                    style="text-align: center;font-size: larger;
                    border-radius:25px; 
                height:50px; width: 300px; 
                border: none; outline: none;"> </input>

                <br> <br>

                <input type="submit" name="submit" value=" Save"
                    style="border-radius:25px; 
            height:50px;  width: 150px; 
            border: none;  
            font-size:large; 
            text-align:center;"> </input>

            </div>
    </center>




    </form>




</body>





</html>