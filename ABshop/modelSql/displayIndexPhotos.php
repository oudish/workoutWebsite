<?php 
$data = json_decode(file_get_contents("php://input"));
require("dbconnection.php");

$dataRow = array();
try{
    $sql = "SELECT * FROM clothing";
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
