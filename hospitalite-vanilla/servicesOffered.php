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
  <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
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
  <style>
  /* XL MODAL HACK */
  @media (min-width: 768px) {
  .modal-xl {
    width: 90%;
   max-width:1200px;
  }
}
  </style>
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
  <!-- ======================================================== -->
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
          <!-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
          <ul aria-expanded="false" class="collapse">
          <li><a href="app-email.html">Mailbox</a></li>
          <li><a href="app-email-detail.html">Mailbox Detail</a></li>
          <li><a href="app-compose.html">Compose Mail</a></li>
        </ul>
      </li>
      <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
      <ul aria-expanded="false" class="collapse">
      <li><a href="ui-cards.html">Cards</a></li>
      <li><a href="ui-user-card.html">User Cards</a></li>
      <li><a href="ui-buttons.html">Buttons</a></li>
      <li><a href="ui-modals.html">Modals</a></li>
      <li><a href="ui-tab.html">Tab</a></li>
      <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
      <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
      <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
      <li><a href="ui-notification.html">Notification</a></li>
      <li><a href="ui-progressbar.html">Progressbar</a></li>
      <li><a href="ui-nestable.html">Nestable</a></li>
      <li><a href="ui-range-slider.html">Range slider</a></li>
      <li><a href="ui-timeline.html">Timeline</a></li>
      <li><a href="ui-typography.html">Typography</a></li>
      <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
      <li><a href="ui-session-timeout.html">Session Timeout</a></li>
      <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
      <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
      <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
      <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
      <li><a href="ui-list-media.html">List Media</a></li>
      <li><a href="ui-ribbons.html">Ribbons</a></li>
      <li><a href="ui-grid.html">Grid</a></li>
      <li><a href="ui-carousel.html">Carousel</a></li>
      <li><a href="ui-date-paginator.html">Date-paginator</a></li>
      <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
    </ul>
  </li>
  <li class="nav-small-cap">--- PROFESSIONAL</li>
  <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-calendar"></i><span class="hide-menu">Appointment</span></a>
  <ul aria-expanded="false" class="collapse">
  <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
  <li><a href="book-appointment.html">Book Appointment</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user-md"></i><span class="hide-menu">Doctors</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="doctors.html">All Doctors</a></li>
<li><a href="add-doctor.html">Add Doctor</a></li>
<li><a href="edit-doctor.html">Edit Doctor</a></li>
<li><a href="doctor-profile.html">Doctor Profile</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Patients</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="patients.html">All Patients</a></li>
<li><a href="add-patient.html">Add Patients</a></li>
<li><a href="edit-patient.html">Edit Patients</a></li>
<li><a href="patient-profile.html">Patient Profile</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Reports</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="payment-report.html">Payment Report</a></li>
<li><a href="income-report.html">Income Report</a></li>
<li><a href="sales-report.html">Sales Report</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-rupee-sign"></i><span class="hide-menu">Payments</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="payments.html">Payments</a></li>
<li><a href="add-payments.html">Add Payment</a></li>
<li><a href="patient-invoice.html">Invoice</a></li>
</ul>
</li>
<li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="form-basic.html">Basic Forms</a></li>
<li><a href="form-layout.html">Form Layouts</a></li>
<li><a href="form-addons.html">Form Addons</a></li>
<li><a href="form-material.html">Form Material</a></li>
<li><a href="form-float-input.html">Floating Lable</a></li>
<li><a href="form-pickers.html">Form Pickers</a></li>
<li><a href="form-upload.html">File Upload</a></li>
<li><a href="form-mask.html">Form Mask</a></li>
<li><a href="form-validation.html">Form Validation</a></li>
<li><a href="form-dropzone.html">File Dropzone</a></li>
<li><a href="form-icheck.html">Icheck control</a></li>
<li><a href="form-img-cropper.html">Image Cropper</a></li>
<li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
<li><a href="form-typehead.html">Form Typehead</a></li>
<li><a href="form-wizard.html">Form Wizard</a></li>
<li><a href="form-xeditable.html">Xeditable Editor</a></li>
<li><a href="form-summernote.html">Summernote Editor</a></li>
<li><a href="form-tinymce.html">Tinymce Editor</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="table-basic.html">Basic Tables</a></li>
<li><a href="table-layout.html">Table Layouts</a></li>
<li><a href="table-data-table.html">Data Tables</a></li>
<li><a href="table-footable.html">Footable</a></li>
<li><a href="table-jsgrid.html">Js Grid Table</a></li>
<li><a href="table-responsive.html">Responsive Table</a></li>
<li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
<li><a href="table-editable-table.html">Editable Table</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="widget-data.html">Data Widgets</a></li>
<li><a href="widget-apps.html">Apps Widgets</a></li>
<li><a href="widget-charts.html">Charts Widgets</a></li>
</ul>
</li>
<li class="nav-small-cap">--- EXTRA COMPONENTS</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="layout-single-column.html">1 Column</a></li>
<li><a href="layout-fix-header.html">Fix header</a></li>
<li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
<li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
<li><a href="layout-boxed.html">Boxed Layout</a></li>
<li><a href="layout-logo-center.html">Logo in Center</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge badge-pill badge-info">25</span></span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="starter-kit.html">Starter Kit</a></li>
<li><a href="pages-blank.html">Blank page</a></li>
<li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="pages-login.html">Login 1</a></li>
<li><a href="pages-login-2.html">Login 2</a></li>
<li><a href="pages-register.html">Register</a></li>
<li><a href="pages-register2.html">Register 2</a></li>
<li><a href="pages-register3.html">Register 3</a></li>
<li><a href="pages-lockscreen.html">Lockscreen</a></li>
<li><a href="pages-recover-password.html">Recover password</a></li>
</ul>
</li>
<li><a href="pages-profile.html">Profile page</a></li>
<li><a href="pages-animation.html">Animation</a></li>
<li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
<li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
<li><a href="pages-invoice.html">Invoice</a></li>
<li><a href="pages-treeview.html">Treeview</a></li>
<li><a href="pages-utility-classes.html">Helper Classes</a></li>
<li><a href="pages-search-result.html">Search result</a></li>
<li><a href="pages-scroll.html">Scrollbar</a></li>
<li><a href="pages-pricing.html">Pricing</a></li>
<li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
<li><a href="pages-gallery.html">Gallery</a></li>
<li><a href="pages-faq.html">Faqs</a></li>
<li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
<ul aria-expanded="false" class="collapse">
<li><a href="pages-error-400.html">400</a></li>
<li><a href="pages-error-403.html">403</a></li>
<li><a href="pages-error-404.html">404</a></li>
<li><a href="pages-error-500.html">500</a></li>
<li><a href="pages-error-503.html">503</a></li>
</ul>
</li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="chart-morris.html">Morris Chart</a></li>
<li><a href="chart-chartist.html">Chartis Chart</a></li>
<li><a href="chart-echart.html">Echarts</a></li>
<li><a href="chart-flot.html">Flot Chart</a></li>
<li><a href="chart-knob.html">Knob Chart</a></li>
<li><a href="chart-chart-js.html">Chartjs</a></li>
<li><a href="chart-sparkline.html">Sparkline Chart</a></li>
<li><a href="chart-extra-chart.html">Extra chart</a></li>
<li><a href="chart-peity.html">Peity Charts</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="icon-material.html">Material Icons</a></li>
<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
<li><a href="icon-themify.html">Themify Icons</a></li>
<li><a href="icon-weather.html">Weather Icons</a></li>
<li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
<li><a href="icon-flag.html">Flag Icons</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="map-google.html">Google Maps</a></li>
<li><a href="map-vector.html">Vector Maps</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="javascript:void(0)">item 1.1</a></li>
<li><a href="javascript:void(0)">item 1.2</a></li>
<li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
<ul aria-expanded="false" class="collapse">
<li><a href="javascript:void(0)">item 1.3.1</a></li>
<li><a href="javascript:void(0)">item 1.3.2</a></li>
<li><a href="javascript:void(0)">item 1.3.3</a></li>
<li><a href="javascript:void(0)">item 1.3.4</a></li>
</ul>
</li>
<li><a href="javascript:void(0)">item 1.4</a></li>
</ul>
</li>
<li class="nav-small-cap">--- SUPPORT</li>
<li>
<a class="waves-effect waves-dark" href="documentation/documentation.html" aria-expanded="false">
<i class="far fa-circle text-danger"></i>
<span class="hide-menu">Documentation</span>
</a>
</li>
<li>
<a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
<i class="far fa-circle text-success"></i>
<span class="hide-menu">Log Out</span>
</a>
</li>
<li>
<a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false">
<i class="far fa-circle text-info"></i>
<span class="hide-menu">FAQs</span>
</a>
</li> -->
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
        <h4 class="text-themecolor">Services Offered</h4>
      </div>
    </div>
    <!-- //////////////////////////////Content -->
    <div class="card">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-body">
            <h4 class="card-title m-t-10">Hospitals</h4>
            <div class="row">
              <div class="col-md-12">
                <!-- events table -->

                <div id="hospitals">
                  <?php
                  include("connections.php");

                  $fetch_services = mysqli_query($connections, "SELECT TH.intHospitalId, TH.strHospitalName FROM tblhospital AS TH JOIN tblservices AS TS ON TS.intHospitalId = TH.intHospitalId GROUP BY TS.intHospitalId");

                  if (mysqli_num_rows($fetch_services) > 0 ){

                      while ($row = mysqli_fetch_assoc($fetch_services)){

                        $intID = $row["intHospitalId"];
                        $strHospName = $row["strHospitalName"];

                      ?>

                         <button style="border-radius: 2px;
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
                                        text-align: center;"
                                         type="button"
                                        id=<?php echo $intID;?>
                                        data-id=<?php echo $intID;?>
                                        data-toggle='modal'
                                        data-target='#edit-services'
                                        >
                                     <?php echo $strHospName;?>
                         </button>



                      <?php }
                    // $output .= "</table>";
                    // echo $output;
                  }
                  ?>
                </div>


              </div>
            </div>
          </div>
        </div>
        <!-- EVENT DESCRIPTION -->

      </div>
    </div>
  </div>
</div>
<footer class="footer">
  © 2018 Eliteadmin by themedesigner.in
</footer>
</div>
<!-- modal declarations -->

<!-- view-services modal -->
<div id="edit-services" name="edit-services" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addneweventlabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Services Offered</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form class='form-group form-material p-2' method="post" name="edit-services">
        <div class="modal-body">

          <div class="row">

            <div class="col-md-6">

              <div class="row">
                <div id="services">
                  <?php
                  include("connections.php");

                  $fetch_events = mysqli_query($connections, "SELECT TS.intServiceId, TS.strServiceName, TS.txtServiceDescription, TS.intHospitalId FROM tblservices AS TS JOIN tblhospital AS TH ON TS.intHospitalId = TH.intHospitalId ");
                  if (mysqli_num_rows($fetch_events) > 0 ){
                    $output = "
                    <table class='table'>
                    <thead>
                    <tr>
                    <th>Service Name</th>
                    <th>Service Description</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    ";

                    while ($row = mysqli_fetch_assoc($fetch_events)) {
                      $serviceId = $row["intServiceId"];
                      $serviceName = $row["strServiceName"];
                      $serviceDesc = $row["txtServiceDescription"];
                      $hospitalId = $row["intHospitalId"];

                      $output .= "
                      <tr class='event_row' data-id='$serviceId'>
                      <td>$serviceName</td>
                      <td>$serviceDesc</td>
                      <td><button type='button' class='btn btn-success btn_editEvent' id=$serviceId data-id=$serviceId data-toggle='modal' data-target='#modal_editEvent'><i class='fas fa-edit'></i> Edit</button></td>
                      </tr>
                      ";
                    }
                    $output .= "</table>";
                    echo $output;
                  }
                  ?>
                </div>
                <!-- Add Events -->
                <a href="#" id="<?php echo $hospitalId; ?>" name="addNewService" data-toggle="modal" data-target="#add-new-service" class="btn m-t-10 btn-info btn-block waves-effect waves-light">
                  <i class="ti-plus"></i> Add New Services
                </a>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="modal-footer">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- add services modal -->
<div id="add-new-service" name="add-new-service" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addneweventlabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Service</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form class='form-group form-material p-2' method="post" name="add-new-service">
        <div class="modal-body">
        <div class="row">
        <div class="col-md-6">
        <div class="row">
            <div class="form-group col-md-12">
              <input type="hidden" name="hidden_hospitalId" id="hidden_hospitalId">
              <label for="serviceName">Service Name</label>
              <input type="text" class="form-control" name="serviceName" id="serviceName" >
            </div>
            <div class="form-group col-md-12">
              <label for="serviceDescription">Description</label>
              <textarea class="form-control" name="serviceDescription" id="serviceDescription" rows="5" ></textarea>
            </div>

          </div>
        </div>
        <div class="col-md-6">

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

<!-- edit services modal-->
<div id="modal_editEvent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editeventlabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form class="form-material" method="post" name="editEvent">
        <div class="modal-body">
        <div class="row">
        <div class="col-md-6">
        <div class="row">
            <input type="hidden" name="hidden_eventid" id="hidden_eventid">
            <div class="form-group col-md-12">
              <label for="edit_serviceName">Service Name</label>
              <input type="text" class="form-control" name="edit_serviceName" id="edit_serviceName" >
            </div>
            <div class="form-group col-md-12">
              <label for="edit_serviceDescription">Description</label>
              <textarea class="form-control" name="edit_serviceDescription" id="edit_serviceDescription" rows="5" ></textarea>
            </div>

          </div>
        </div>
        <div class="col-md-6">
        <div class="row">

        </div>
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
<script src="servicesJS/serviceJS.js"></script>
</body>

</html>
