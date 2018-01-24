<?php include('conn-db.php');
//
// Multiple statement
//

$sql =  "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('CS and IT');";
$sql .= "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('zoology');";
$sql .= "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('botany');";
$sql .= "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('english');";
$sql .= "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('urdu');";
$sql .= "INSERT INTO DEPARTMENTS (department_name) 
VALUES ('math');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>