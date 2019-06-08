<?php 
require("dbconnection.php");
$sql = "SELECT * FROM clothing";
$result = $conn->query($sql);
$output = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output = $output."<div class='clothingModule'><div class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;'><img src='".$row["clothing_image"]."' alt=''/><p class='productTitle' align='center'>".$row["clothing_name"]."</p><p class='productPrice' align='center'>".$row['clothing_price']."</p></div></div>";
    }
}
else{
	$output = $output."error";
}
$conn->close();
echo $output;
?>


