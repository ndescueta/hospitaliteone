$(document).ready(function(){

  //clear fields on modal close
  $('#add-new-servicemodal').on("hidden.bs.modal", function(){
    $('input').val("");
  });

  $("addNewService").on("click", function(e){
      var hospid = $(this).attr("id");
      console.log(hospid);
  });
  //add new service

  $("form[name='add-new-service']").on("submit", function(e){
    e.preventDefault();
    var formdata = $("form[name='add-new-service']").serialize();
    console.log(formdata);

    $.ajax({
      method: "POST",
      url: "servicesAction/add_services.php",
      data: {formdata,formdata},
      success: function (data){
        if (data == '1'){
          swal({
            title: "",
            text: "Service Added!",
            icon: "success",
            buttons:{text:"Okay"},
          })
          .then((willApprove) => {
            if (willApprove) {
              $('#add-new-service').modal('hide');
              $('#add-new-servicemodal .modal-body input').val("");
              window.location.href = "servicesOffered.php";
            }
          });
        }
        else if (data == '2'){
          swal({
            title: "",
            text: "Service already exists!",
            icon: "warning",
            buttons:{text:"Okay"},
          })
          .then((willApprove) => {
            if (willApprove){
              window.location.href = "servicesOffered.php";
            }
          });
        }
        else if (data == '3'){
          swal({
            title: "",
            text: "Please fill out all the fields",
            icon: "error",
            buttons:{text:"Okay"},
          })
          .then ((willApprove) => {
            if (willApprove) {

            }
          });
        }
      }
    });
  });

  $('.event_row').click(function(){
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

  //when edit event modal is shown
  $('#modal_editEvent').on('show.bs.modal', function(e){
    var eventid = $(e.relatedTarget).data('id');
    console.log(eventid)
    $.ajax({
      type: "POST",
      url: "fetch_eventdetails.php",
      data: "eventid=" + eventid,
      dataType: "json",
      success: function(data){
        $('#hidden_eventid').val(data.intEventId);
        $('#edit_eventName').val(data.strEventName);
        $('#edit_eventLocation').val(data.txtEventLocation);
        $('#edit_eventDateStart').val(data.datDateStart);
        $('#edit_eventDateEnd').val(data.datDateEnd);
        $('#edit_eventTimeStart').val(data.timTimeStart);
        $('#edit_eventTimeEnd').val(data.timTimeEnd);
        $('#edit_eventDescription').val(data.txtEventDesc);
        $('#edit_eventCapacity').val(data.intEventCapacity);
        $('#edit_eventPaymentDue').val(data.datPaymentDue);
      }
    });
  });

  //save edited event
  $("form[name='editEvent']").on("submit", function(e){
    e.preventDefault();
    var formdata = $("form[name='editEvent']").serialize();
    console.log(formdata);

    $.ajax({
      method: "POST",
      url: "save_editedevent.php",
      data: {formdata,formdata},
      success: function(data){
        if (data == '1'){
          swal({
            title: "",
            text: "Edit successful!",
            icon: "success",
            buttons:{text:"Okay"}
          })
          .then((willApprove) => {
            if (willApprove) {
              $('#modal_editEvent').modal('hide');
              window.location.href = "Trainings.php";
            }
          });
        }
      }
    });
  });
});
