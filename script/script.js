'use strict';
function drop(){
var page = $('select[name ="grad"]').val();
    $.ajax({
        type: "POST",
        url: "config/table.php?ajax",
        data:{grad: page},
        success: function(data){
            $("#ajax_reciver").html(data);
        }
    })
 }
 
 function chick(){
     if($('input[type=checkbox]:checked').length >= 2){
         alert("победил");
     }
 }