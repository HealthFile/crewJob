$(document).ready(function(){
   $('body').on('click', '.delete', function(){
       var del_id = $(this).data('delete-pimage');
       $.ajax({
               method: "POST",
               dataType: "json",
               url: base_url + "projects/delete-file",
                data: {
                    id: del_id
                }
           })
           .done(function( data ) {
               console.log(data);
           });
   });
});