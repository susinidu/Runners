<?php
    $connection = mysqli_connect("localhost","root","","RUNNERS");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runners</title>
</head>
<body>
    <h2>Data Input</h2>

        <form action="Activity 02.php" method="post">
        <div class="form group">
            <label>Runner Id :</label>
            <dd><input type = "number" name ="runnerid" id="runnerid" class="form control"></dd>
        </div><br>
            <div class="form group">
            <label>Runner Name :</label>
            <dd><input type = "text" name ="runnername" id="runnername" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>Radius(m) :</label>
            <dd><input type = "number" name="radius" id="radius" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>Start Time :</label>
            <dd><input type = "time" name="starttime" id="starttime" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>End Time :</label>
            <dd><input type = "time" name="endtime" id="endtime" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>Number Of Laps:</label>
            <dd><input type = "number" name="numberoflaps" id="numberoflaps" class="form control"></dd>
        </div><br>
        <input type="submit" class="submit">
     </form><br>

     <form action="report/report.php">    

<input type="submit" value="View Report" class="submit"/>
</form><br>

     <?php

     //Database Connection.
    $connection = mysqli_connect('localhost', 'root', '', 'RUNNERS');
    
    $runnerid = $_POST['runnerid'];
    $runnername  = $_POST['runnername'];
    $radius = $_POST['radius'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];
    $numberoflaps = $_POST['numberoflaps'];

     $query = "INSERT INTO `RunnersData`(`Runner_Id`, `Runner_Name`, `Radius`, `Start_Time`, `End_Time`, `Number_Of_Laps`) VALUES ('$runnerid','$runnername','$radius','$starttime','$endtime','$numberoflaps')";
    $insert = mysqli_query($connection, $query);
    if ($insert){
        echo "Details Added...";
    } else {
        echo "There is some problem...";
    }

    ?>

     <?php
    $connection = mysqli_connect("localhost","root","","RUNNERS");
?>

     <h2>Report</h2>

        <table width =80% >
            <tr>
                    <th>Runner Id</th>
                    <th>Runner</th>
                    <th>Radius</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Number Of Laps</th>

            </tr>

                <?php
                    $sql ="SELECT * FROM `RunnersData`";
                    $result = mysqli_query($connection,$sql);
                    while ($row =mysqli_fetch_assoc($result)) {

                    echo '<tr>
                    <td>'.$row['Runner_Id'].'</td>
                    <td>'.$row['Runner_Name'].'</td>
                    <td>'.$row['Radius'].'</td>
                    <td>'.$row['Start_Time'].'</td>
                    <td>'.$row['End_Time'].'</td>
                    <td>'.$row['Number_Of_Laps'].'</td>
            </tr>';
                    }
                ?>

        </table>
     
</body>
</html>