<!doctype html>

<html>


<head>

    <title>

        Home

    </title>

</head>


<body style="background: linear-gradient(rgb(75, 166, 211), #f9fafb 80%);">

    <center>
        <h1 style="color:white"> Book your Flight </h1>
        <h3 style="color:rgb(72, 88, 228)"> <i> Your way for travelling </i> </h3>
    </center>
    <br>
    <br>
    <div
        style="border: 10px solid; background-color: rgb(75, 166, 211);font-size: x-large;border-color:rgb(75, 166, 211);">

        <a href="login.php" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> Login </a>

        <a href="profile.php" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> Profile </a>

        <a href="search.php" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> Search </a>

        <a href="About us.html" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> AboutUs </a>
    </div>

    <center>


        <form method="post" action="home.php">



            <table style="padding: 170px ;width: 100% ;">
                <thead>

                    <tr style="font-size: x-large;">


                        <th> Trip Number </th>
                        <th> Plane Number </th>
                        <th> From </th>
                        <th> TO </th>
                        <th> Time </th>
                        <th> Date </th>
                        <th> Price </th>

                    </tr>

                </thead>

                <tbody>

                    <tr style="text-align: center;font-size: large;">
                        <?php
                        session_start();
                            $con = mysqli_connect('localhost', 'root', '','projet');
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =12")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f1">Book</button> </th>
                        <th> <button name="d1">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =23")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f2">Book</button> </th>
                        <th> <button name="d2">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =24")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f3">Book</button> </th>
                        <th> <button name="d3">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =25")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                            }
                        ?>
                        <th> <button name="f4">Book</button> </th>
                        <th> <button name="d4">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =43")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f5">Book</button> </th>
                        <th> <button name="d5">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =71")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f6">Book</button> </th>
                        <th> <button name="d6">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =72")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f7">Book</button> </th>
                        <th> <button name="d7">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =73")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f8">Book</button> </th>
                        <th> <button name="d8">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =78")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                
                                
                            }
                        ?>
                        <th> <button name="f9">Book</button> </th>
                        <th> <button name="d9">Delete</button> </th>
                    </tr>


                    <tr style="text-align: center;font-size: large;">
                    <?php
                            if($row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM aiport WHERE num_trip =99")))
                            {
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                            }
                        ?>
                        <th> <button name="f10">Book</button> </th>
                        <th> <button name="d10">Delete</button> </th>
                    </tr>

    <?php
            $email= $_SESSION['email'];
if(isset($_POST['f1']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=12");
}
if(isset($_POST['f2']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=23");
}
if(isset($_POST['f3']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=24");
}
if(isset($_POST['f4']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=25");
}
if(isset($_POST['f5']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=43");
}
if(isset($_POST['f6']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=71");
}
if(isset($_POST['f7']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=72");
}
if(isset($_POST['f8']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=73");
}
if(isset($_POST['f9']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=78");
}
if(isset($_POST['f10']))
{
            $res= mysqli_query ($con,"INSERT INTO user SELECT '$email', aiport.num_trip, aiport.num_plane,aiport.from1,aiport.go_to, aiport.time,aiport.date,aiport.price FROM  aiport WHERE num_trip=99");
}
if(isset($_POST['d1']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=12");
}
if(isset($_POST['d2']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=23");
}
if(isset($_POST['d3']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=24");
}
if(isset($_POST['d4']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=25");
}
if(isset($_POST['d5']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=43");
}
if(isset($_POST['d6']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=71");
}
if(isset($_POST['d7']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=72");
}
if(isset($_POST['d8']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=73");
}
if(isset($_POST['d9']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=78");
}
if(isset($_POST['d10']))
{
            $res= mysqli_query ($con,"DELETE FROM user WHERE email='$email' AND  num_trip=99");
}



?>

                </tbody>


            </table>
    </center>



    </form>




</body>


</html>