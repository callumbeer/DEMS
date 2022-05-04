// function delete_row(row, contWithmethod) {
//     debugger;
//     var box = $("#mb-remove-row");
//     box.addClass("open");
//     box.find(".mb-control-yes").on("click", function () {
//         box.removeClass("open");
//         $("#" + row).hide("slow", function () {
//             (this).remove();
//             $.ajax({
//                 type: 'post',
//                 // url: base_url.concat(contWithmethod),
//                 url:"<?php echo base_url()?>contWithmethod",
//                 data: { 'id': row },
//                 success: function (response) {
//                     if (response == '1') {
//                       alert('Deleted'); 
//                     }
//                 }
//             });
//         });
//     });
// }
function delete_row(id) {
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({    
                         url: 'delete_user/'+id,
                         type: 'POST',
                         error: function() {
                            alert('Something is wrong');
                         },
                         success: function(data) {
                              $("#"+id).remove();
                               window.location.href = 'http://localhost/dems/user/view_user';
                               alert('Deleted successfully')
                                 }  
                });  
           }  
           else  
           {  
                return false;       
           }  
      } 
