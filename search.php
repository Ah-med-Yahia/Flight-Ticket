<!DOCTYPE html>

<html>

<head>

    <title>Search</title>

<style>
    *{

margin: 0;

padding: 0;

font-family: sans-serif;

box-sizing: border-box;

}

body{

height: 100vh;

display: flex;

justify-content: center;

align-items: center;

background: linear-gradient(red, #f9fafb 50%);

}

h1{

position: absolute;

top: 10%;

font-size: 60px;

color: rgb(255, 255, 255);

}

.box{

width: 560px;

height: 50px;

background-color: rgb(255, 255, 255);

border-radius: 30px;

display: flex;

align-items: center;

padding: 10px;


}


.Search
{

font-size: 20px;
color: #ffffff;
position: relative;
border-radius: 25px;
height: 50px;
left: 10px;
width: 300px;
border: none;
outline: none;
cursor: pointer;
text-align: center;

}

.box > input{

flex: 1;

border: none;

outline: none;

font-size: 18px;

}
</style>

</head>

<body>

<P style="color:rgb(72, 88, 228)">
<?php
    $con = mysqli_connect('localhost', 'root', '','projet');
    $key='';
    if(isset($_POST['Search']))
    {
        $key = $_POST['Search1'];
    }
?>
</P>

    <h1>Search</h1>
    
    <form  method="post" action="search.php">
    <div class="box">
        
        <input type="text"   name="Search1" placeholder="search place you want to go !">
        <div>
            <input type="submit" value="Search" class="Search" name="Search" style=" background-color: #ff6868;">
        
        </div>
        </div>

        
        <center>
        <br>
        <br>
        <?php 
        $array1 = array();
        $array2 = array();
        $array3 = array();
        $array4 = array();
        $array5 = array();
        $array6 = array();
        $array7 = array();
        $query=mysqli_query($con,"SELECT * FROM aiport WHERE go_to LIKE '%{$key}%'");
        while($row=mysqli_fetch_assoc($query))
        {
        $array1[] = $row['num_trip'];
        $array2[] = $row['num_plane'];
        $array3[] = $row['from1'];
        $array4[] = $row['go_to'];
        $array5[] = $row['time'];
        $array6[] = $row['date'];
        $array7[] = $row['price'];
        }
        $ero=0;
        if(empty($_POST['Search1'])){
            $ero=1;
        }
        if($ero==0)
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$Trip_Number='Trip Number'."</th>";
        echo "<th>".json_encode($array1)."</th>";
        echo "</tr>";
            }
            else{
                echo $errero='enter place you want to go';
            }
        }
        ?>
        <br>
        <br>
        <?php
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$Plane_Number='Plane Number'."</th>";
        echo "<th>".json_encode($array2)."</th>";
        echo "</tr>";
        }
        }
        ?>
        <br>
        <br>
        <?php
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$From='From'."</th>";
        echo "<th>".json_encode($array3)."</th>";
        echo "</tr>";
        }
        }
        ?>
        <br>
        <br>
        <?php
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$TO='TO'."</th>";
        echo "<th>".json_encode($array4)."</th>";
        echo "</tr>";
        }
        }
        ?>
        <br>
        <br>
        <?php
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$Time='Time'."</th>";
        echo "<th>".json_encode($array5)."</th>";
        echo "</tr>";
        }
        }
        ?>
        <br>
        <br>
        <?php
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$Date='Date'."</th>";
        echo "<th>".json_encode($array6)."</th>";
        echo "</tr>";
            }
        }
        ?>
        <br>
        <br>
        <?php
        if(isset($_POST['Search'])){
            if($ero==0){
        echo "<tr>";
        echo "<th>".$Price='Price'."</th>";
        echo "<th>".json_encode($array7)."</th>";
        echo "</tr>";
        }
        }
        ?>

    </center>
        

    </form>
</body>


</html>
