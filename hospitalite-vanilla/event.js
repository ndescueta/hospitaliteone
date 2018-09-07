$(document).ready(function(){

    fetch_events();

    function fetch_events(){
        $.ajax({
            url: "fetch_events.php",
            success: function (data){
                $('#events').html(data);
            }
        });
    }

   //clear fields on modal close
   $('#add-new-event').on("hidden.bs.modal", function(){
     $('input').val("");
   });

   //add new event
   $("form[name='add-new-event']").on("submit", function(e){
     e.preventDefault();
     var formdata = $("form[name='add-new-event']").serialize();
     console.log(formdata);

     $.ajax({
       method: "POST",
       url: ""
     })
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
