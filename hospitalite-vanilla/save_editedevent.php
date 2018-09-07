<?php
include("connections.php");
parse_str($_POST["formdata"], $params); //fetch form

//assign variables
$eventid = $params["hidden_eventid"];
$edited_eventName = $params["edit_eventName"];
$edited_eventLocation = $params["edit_eventLocation"];
$edited_eventDateStart = $params["edit_eventDateStart"];
$edited_eventDateEnd = $params["edit_eventDateEnd"];
$edited_eventTimeStart = $params["edit_eventTimeStart"];
$edited_eventTimeEnd = $params["edit_eventTimeEnd"];
$edited_eventPaymentDue = $params["edit_eventPaymentDue"];
$edited_eventDescription = $params["edit_eventDescription"];
$edited_eventCapacity = $params["edit_eventCapacity"];


if ($edited_eventName && $edited_eventLocation && $edited_eventDateStart && $edited_eventDateEnd && $edited_eventTimeStart && $edited_eventTimeEnd && $edited_eventPaymentDue && $edited_eventDescription && $edited_eventCapacity){

  mysqli_query($connections, " UPDATE tblevent
    SET strEventName = '$edited_eventName', txtEventLocation = '$edited_eventLocation', txtEventDesc = '$edited_eventDescription', intEventCapacity = $edited_eventCapacity, datPaymentDue = '$edited_eventPaymentDue'
    WHERE intEventId = '$eventid' ");

  mysqli_query($connections, " UPDATE tbldate SET datDateStart = '$edited_eventDateStart', datDateEnd = '$edited_eventDateEnd', timTimeStart = '$edited_eventTimeStart', timTimeEnd = '$edited_eventTimeEnd' WHERE intEventId = '$eventid' ");
  echo "1"; //success
}
else {
  echo "2";
}
 ?>
