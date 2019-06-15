<?php 
ob_start();
session_start();
$data = json_decode(file_get_contents("php://input"));
require("dbconnection.php");
$username =  $data->username;
$password =  $data->password;
try{
    $sql = "SELECT * FROM clothing_user WHERE user_username='$username' AND user_password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['user_username'];
        // $_SESSION['firstname'] = strtoupper($row['user_firstname']);
        // $_SESSION['lastname'] = strtoupper($row['user_lastname']);
        $_SESSION['name'] = strtoupper($row['user_name']);
        $_SESSION['user_id'] = $row['user_id'];
        echo "login successfull";
    }
    else{ echo "Error in username or password input"; }
}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}
$conn->close();
?>