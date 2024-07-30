<?php
include 'database.php';
// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve from data using $_POST superglobal
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


// prepare connection


$sql = $conn->prepare("INSERT INTO user(name,mobile,email) VALUES
(?,?,?)");
$sql->bind_param("sis",$name,$mobile,$email);


//Execute statement
if ($sql->execute()) { 
echo"<h3>Saved Successfully</h3>";
header("Location: index.php");
}else {
    echo "ERROR: Could not execute" . $sql->error;
}
}

?>