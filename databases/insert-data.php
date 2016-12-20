<?php include('conn-db.php');
//
// insert date in Employees table 
//

$sql = "INSERT INTO EMPLOYEES (first_name, last_name, email, phone_number, hire_date, salary, department_ID)
VALUES ('Muhammad', 'Ahmad', 'mahmad@example..com','0300-0000000','2016-12-19',10000,1)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>