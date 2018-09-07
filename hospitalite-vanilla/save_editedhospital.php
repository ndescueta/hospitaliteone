<?php
include("connections.php");
parse_str($_POST["formdata"], $params); //fetch form

//assign variables
$hospitalid = $params["hidden_hospitalid"];
$hospitalName = $params["edit_hospitalName"];
$hospitalDirectorID = $params["edit_hospitalDirector"];
$hospitalAddress = $params["edit_hospitalAddress"];


if ($hospitalid && $hospitalName && $hospitalDirectorID && $hospitalAddress){

  mysqli_query($connections, " UPDATE tblhospital
    SET intDirectorId = '$hospitalDirectorID', strHospitalName = '$hospitalName', strHospitalAddress = '$hospitalAddress'
    WHERE intHospitalId = '$hospitalid' ");

  echo "1"; //success
}
else {
  echo "2";
}
 ?>
