<?php
include("connections.php");

if($_POST["eventid"]){
  $eventid = $_POST["eventid"];

  $fetch_eventdetails = mysqli_query($connections, " SELECT * FROM tblevent WHERE intEventId = $eventid ");

  $row = mysqli_fetch_assoc($fetch_eventdetails);

  echo json_encode($row);
}

 ?>
