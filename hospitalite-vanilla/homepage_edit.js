$(document).ready(function(){
  edit();
  save();

function edit(){
    $('#editmodal').on('show.bs.modal', function(e) {

      var rowid = $(e.relatedTarget).data('id');
      alert(rowid);
      $.ajax({
        type: "POST",
        url: 'fetch_content.php',
        data: 'rowid=' + rowid,
        dataType: "json",
        success: function(data){
          $('#description').val(data.txtDescription);
          $('#contentid').val(data.intHomeContentId)
        }
      });
    });
  }

  function save(){
    $("form[name = 'editdescription' ]").submit(function(e){
      e.preventDefault();
      var confirm_input = confirm("Are you sure?");
      var formdata = $(this).serialize();
      console.log(formdata);
        if(confirm_input == true)
        {
          $.ajax({
            url: "edit_content.php",
            method: "POST",
            data: {formdata : formdata},
            success:function(data){
              console.log(data);
              if (data == '1')
              {
                alert("Edit Successful");
                $('#editmodal').modal('hide');
                $("#editmodal .modal-body input").val("");
                window.location.href = "homepage.php";

              }
              else if(data == '2')
              {
                alert("Edit Unsuccessful");
              }
            }
          });
        }else{
          return false;
          alert("Confirmation cancelled");
        }

    });
  }

});
