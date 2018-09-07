<?php
include("connections.php");

if($_POST['rowid']){
  $contentid = $_POST['rowid'];
  settype($contentid,'int');

  $viewrecord = mysqli_query($connections, "SELECT txtDescription,intHomeContentId FROM tblhomecontent WHERE intHomeContentId = $contentid");

  $row = mysqli_fetch_assoc($viewrecord);

  echo json_encode($row);
}

?>
