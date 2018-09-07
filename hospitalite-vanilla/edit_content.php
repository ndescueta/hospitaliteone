<?php
include("connections.php");
parse_str($_POST["formdata"], $params);
$contentid = $params["contentid"];
$description = $params["description"];

if($contentid && $description){



      mysqli_query($connections,"UPDATE tblhomecontent
                                  SET txtDescription = '$description'
                                  WHERE intHomeContentId = '$contentid'");
      echo "1";


}
else {
  echo "2";
}
?>
