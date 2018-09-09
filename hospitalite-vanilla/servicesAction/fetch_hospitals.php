<?php

include("connections.php");

$fetch_services = mysqli_query($connections, "SELECT TH.strHospitalName, TH.intHospitalId, (SELECT COUNT(*) FROM tblservices WHERE intHospitalId = TH.intHospitalId) AS serviceCount FROM tblservices AS TS JOIN tblhospital AS TH ON TS.intHospitalId = TH.intHospitalId GROUP BY TH.intHospitalId");

if (mysqli_num_rows($fetch_services) > 0 ){
  $output = "
      <table class='table'>
      <thead>
      <tr>
      <th>Hospital Name</th>
      <th>Services Offered</th>
      <th>Action</th>
      </tr>
      </thead>
      ";
    while ($row = mysqli_fetch_assoc($fetch_services)){

      $intID = $row["intHospitalId"];
      $strHospName = $row["strHospitalName"];
      $intServiceCount = $row["serviceCount"];

      $output .= "
      <tr class='event_row' data-id='$intID'>
      <td>$strHospName</td>
      <td>$intServiceCount</td>
      <td><button type='button' class='btn btn-success btn_editEvent' id=$intID data-id=$intID data-toggle='modal' data-target='#modal_editservices'><i class='fas fa-edit'></i> Edit</button></td>
      </tr>
      ";
    }
  }

  $output .= "</table>";
  echo $output;

?>
