$(function() {



 $("#wpforms-form-282").on("submit", function(e) {

     e.preventDefault();

     let name = $("#wpforms-282-field_0").val();
     let lastName = $("#wpforms-282-field_0-last").val();
     let email = $("#wpforms-282-field_1").val();
     let comments = $("#wpforms-282-field_2").val();

     let fields = {
         name,
         lastName,
         email,
         comments
     };

     let not_filled_fields = [];

     for(let i in fields) {
        if(fields[i] == undefined || fields[i].length == 0) {
            not_filled_fields.push(i);
        }
     }

     if(not_filled_fields.length >= 1) {
         alert(`You forgot to fill the field ${not_filled_fields.join(', ')}. Please fill it before continuing.`);
     }

 });



});

