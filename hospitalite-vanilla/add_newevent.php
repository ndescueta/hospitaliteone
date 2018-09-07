<?php
include("connections.php");
parse_str($_POST['formdata'], $params); //fetch the form

//assign to variables
$eventName = $params["eventName"];
$eventLocation = $params["eventLocation"];
$eventDateStart = $params["eventDateStart"];
$eventDateEnd = $params["eventDateEnd"];
$eventTimeStart = $params["eventTimeStart"];
$eventTimeEnd = $params["eventTimeEnd"];
$eventPaymentDue = $params["eventPaymentDue"];
$eventDescription = $params["eventDescription"];
$eventCapacity = $params["eventCapacity"];

if ($eventName && $eventLocation && $eventDateStart && $eventDateEnd && $eventTimeStart && $eventTimeEnd && $eventPaymentDue && $eventDescription && $eventCapacity){

  $fetch_events = mysqli_query($connections, " SELECT * FROM tblevent WHERE strEventName = '%$eventName%' ");

  if (mysqli_num_rows($fetch_events) <= 0 ){
    mysqli_query($connections, " INSERT INTO tblevent(strEventName, txtEventLocation, txtEventDesc, intEventCapacity, datPaymentDue) VALUES ('$eventName', '$eventLocation', '$eventDescription', $eventCapacity, '$eventPaymentDue') ");
    mysqli_query($connections, " INSERT INTO tbldate(intEventId, datDateStart, datDateEnd, timTimeStart, timTimeEnd) VALUES((SELECT intEventId FROM tblevent ORDER BY intEventId DESC LIMIT 1), $eventDateStart, $eventDateEnd, $eventTimeStart, $eventTimeEnd) ");
    echo "1"; // if successful
  }
  elseif (mysqli_num_rows($fetch_events) > 0){
    echo "2"; // if event already exists
  }
}
else {
  echo "3";
}



?>
