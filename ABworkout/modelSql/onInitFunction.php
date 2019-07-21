<?php 
require("dbconnection.php");
$FinalArray = array();
$arrayWeek1 = array();$arrayWeek2 = array();$arrayWeek3 = array();$arrayWeek4 = array();$arrayWeek5 = array();$arrayWeek6 = array();$arrayWeek7 = array();$arrayWeek8 = array();$arrayWeek9 = array();$arrayWeek10 = array();$arrayWeek11 = array();$arrayWeek12 = array();
try{
    $sql = "SELECT * FROM workout_plan";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $arrayWeek1[] = $row;
        }
    }
}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}

echo json_encode($arrayWeek1);
$conn->close();
?>


