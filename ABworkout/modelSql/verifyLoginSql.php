<?php 
ob_start();
// session_start();
$data = json_decode(file_get_contents("php://input"));
require("dbconnect.php");
$username =  $data->username;
$password =  $data->password;
$object = new stdClass();
// $object->field = '';
// $object->errMsg = '';

try{
    $stmt = $pdo->prepare("SELECT * FROM workout_user WHERE user_email=? AND user_password=?");
    $stmt->execute([$username, $password]);
    $arr = $stmt->fetch();
    // if(!$arr){
    //     echo("No rows");
    // } 
    // else
    if($username =='' && $password ==''){
        $object->field = 'emailpassword';
        $object->errMsg = '* Please enter valid data!';
        echo(JSON_encode($object));
    }
    else if($username =='' ){
        $object->field = 'email';
        $object->errMsg = '* Please enter your email address.';
        echo(JSON_encode($object));
    }
    else if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
        $object->field = 'email2';
        $object->errMsg = '* Please enter a valid email.';
        echo(JSON_encode($object));
    }
    else if($password == '') {
        $object->field = 'password';
        $object->errMsg = '* Please enter your password.';
        echo(JSON_encode($object));
    }
    else if($stmt->rowCount() == 1){
        $object->field = 'success';
        $object->errMsg = '* Successful Login';
        echo(JSON_encode($object));
    }
    else{
        $object->field = 'fail';
        $object->errMsg = '* Please enter a valid email/password.';
        echo(JSON_encode($object));
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