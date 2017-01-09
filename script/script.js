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
 

 
var f = function(event){

    
    var target = event.target;
    var id = target.getAttribute("id");
    if ( !id ) return;
    
    var array = id.split('-');
    if (array.length != 3) return;
    console.log('table: ' + array[1] + " checkbox: " + array[2]);
};
 