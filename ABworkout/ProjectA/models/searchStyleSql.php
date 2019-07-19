<?php 
require("dbconnection.php");
$style = (string) $_GET["style"];
$sql = "SELECT * FROM clothing WHERE clothing_style = '$style'";
$result = $conn->query($sql);
$output = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output = $output."<div class='clothingModule'><div class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;'><img src='".$row["clothing_image"]."' alt=''/><p class='productTitle'>".$row["clothing_name"]."</p><p class='productPrice'>".$row['clothing_price']."</p></div></div>";
    }
}
else if($result->num_rows == 0){
    $output = $output."No results";
}
else{
	$output = $output."error";
}
$conn->close();
echo $output;
?>