<?php
include("../connections.php");
parse_str($_POST["formdata"], $params); //fetch form

//assign variables
$hospitalId = $params["hidden_hospitalId"];
$serviceName = $params["serviceName"];
$serviceDesc = $params["serviceDesc"];


if ($hospitalId && $serviceName && $serviceDesc){

  mysqli_query($connections, "INSERT INTO tblservices(intHospitalId, strServiceName, txtServiceDescription) VALUES ($hospitalId, $serviceName, $serviceDesc)");

  echo "1"; //success
}
else {
  echo "2";
}
 ?>
