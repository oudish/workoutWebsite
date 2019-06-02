<?php
$to = "+230 59291209@vtext.com";
$from = "oudish.misrylall4614@gmail.com";
$message = "test message";
$headers = "From: $from\n";
mail($to,'',$message,$headers);
?>