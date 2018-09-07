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
  
    //add new director
    $("form[name='add-new-director']").on("submit", function(e){
      e.preventDefault();
      var formdata = $("form[name='add-new-director']").serialize();
      console.log(formdata);
  
      $.ajax({
        method: "POST",
        url: "add_newdirector.php",
        data: {formdata,formdata},
        success: function (data){
          if (data == '1'){
            swal({
              title: "",
              text: "Director Added!",
              icon: "success",
              buttons:{text:"Okay"},
            })
            .then((willApprove) => {
              if (willApprove) {
                $('#add-new-director').modal('hide');
                $('#add-new-directormodal .modal-body input').val("");
                window.location.href = "Director.php";
              }
            });
          }
          else if (data == '2'){
            swal({
              title: "",
              text: "Director already exists!",
              icon: "warning",
              buttons:{text:"Okay"},
            })
            .then((willApprove) => {
              if (willApprove){
                window.location.href = "Director.php";
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
    $('#modal_editDirector').on('show.bs.modal', function(e){
      var directorid = $(e.relatedTarget).data('id');
      console.log(directorid);
      $.ajax({
        type: "POST",
        url: "fetch_directordetails.php",
        data: "directorid=" + directorid,
        dataType: "json",
        success: function(data){
          $('#hidden_directorid').val(data.intDirectorId);
          $('#edit_directorFirstName').val(data.strDirectorFirstName);
          $('#edit_directorMiddleName').val(data.strDirectorMiddleName);
          $('#edit_directorLastName').val(data.strDirectorLastName);
          $('#edit_directorContact').val(data.strDirectorContact);
        }
      });
    });
  
    //save edited event
    $("form[name='editDirector']").on("submit", function(e){
      e.preventDefault();
      var formdata = $("form[name='editDirector']").serialize();
      console.log(formdata);
  
      $.ajax({
        method: "POST",
        url: "save_editeddirector.php",
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
                $('#modal_editDirector').modal('hide');
                window.location.href = "Director.php";
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