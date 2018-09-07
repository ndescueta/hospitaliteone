<?php
include("connections.php");

if($_POST['rowid']){
    $eventid = $_POST['rowid'];
    $fetch_events = mysqli_query($connections, "SELECT td.intEventId, strEventName, txtEventLocation, txtEventDesc, intEventCapacity, datPaymentDue, datDateStart, datDateEnd, timTimeStart, timTimeEnd FROM tblevent te JOIN tbldate td ON te.intEventId = td.intEventId WHERE td.intEventId = $eventid ");

    if (mysqli_num_rows($fetch_events) > 0 ){
        $output = "";

        while ($row = mysqli_fetch_assoc($fetch_events)) {
            $eventid = $row["intEventId"];
            $eventname = $row["strEventName"];
            $eventlocation = $row["txtEventLocation"];
            $eventdescription = $row["txtEventDesc"];
            $eventcapacity = $row["intEventCapacity"];
            $eventpaymentdue = $row["datPaymentDue"];
            $eventdatestart = $row["datDateStart"];
            $eventdateend = $row["datDateEnd"];
            $eventtimestart = $row["timTimeStart"];
            $eventtimeend = $row["timTimeEnd"];

            $output .= "
            <h3>$eventname</h3>
            $eventlocation.<br> FROM $eventdatestart TO $eventdateend. FROM  $eventtimestart TO $eventtimeend Payments are due on $eventpaymentdue only.
            <br>
            <div class='mt-5'><h3>$eventdescription<h3></div>
            ";
        }
        $output .= "</table>";
        echo $output;
    }
}
?>
