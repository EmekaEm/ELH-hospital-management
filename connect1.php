<?php

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$age = filter_input(INPUT_POST, 'age');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$doctor = filter_input(INPUT_POST, 'doctor');


$host = "localhost";
$dbusername = "root";
$dbpassword="";
$dbname = "22202984/22225984/22226454";

//create connection 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'
    .mysqli_connect_error());
}
else{
    $sql = "INSERT INTO appointment  (firstName, lastName, age, email, address, doctor_id)
    values ('$firstName', '$lastName', '$age', '$email', '$address', '$doctor')";


    if ($conn->query($sql)){
        header("location: index.php");
    }
    else{
        echo "Error: ". $sql. "<br>" .$conn ->error;
    }
    $conn -> close();

}

?>