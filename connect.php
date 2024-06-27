<?php

$user = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'password');
if (!empty($user)){
if (!empty($password)){
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
    $sql = "INSERT INTO doctors  (user, password)
    values ('$user', '$password')";
    

    if ($conn->query($sql)){
        header("Location: appointments.php");
    }
    else{
        echo "Error: ". $sql. "<br>" .$conn ->error;
    }
    $conn -> close();

}

}
else{
    echo "Password should not be empty";
    die();
}
}

else{
    echo "user should not be empty";
    die();
}
?>