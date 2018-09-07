<?php
include("connections.php");
parse_str($_POST['formdata'], $params); //fetch the form

//assign to variables
$directorFirstName = $params["directorFirstName"];
$directorMiddleName = $params["directorMiddleName"];
$directorLastName = $params["directorLastName"];
$directorContact = $params["directorContact"];

if ($directorFirstName && $directorMiddleName && $directorLastName && $directorContact){

  $fetch_directors = mysqli_query($connections, " SELECT * FROM tbldirector WHERE strDirectorFirstName = '$directorFirstName' AND strDirectorMiddleName = '$directorMiddleName'
                                                  AND strDirectorLastName = '$directorLastName' AND strDirectorContact = '$directorContact'");

  if (mysqli_num_rows($fetch_directors) <= 0 ){
    mysqli_query($connections, " INSERT INTO tbldirector(strDirectorFirstName, strDirectorMiddleName, strDirectorLastName, strDirectorContact) VALUES ('$directorFirstName', '$directorMiddleName', '$directorLastName', '$directorContact') ");

    echo "1"; // if successful
  }
  elseif (mysqli_num_rows($fetch_directors) > 0){
    echo "2"; // if directors already exists
  }
}
else {
  echo "3";
}



?>
