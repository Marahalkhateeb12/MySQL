<?php
include 'connect.php';


$sql = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql);
if(mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table width='400' border='1' cellspacing='0' cellpadding='3'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Student_Name</th>";
                echo "<th>Age</th>";
                echo "<th>Address</th>";
                echo "<th>Gender</th>";
                echo "<th>GPA</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Student_ID'] . "</td>";
                echo "<td>" . $row['Student_Name'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['GPA'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>

