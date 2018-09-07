<?php
include("connections.php");

if($_POST["eventid"]){
  $eventid = $_POST["eventid"];

  $fetch_eventdetails = mysqli_query($connections, " SELECT td.intEventId, strEventName, txtEventLocation, txtEventDesc, intEventCapacity, datPaymentDue, datDateStart, datDateEnd, timTimeStart, timTimeEnd FROM tblevent te JOIN tbldate td ON te.intEventId = td.intEventId WHERE td.intEventId = $eventid ");

  $row = mysqli_fetch_assoc($fetch_eventdetails);

  echo json_encode($row);
}

 ?>
