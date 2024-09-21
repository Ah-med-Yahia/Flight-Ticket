<!DOCTYPE html>
<html lang="en">



<head>


    <title>Your Profile</title>


</head>



<body  style="background-image:url(photo_2023-05-20_23-47-04.jpg); background-size: 60%;">

    <center>

        <h1> <i style="color: white;"> Your Profile </i> </h1>

    </center>



    
        
    <div style="border: 10px solid; background-color: rgb(75, 166, 211);font-size: x-large;border-color:rgb(75, 166, 211);">

        <a href="home.php" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> Home </a>

        <a href="login.php" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> Login </a>

        <a href="search.php" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> Search </a>

        <a href="About us.html" style="color: aliceblue;text-decoration: none;word-spacing:350px ;"> AboutUs </a>

    </div>    

    <?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '','projet');
    $email=$_SESSION['email'];
    ?>


                                    <br>
                                    <br>
                                    <br> 


        <div style="color: white;">
        <h2><i>Email : 
        <?php
        echo $_SESSION['email'];
        ?>
        </i></h2>
        
        <h2><i>Password :
        <?php
        $res=mysqli_query($con,"SELECT * FROM login WHERE email='$email'");
        $row = mysqli_fetch_array($res);
        echo  $row['password'];
        
        ?>
        </i></h2>
        <h3><a href="update.php" style="color: red ; text-decoration: none;"> chang password </a></h3> 
        
        <h3><a href="Credit Card.php" style="color: red ; text-decoration: none;"> pay </a></h3> 
        </div>
        <center>
        <P style="color:green;">
            <?php
                if(isset($_SESSION['x']))
                {
                    echo $_SESSION['x'];
                }
            ?>
            </p>
<br>
<br>
<br>
<h2> <i style="color: coral;"> Your booked </i> </h2>


        <table style="padding: 30px; width:60%; color: white; text-align: center;font-size: large;">
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

                        <?php
                        
                        $email= $_SESSION['email'];
                        $result = mysqli_query($con,"SELECT * FROM user WHERE email='$email'");
                        while($row = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>".$row['num_trip']."</td>";
                                echo "<td>".$row['num_plane']."</td>";
                                echo "<td>".$row['from1']."</td>";
                                echo "<td>".$row['go_to']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['price']."</td>";
                                echo"</tr>";
                            }
                            exit();
                        ?>


                </tbody>



            </table>
    </center>



    </form>






</body>


</html>