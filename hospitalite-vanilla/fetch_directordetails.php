<?php
include("connections.php");

if($_POST["directorid"]){
  $eventid = $_POST["directorid"];

  $fetch_directordetails = mysqli_query($connections, " SELECT intDirectorId, strDirectorFirstName, strDirectorMiddleName, strDirectorLastName, strDirectorContact FROM tbldirector");

  $row = mysqli_fetch_assoc($fetch_directordetails);

  echo json_encode($row);
}

 ?>
