<?php include('conn-db.php');

// sql to create DEPARTMENTS table
$sql = "CREATE TABLE DEPARTMENTS(
department_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
department_name VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table DEPARTMENTS created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
// sql to create EMPLOYEES table
$sql = "CREATE TABLE EMPLOYEES(
employee_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(30),
phone_number VARCHAR(20),
hire_date DATE,
salary INT(6),
department_id INT(6)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table EMPLOYEES created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

