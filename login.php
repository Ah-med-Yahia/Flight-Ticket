<!doctype html>

<html>


<head>


    <title>

        Airport

    </title>

    <meta charset="UTF-8" />
    <meta name="description"
        content="The official website of the airline, book a safety and hygiene ticket from Egypt to anywhere" />





</head>



<body  style=" background-image: url(photo_2023-05-12_18-59-38.jpg); background-size: 100%; font-size: large;">
    <!-- <?php
        session_start();
        $con = mysqli_connect('localhost', 'root', '','projet');
        if(isset($_POST['email'])&&isset($_POST['password']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
        }
        if(empty($email))
        {
            $error= 1;
        }
        if(empty($password))
        {
            $error= 1;
        }
        if(!isset($error))
        {
            $sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
            $res=mysqli_query($con,$sql);
            // قراءة السجل من قاعدة البيانات ووضعه في مصفوفة حسب اسم العمود في قاعدة البيانات
            $row=mysqli_fetch_assoc($res);
            if($row['email'] === $email &&$row['password'] === $password )
            {
                $_SESSION['email']=$row['email'];
                $_SESSION['password']=$row['password'];
                $_SESSION['x']="";
                header("location: home.php");
                exit();
            }
            else
            {
                $email_er='wrong email or password';
            }
        }
    ?>  -->

    <center>

        <h1 style="font-family:'Courier New', Courier, monospace; color:yellow;"> <i>Airport website</i> </h1>

    </center>


    <form method="post"  action="login.php" >


        <center>
            <div style="padding: 100px;">

<P style="color:red;">
<?php
    if(isset($email_er))
    {
        echo $email_er ;
    }
?>
</P>

                <input type="email" name="email" placeholder="Enter your e-mail" required
                    style="height:30px; width:300px; background-color:rgb(225, 248, 165); 
                    border-color:rgb(242, 242, 154) ;
                    /* position: relative; */
                    border-radius: 25px;
                    height: 50px;
                    left: -5px;
                    width: 250px;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    text-align: center;
                    font-size: large;">

                <br>
                <br>



                <input type="password" name="password" placeholder="Enter passwors" required 
                minlength="8" maxlength="20"style="height:30px; width:300px; 
                background-color:rgb(225, 248, 165); border-color: rgb(242, 242, 154) ;
                /* position: relative; */
                border-radius: 25px;
                height: 50px;
                left: -5px;
                width: 250px;
                border: none;
                outline: none;
                cursor: pointer;
                text-align: center;
                font-size: large;
                ">

                <br>
                <br>

                <input type="submit" value="Login"
                    style=" background-color: rgb(225, 248, 165) ; border-color:rgb(242, 242, 154) ;
                    /* position: relative; */
                    border-radius: 25px;
                    height: 50px;
                    left: -5px;
                    width: 90px;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    text-align: center;
                    font-size: medium;">

                <h4 style="padding-right: 130px;padding-left:100px;"> New Here? <a href="Register.php"
                        style="color: rgb(225, 101, 93);"> Register Now </a> </h4>
                
            </div>
        </center>



    </form>


</body>

</html>