<?php include('conn-db.php');
//
// Select Data
//
$sql = "SELECT department_id, department_name FROM DEPARTMENTS";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo 'Department ID' . ' - ' . 'Department Name' . "<br>";
    while($row = $result->fetch_assoc()) {
        echo $row["department_id"]. "  -----  " . $row["department_name"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>