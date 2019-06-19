<?php 
ob_start();
session_start();
$data = json_decode(file_get_contents("php://input"));
require("dbconnection.php");
$username =  $data->username;
$password =  $data->password;
$jsonObj = [];
try{
    $sql = "SELECT * FROM workout_user WHERE user_username='$username' AND user_password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $userCode = rand(100000,999999);
        $userRandCode = $userCode;

        $row = $result->fetch_assoc();
        $jsonObj = array("message"=>"login successfull", "user_email"=> $row['user_email'], "user_id"=> $row['user_id'],"user_code"=>$userRandCode);

        $userID = $row['user_id'];
        $sql2 = "UPDATE workout_user SET user_code='$userRandCode' WHERE user_id = '$userID'";
        //$result = $conn->query($sql);
        if ($conn->query($sql2) === TRUE) {
            $jsonObj["user_code"]=$userRandCode;   
            $jsonObj = json_encode($jsonObj);
            echo $jsonObj;

        } else {
            echo "Error updating record: " . $conn->error;
        }    

        
    }
    else{ echo "Error in username or password input"; }
}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}
$conn->close();
?>