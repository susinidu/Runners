<?php
    $connection = mysqli_connect("localhost","root","","RUNNERS");
?>

<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>

<h2>Report</h2>

        <table width =80% >
            <tr>
                    <th>Runner Id</th>
                    <th>Runner</th>
                    <th>Radius</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Duration</th>
                    <th>Number Of Laps</th>

            </tr>

                <?php
                    $sql = "SELECT Runner_Id, Runner_Name, Radius, Start_Time, End_Time, Number_Of_Laps, TIMEDIFF(End_Time, Start_Time) AS difference FROM RunnersData";
                    $result = mysqli_query($connection,$sql);
                    while ($row =mysqli_fetch_assoc($result)) {

                    echo '<tr>
                    <td>'.$row['Runner_Id'].'</td>
                    <td>'.$row['Runner_Name'].'</td>
                    <td>'.$row['Radius'].'</td>
                    <td>'.$row['Start_Time'].'</td>
                    <td>'.$row['End_Time'].'</td>
                    <td>'.$row['difference'].'</td>
                    <td>'.$row['Number_Of_Laps'].'</td>
            </tr>';
                    }
                ?>

        </table>
     