<?php
include("connections.php");

if($_POST["hospitalid"]){
  $hospitalid = $_POST["hospitalid"];

  $fetch_hospitaldetails = mysqli_query($connections, "SELECT intHospitalId, intDirectorId, strHospitalName, strHospitalAddress 
                                                        FROM `tblhospital` WHERE intHospitalId = $hospitalid ");

  $row = mysqli_fetch_assoc($fetch_hospitaldetails);

  echo json_encode($row);
}

 ?>
