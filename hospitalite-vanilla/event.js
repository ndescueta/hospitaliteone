$(document).ready(function(){

  // fetch_events();

  // function fetch_events(){
  // $.ajax({
  //   url: "fetch_events.php",
  //   success: function (data){
  //     $('#events').html(data);
  //   }
  // });
  // }

  //clear fields on modal close
  $('#add-new-eventmodal').on("hidden.bs.modal", function(){
    $('input').val("");
  });

  //add new event
  $("form[name='add-new-event']").on("submit", function(e){
    e.preventDefault();
    var formdata = $("form[name='add-new-event']").serialize();
    console.log(formdata);

    $.ajax({
      method: "POST",
      url: "add_newevent.php",
      data: {formdata,formdata},
      success: function (data){
        if (data == '1'){
          swal({
            title: "",
            text: "Event Added!",
            icon: "success",
            buttons:{text:"Okay"},
          })
          .then((willApprove) => {
            if (willApprove) {
              $('#add-new-event').modal('hide');
              $('#add-new-eventmodal .modal-body input').val("");
              window.location.href = "Trainings.php";
            }
          });
        }
        else if (data == '2'){
          swal({
            title: "",
            text: "Event already exists!",
            icon: "warning",
            buttons:{text:"Okay"},
          })
          .then((willApprove) => {
            if (willApprove){
              window.location.href = "Trainings.php";
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

  $('.btn_editEvent').click(function(){
    var eventid = $(this).attr("data-id");
    console.log(eventid);

    
  });
});


// function viewEventDesc(id) {
//     //GET EVENT DESCRIPTION CONTAINER
//     var eventDescCont = document.getElementById("eventDescCont");
//     //CLEAR CLASSNAME
//     eventDescCont.className = "";
//     //CLEAR HTML
//     eventDescCont.innerHTML = "";
//     //QUERY
// }
