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
    $('#add-new-directormodal').on("hidden.bs.modal", function(){
      $('input').val("");
    });
  
    //add new hospital
    $("form[name='add-new-hospital']").on("submit", function(e){
      e.preventDefault();
      var formdata = $("form[name='add-new-hospital']").serialize();
      console.log(formdata);
  
      $.ajax({
        method: "POST",
        url: "add_newhospital.php",
        data: {formdata,formdata},
        success: function (data){
          if (data == '1'){
            swal({
              title: "",
              text: "Hospital Added!",
              icon: "success",
              buttons:{text:"Okay"},
            })
            .then((willApprove) => {
              if (willApprove) {
                $('#add-new-hospital').modal('hide');
                $('#add-new-hospitalmodal .modal-body input').val("");
                window.location.href = "hospital.php";
              }
            });
          }
          else if (data == '2'){
            swal({
              title: "",
              text: "Hospital already exists!",
              icon: "warning",
              buttons:{text:"Okay"},
            })
            .then((willApprove) => {
              if (willApprove){
                window.location.href = "hospital.php";
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
  
  
    //when edit director modal is shown
    $('#modal_editHospital').on('show.bs.modal', function(e){
      var hospitalid = $(e.relatedTarget).data('id');
      
      console.log(hospitalid);
      $.ajax({
        type: "POST",
        url: "fetch_hospitaldetails.php",
        data: "hospitalid=" + hospitalid,
        dataType: "json",
        success: function(data){
          $('#hidden_hospitalid').val(data.intHospitalId);
          $('#edit_hospitalName').val(data.strHospitalName);
          $('#edit_hospitalDirector').val(data.intDirectorId);
          $('#edit_hospitalAddress').val(data.strHospitalAddress);
        }
      });
    });
  
    //save edited hospital
    $("form[name='editHospital']").on("submit", function(e){
      e.preventDefault();
      var formdata = $("form[name='editHospital']").serialize();
      console.log(formdata);
  
      $.ajax({
        method: "POST",
        url: "save_editedhospital.php",
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
                $('#modal_editHospital').modal('hide');
                window.location.href = "hospital.php";
              }
            });
          }
        }
      });
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