<?php include('conn-db.php');
//
// insert date in Employees table 
//
$department_name = $_POST["txtDepartmentName"];
$sql = "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('$department_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    echo "Department Name: $department_name";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>