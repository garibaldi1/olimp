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
     var page = $("input:checkbox").val();
     page = parseInt(page);
     page = page;
     alert (page);
 }