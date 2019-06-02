<?php 
$data = json_decode(file_get_contents("php://input"));
require("dbconnection.php");

$week_id =  $data->week_id;
$day_id =  $data->day_id;
$dataRow = array();
try{
    $sql = "SELECT workout_plan.plan_week, workout_plan.plan_day, workout_plan.plan_video_id, workout_video.video_url FROM workout_plan INNER JOIN workout_video ON workout_plan.plan_video_id = workout_video.video_id WHERE workout_plan.plan_week='$week_id' AND workout_plan.plan_day='$day_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $dataRow[] = $row;
        }
    }
    else{ echo "error"; }
}
catch(Exception $error){
    echo "Error occured : ". $error->getMessage();
}

echo json_encode($dataRow);
$conn->close();
?>


