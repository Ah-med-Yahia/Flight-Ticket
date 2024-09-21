<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body style=" background-image: url(plane.jpg); background-size: 100%; font-size: large; ">
<?php
    $con = mysqli_connect('localhost', 'root', '','projet');
        if(isset($_POST['Register']))
    {
        // نقل البيانات في المتغيرات
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cart=$_POST['cart'];
        // تحقق من الاميل
        $check_email="SELECT * FROM login WHERE email='$email'";
        $check=mysqli_query($con,$check_email);
        $num_rows=mysqli_num_rows($check);
        // الحساب موجود
        if($num_rows!=0)
        {
            $email_ero='email already exist';
            $error= 1;
        }
    // تحقق من الاميل صحيح
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $email_ero='please enter volid email';
        $error= 1;
    }

    }


    // رفع البيانات الي قاعده البيانات
    if (isset($_POST['Register'])){
    if($error== 0)
    {
        $sqls="INSERT INTO login VALUES ('$email', '$cart','$password')";
        mysqli_query($con,$sqls);
        // عند النقر يذهب اي صفحه التسجيل
        header("location: login.php");
    }
    }

?>







<center>
    <h1 style="font-family:'Courier New', Courier, monospace; color:rgb(47, 59, 96);
    padding: 40px;
    "> <i>Register</i> </h1>

    

    <form method="post" action="Register.php">
        <br>
        <div>



<P style="color:red;">
<?php
    if(isset($email_ero))
    {
        echo $email_ero ;
    }
?>
</P>


            <input type="email" id="email" name="email" placeholder="e-mail" required
                style="border-radius:25px; 
                height:50px; width: 300px; 
                border: none; outline: none;
                font-size:larger; 
                text-align:center;">

            <br>
            <br>



<input type="text" id="cart" name="cart" minlength="13" maxlength="14" 
            placeholder="cart"
                required
                style=" border-radius:25px; 
                height:50px; width: 300px; 
                border: none; outline: none;
                font-size:larger; 
                text-align:center;">
                
                <br>
                
<P style="color:red;">
<?php
    if(isset($password_ero))
    {
        echo $password_ero;
    }
?>
</P>
            <input type="password" id="password" name="password" minlength="8" maxlength="20" 
            placeholder="Password"
                required
                style=" border-radius:25px; 
                height:50px; width: 300px; 
                border: none; outline: none;
                font-size:larger; 
                text-align:center;">
        <br>
        <h5><p style="color:rgb(47, 59, 96)">password minlength 8 maxlength 20</p></h5>

            <input type="submit"  value="Register" name="Register" 
            style=" border-radius:25px; 
            height:50px;  width: 150px; 
            border: none;  
            font-size:large; 
            text-align:center;
            ">
            <br>
            <br>

            <label>Already have an accont?</label>

            <a href="login.php"  style="color: red;">LOGIN</a>

        </div>
    </form>
</center>
</body>

</html>