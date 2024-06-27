<?php

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$username = filter_input(INPUT_POST, 'username');
$address = filter_input(INPUT_POST, 'address');
$address2 = filter_input(INPUT_POST, 'address2');
$cardn = filter_input(INPUT_POST, 'cardn');
$ccnumber = filter_input(INPUT_POST, 'ccnumber');
$expiration = filter_input(INPUT_POST, 'expiration');
$cvv = filter_input(INPUT_POST, 'cvv');
$mail = filter_input(INPUT_POST, 'mail');

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
    $sql = "INSERT INTO checkout  (fname, lname, username, address, address2, cardn, ccnumber, expiration, cvv, mail)
    values ('$fname', '$lname', '$username', '$address', '$address2', '$cardn', '$ccnumber', '$expiration', '$cvv', '$mail')";


    if ($conn->query($sql)){
        header("location: index.php");

    }
    else{
        echo "Error: ". $sql. "<br>" .$conn ->error;
    }
    $conn -> close();

}

?>