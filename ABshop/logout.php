<?php   
session_start(); //to ensure you are using same session
$_SESSION = array();
session_destroy(); //destroy the session
header("location:/ABWorkoutWeb/workoutWebsite/ABshop/index.php"); //to redirect back to "index.php" after logging out
exit();
?>
