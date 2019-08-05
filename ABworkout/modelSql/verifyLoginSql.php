<?php 
ob_start();
// session_start();
$data = json_decode(file_get_contents("php://input"));
require("dbconnect.php");
$username =  $data->username;
$password =  $data->password;
$mailformat = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';

try{
    $stmt = $pdo->prepare("SELECT * FROM workout_user WHERE user_password=? AND user_email=?");
    $stmt->execute([$username, $password]);
    $arr = $stmt->fetch();
    // if(!$arr){
    //     echo("No rows");
    // } 
    // else
    if($username =='' && $password ==''){
        echo("Please enter valid data!");
    }
    elseif($username =='' ){
        echo("Please enter your email address.");
    }
    elseif(!filter_var($username, FILTER_VALIDATE_EMAIL)){
        echo('Please enter a valid email.');
    }
    elseif($password == '') {
        echo("Please enter your password.");
    }
    elseif($stmt->rowCount() == 1){
        echo("Successful Login");
        
    }
    else{
        echo("Please enter a valid password.");
    }
    // else{
    //     // var_export($arr);
    //     echo($arr["user_username"]);
    // }
    $stmt = null;

    // $sql = "SELECT * FROM workout_user WHERE user_username='$username' AND user_password='$password'";
    // $result = $conn->query($sql);
    // if ($result->num_rows == 1) {
    //     $row = $result->fetch_assoc();
    //     $_SESSION['username'] = $row['user_username'];
    //     $_SESSION['firstname'] = strtoupper($row['user_firstname']);
    //     $_SESSION['lastname'] = strtoupper($row['user_lastname']);
    //     $_SESSION['user_id'] = $row['user_id'];
    //     echo "login successfull";
    // }
    // else{ echo "Error in username or password input"; }
}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}
// $conn->close();
// $pdo->close();
?>