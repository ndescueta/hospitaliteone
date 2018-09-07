<?php
include("connections.php");
parse_str($_POST['formdata'], $params); //fetch the form

//assign to variables
$hospitalName = $params["add_hospitalName"];
$hospitalDirectorID = $params["add_hospitalDirector"];
$hospitalAddress = $params["add_hospitalAddress"];

if ($hospitalName && $hospitalDirectorID && $hospitalAddress){

  $fetch_hospitals = mysqli_query($connections, " SELECT * FROM tblhospital WHERE intDirectorID = '$hospitalDirectorID' 
                                                    AND strHospitalName = '$hospitalName' AND strHospitalAddress = '$hospitalAddress'");

  if (mysqli_num_rows($fetch_hospitals) <= 0 ){
    mysqli_query($connections, " INSERT INTO tblhospital(intDirectorId, strHospitalName, strHospitalAddress) VALUES ('$hospitalDirectorID', '$hospitalName', '$hospitalAddress') ");

    echo "1"; // if successful
  }
  elseif (mysqli_num_rows($fetch_hospitals) > 0){
    echo "2"; // if directors already exists
  }
}
else {
  echo "3";
}



?>
