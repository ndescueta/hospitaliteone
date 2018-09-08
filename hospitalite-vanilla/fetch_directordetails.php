<?php
include("connections.php");

if($_POST["directorid"]){
  $directorid = $_POST["directorid"];

  $fetch_directordetails = mysqli_query($connections, " SELECT intDirectorId, strDirectorFirstName, strDirectorMiddleName, strDirectorLastName, strDirectorContact FROM tbldirector WHERE intDirectorID = $directorid");

  $row = mysqli_fetch_assoc($fetch_directordetails);

  echo json_encode($row);
}

 ?>
