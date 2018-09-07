<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
  <title>Trainings</title>
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
  <!--Toaster Popup message CSS -->
  <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
  <!--alerts CSS -->
  <link href="../assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
  <!-- Custom CSS -->
  <link href="dist/css/style.min.css" rel="stylesheet">
  <!-- Dashboard 1 Page CSS -->
  <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-megna fixed-layout">

  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="loader">
      <div class="loader__figure"></div>
      <p class="loader__label">Elite Hospital</p>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- topbar -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon --><b>
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
            <!-- Light Logo icon -->
            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
          </b>
          <!--End Logo icon -->
          <span class="hidden-xs"><span class="font-bold">elite</span>hospital</span>
        </a>
      </div>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <div class="navbar-collapse">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav mr-auto">
          <!-- This is  -->
          <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
          <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Sidebar -->
  <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav">
          <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
              <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
              <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
              <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
          <li class="nav-small-cap">--- <b>MAINTENANCE</b></li>
          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Website</span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="websiteServices">Services</a></li>
              <li><a href="app-chat.html">Inquiries</a></li>
              <li><a href="app-ticket.html">Trainings and Seminars</a></li>
              <li><a href="app-contact.html">Members</a></li>
              <li><a href="app-contact2.html">News</a></li>
              <li><a href="app-contact-detail.html">Faqs</a></li>
            </ul>
          </li>
</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Trainings and Seminar</h4>
      </div>
    </div>
    <!-- //////////////////////////////Content -->
    <div class="card">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-body">
            <h4 class="card-title m-t-10">Current Events</h4>
            <div class="row">
              <div class="col-md-12">
                <!-- events table -->
                <div id="events">
                  <?php
                  include("connections.php");

                  $fetch_events = mysqli_query($connections, "SELECT td.intEventId, DATEDIFF(datDateStart, NOW()) as status, strEventName, txtEventLocation, txtEventDesc, intEventCapacity, datPaymentDue, datDateStart, datDateEnd, timTimeStart, timTimeEnd FROM tblevent te JOIN tbldate td ON te.intEventId = td.intEventId ");
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
                      $eventid = $row["intEventId"];
                      $eventname = $row["strEventName"];
                      $eventdescription = $row["txtEventDesc"];
                      $eventdatestart = $row["datPaymentDue"];
                      $eventstatus = $row["status"];

                      $output .= "
                      <tr class='event_row' data-id='$eventid'>
                      <td>$eventname</td>
                      <td>$eventdatestart</td>
                      <td>In $eventstatus days</td>
                      <td><button type='button' class='btn btn-success btn_editEvent' id=$eventid data-id=$eventid data-toggle='modal' data-target='#modal_editEvent'><i class='fas fa-edit'></i> Edit</button></td>
                      </tr>
                      ";
                    }
                    $output .= "</table>";
                    echo $output;
                  }
                  ?>
                </div>
                <!-- Add Events -->
                <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn m-t-10 btn-info btn-block waves-effect waves-light">
                  <i class="ti-plus"></i> Add New Event
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- EVENT DESCRIPTION -->
        <div class="col-lg-6">
          <div class="card-body b-l calender-sidebar">
            <h4 class="card-title m-t-10">Event Description</h4>
            <div class='text-center text-muted' id='eventDescCont'>
              <i class='fas fa-calendar-alt fa-5x'></i><br><br>
              <p>No Event Selected</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  © 2018 Eliteadmin by themedesigner.in
</footer>
</div>
<!-- modal declarations -->
<!-- add event -->
<div id="add-new-event" name="add-new-event" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addneweventlabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form class='form-group form-material p-2' method="post" name="add-new-event">
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="eventName">Event Name</label>
              <input type="text" class="form-control" name="eventName" id="eventName" >
            </div>
            <div class="form-group col-md-12">
              <label for="eventLocation">Event Location</label>
              <input type="text" class="form-control" name="eventLocation" id="eventLocation">
            </div>
            <div class="form-group col-md-6">
              <label for="eventDateStart">Event Date Start</label>
              <input type="date" name="eventDateStart" id="eventDateStart" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="eventDateEnd">Event Date End</label>
              <input type="date" name="eventDateEnd" id="eventDateEnd" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="eventTimeStart">Event Time Start</label>
              <input type="time" name="eventTimeStart" id="eventTimeStart" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="eventTimeEnd">Event Time Start</label>
              <input type="time" name="eventTimeEnd" id="eventTimeEnd" class="form-control">
            </div>
            <div class="form-group">
              <label for="eventPaymentDue">Payment Due</label>
              <input type="date" name="eventPaymentDue" id="eventPaymentDue" class="form-control col-md-6 ml-3">
            </div>
            <div class="form-group col-md-12">
              <label for="eventDescription">Description</label>
              <textarea class="form-control" name="eventDescription" id="eventDescription" rows="5" ></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="eventCapacity">Capacity</label>
              <input type="text" name="eventCapacity" id="eventCapacity" class="form-control col-md-6 ml-3">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- edit event -->
<div id="modal_editEvent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editeventlabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form class="form-material" method="post" name="editEvent">
        <div class="modal-body">
          <div class="row">
            <input type="hidden" name="hidden_eventid" id="hidden_eventid">
            <div class="form-group col-md-12">
              <label for="edit_eventName">Event Name</label>
              <input type="text" class="form-control" name="edit_eventName" id="edit_eventName" >
            </div>
            <div class="form-group col-md-12">
              <label for="edit_eventLocation">Event Location</label>
              <input type="text" class="form-control" name="edit_eventLocation" id="edit_eventLocation">
            </div>
            <div class="form-group col-md-6">
              <label for="edit_eventDateStart">Event Date Start</label>
              <input type="date" name="edit_eventDateStart" id="edit_eventDateStart" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="edit_eventDateEnd">Event Date End</label>
              <input type="date" name="edit_eventDateEnd" id="edit_eventDateEnd" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="edit_eventTimeStart">Event Time Start</label>
              <input type="time" name="edit_eventTimeStart" id="edit_eventTimeStart" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="edit_eventTimeEnd">Event Time Start</label>
              <input type="time" name="edit_eventTimeEnd" id="edit_eventTimeEnd" class="form-control">
            </div>
            <div class="form-group">
              <label for="edit_eventPaymentDue">Payment Due</label>
              <input type="date" name="edit_eventPaymentDue" id="edit_eventPaymentDue" class="form-control col-md-6 ml-3">
            </div>
            <div class="form-group col-md-12">
              <label for="edit_eventDescription">Description</label>
              <textarea class="form-control" name="edit_eventDescription" id="edit_eventDescription" rows="5" ></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="edit_eventCapacity">Capacity</label>
              <input type="text" name="edit_eventCapacity" id="edit_eventCapacity" class="form-control col-md-6 ml-3">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="../assets/node_modules/popper/popper.min.js"></script>
<script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!-- Sweet-Alert  -->
<script src="../assets/node_modules/sweetalert/sweetalert.min.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="../assets/node_modules/raphael/raphael-min.js"></script>
<script src="../assets/node_modules/morrisjs/morris.min.js"></script>
<script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- jQuery peity -->
<script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
<script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
<script src="dist/js/dashboard1.js"></script>
<script src="event.js"></script>
</body>

</html>
