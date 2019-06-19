<?php 
ob_start();
session_start();
$data = json_decode(file_get_contents("php://input"));
require("dbconnection.php");
$user_id =  $data->user_id;
$user_code =  $data->userCodeInput;
$jsonObj = [];
try{
    $sql = "SELECT * FROM workout_user WHERE user_id = '$user_id' AND user_code='$user_code'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['user_username'];
        $_SESSION['firstname'] = strtoupper($row['user_firstname']);
        $_SESSION['lastname'] = strtoupper($row['user_lastname']);
        $_SESSION['user_id'] = $row['user_id'];
        //$jsonObj = array("message"=>"login successfull", "user_email"=> $row['user_email'], "user_id", $row['user_email']);
        echo "login successfull";
    }
    else{ echo "Error in entering verification code"; }
}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}
$conn->close();
?>