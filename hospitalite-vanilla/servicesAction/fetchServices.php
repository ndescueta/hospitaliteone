<?php
include("../connections.php");

if($_POST['hospId']){

  $hospID = $_POST['hospId'];

  $fetch_events = mysqli_query($connections, "SELECT TS.strServiceName, TS.txtServiceDescription FROM tblservices AS TS JOIN tblhospital AS TH ON TS.intHospitalId = TH.intHospitalId WHERE TS.intHospitalId = $hospID");
  if (mysqli_num_rows($fetch_events) > 0 ){

    $output = "";

    while ($row = mysqli_fetch_assoc($fetch_events)) {
      $serviceName = $row["strServiceName"];
      $serviceDesc = $row["txtServiceDescription"];

      $output .= "<button style='border-radius: 2px;
                     cursor: pointer;
                     line-height: 1.8;
                     color: black;
                     padding: 12px;
                     margin-bottom: 12px;
                     border: solid 1px #000;
                     transition: 0.05s;
                     font-size: 68%;
                     align-items: center;
                     justify-content: center;
                     text-align: center;'
                      type='button'
                     data-toggle='modal'
                     data-target='#edit'
                     >
                $serviceName
      </button>";
    }
  }
}

echo $output;
?>
