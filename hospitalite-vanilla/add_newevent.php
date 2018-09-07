<?php
include("connections.php");
parse_str($_POST['formdata'], $params); //fetch the form

//assign to variables
$eventName = $params["eventName"];
$eventLocation = $params["eventLocation"];
$eventDate = $params["eventDate"];
$eventPaymentDue = $params["eventPaymentDue"];
$eventDescription = $params["eventDescription"];
$eventCapacity = $params["eventCapacity"];





 ?>
