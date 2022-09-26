<?php
    $connection = mysqli_connect("localhost","root","","RUNNERS");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runners</title>
</head>
<body>
    <h2>Data Input</h2>

        <form action="index/index.php" method="post">
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

     
     
</body>
</html>