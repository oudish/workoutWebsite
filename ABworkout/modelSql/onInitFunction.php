<?php 
require("dbconnection.php");
$FinalArray = array();
$arrayWeek1 = array();$arrayWeek2 = array();$arrayWeek3 = array();$arrayWeek4 = array();$arrayWeek5 = array();$arrayWeek6 = array();$arrayWeek7 = array();$arrayWeek8 = array();$arrayWeek9 = array();$arrayWeek10 = array();$arrayWeek11 = array();$arrayWeek12 = array();
try{
    //$sql = "SELECT * FROM workout_plan ORDER BY plan_week";
    $sql = "SELECT * FROM workout_plan";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $arrayWeek1[] = $row;
            // if($row["plan_week"] == "1"){
            //     $arrayWeek1[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "2"){
            //     $arrayWeek2[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "3"){
            //     $arrayWeek3[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "4"){
            //     $arrayWeek4[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "5"){
            //     $arrayWeek5[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "6"){
            //     $arrayWeek6[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "7"){
            //     $arrayWeek7[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "8"){
            //     $arrayWeek8[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "9"){
            //     $arrayWeek9[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "10"){
            //     $arrayWeek10[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "11"){
            //     $arrayWeek11[] = $row["plan_video_id"];
            // }
            // else if($row["plan_week"] == "12"){
            //     $arrayWeek12[] = $row["plan_video_id"];
            // }
        }
        //$FinalArray = array($arrayWeek1,$arrayWeek2,$arrayWeek3,$arrayWeek4,$arrayWeek5,$arrayWeek6,$arrayWeek7,$arrayWeek8,$arrayWeek9,$arrayWeek10,$arrayWeek11,$arrayWeek12);
    }
    //else{ echo "error"; }

}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}

echo json_encode($arrayWeek1);
//echo json_encode($FinalArray);
//echo $arrayWeek1;
$conn->close();
?>


