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
 
// function chick(){
//     if($('input[type=checkbox]:checked').length >= 2){
//         alert("победил");
//     }
// }
 
var f = function(){
    while($('input[type=checkbox]:checked').length >= 2){
    this.x = true;
    alert(x);
    break;
}
    (function(){
        //this.x = $('input[type=checkbox]:checked').lenght;
    })();
};
 