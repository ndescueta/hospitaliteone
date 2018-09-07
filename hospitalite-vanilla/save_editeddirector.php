<?php
include("connections.php");
parse_str($_POST["formdata"], $params); //fetch form

//assign variables
$directorid = $params["hidden_directorid"];
$edited_directorFirstName = $params["edited_directorFirstName"];
$edited_directorMiddleName = $params["edited_directorMiddleName"];
$edited_directorLastName = $params["edited_directorLastName"];
$edited_directorContact = $params["edited_directorContact"];



if ($edited_directorFirstName && $edited_directorMiddleName && $edited_directorLastName && $edited_directorContact){

  mysqli_query($connections, " UPDATE tbldirector
    SET strDirectorFirstName = '$edited_directorFirstName', strDirectorMiddleName = '$edited_directorMiddleName', strDirectorLastName = '$edited_directorLastName', strDirectorContact = '$edited_directorContact' 
    WHERE intDirectorId = '$directorid' ");

  echo "1"; //success
}
else {
  echo "2";
}
 ?>
