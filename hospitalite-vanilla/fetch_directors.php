<?php
include("connections.php");

$fetch_directors = mysqli_query($connections, "SELECT * FROM tbldirector ");

if (mysqli_num_rows($fetch_directors) > 0 ){
  $output = "
  <table class='table'>
  <thead>
  <tr>
  <th>Director ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Contact Number</th>
  <th>Action</th>
  </tr>
  </thead>
  ";

  while ($row = mysqli_fetch_assoc($fetch_directors)) {
    $directorid = $row["intDirectorId"];
    $directorfirstname = $row["strDirectorFirstName"];
    $directormiddlename = $row["strDirectorMiddleName"];
    $directorlastname = $row["strDirectorLastName"];
    $directorcontact = $row["strDirectorContact"];

    $output .= "
    <tr class='director_row' data-id='$directorid'>
    <td>$directorid</td>
    <td>$directorfirstname</td>
    <td>$directorlastname</td>
    <td>$directorcontact</td>
    <td><button type='button' class='btn btn-success btn_editDirector' id=$directorid data-id=$directorid data-toggle='modal' data-target='#modal_editDirector'><i class='fas fa-edit'></i> Edit </button></td>
    </tr>
    ";
  }
  $output .= "</table>";
  echo $output;
}
?>
