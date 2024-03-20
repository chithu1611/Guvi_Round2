<?php

require "./../assets/mongo.php";
require "./../assets/mysql.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $checkEmailQuery = "SELECT * FROM login WHERE email = '$email'";
    $result = $mysqlConn->query($checkEmailQuery);


    if ($result->num_rows > 0) {
        echo "Error: Email already exists";
    } else {
        $insertSql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
        
        if ($mysqlConn->query($insertSql) === TRUE) {
            echo "New record created successfully\n";
        } else {
            echo "Error: " . $insertSql . "<br>" . $mysqlConn->error;
        }

		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];


		$data = array(
			"Name" => $name,
			"DOB" => $dob,
			"Email" => $email,
			"Phone Number" => $phone,
		);

		$insert = $userCollection->insertOne($data);

		if ($insert->getInsertedCount() > 0) {
			echo "Document inserted successfully!";

		} else {
			echo "Error inserting data: " . $insert->getMessage();
		}
    }
    $mysqlConn->close();
}


?>