<?php
include("connections.php");

$fetch_events = mysqli_query($connections, "SELECT * from tblevent " );

if (mysqli_num_rows($fetch_events) > 0 ){
    $output = "
        <table class='table'>
        <thead>
        <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
        </tr>
        </thead>
        ";

    while ($row = mysqli_fetch_assoc($fetch_events)) {
        $id = $row["intEventId"];
        $eventname = $row["strEventName"];
        $eventdescription = $row["txtEventDesc"];
        $date = $row["datPaymentDue"];

        $output .= "
        <tr class='tpose' data-id='$id'>
        <td>$eventname</td>
        <td>$date</td>
        <td></td>
        <td><button type='button' class='btn btn-success'><i class='fas fa-edit'></i> Edit</button></td>
        </tr>
        ";
    }
    $output .= "</table>";
    echo $output;
}
?>
<script>
$(document).ready(function(){
    $('.tpose').click(function(){
        var rowid = $(this).attr("data-id");
        // alert(rowid);
        $.ajax({
            method: "POST",
            url: "fetch_eventDesc.php",
            data: "rowid=" + rowid,
            success: function (data){
                $('#eventDescCont').removeClass();
                $('#eventDescCont').html(data);
            }
        });
    });
});
</script>
