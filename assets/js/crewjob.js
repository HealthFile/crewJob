function json_sbm(url,data){
  $('.has-error').removeClass('has-error');
  $('.help-block, .busy_mail, #no_option').fadeOut(500);
  $('#btn_fpas').attr('disabled','disabled');
//  alert(url);
//  alert(data);
  $.ajax({
    type : "POST",
    dataType:'json',
    url: url,
    data: data,
    cache : false,
    async: false,
    contentType: false,
    processData: false,
    success: function(response){
//      alert(response);
      if (response.message != undefined) { alert(response.message); }
      if (response.redirect != undefined){ window.location.replace(response.redirect); }
      if (response.reload != undefined){ location.reload(); }
      if (response.new_link != undefined){
        $('#list_link').append('<tr data-link_id="'+response.new_link+'"><td style="padding: 3px 30px 3px 0"><a href="'+
                               $('#link').val()+'" target="_blank" class="input-link" style="color: #00F">'+$('#link_note').val()+
                               '</a></td><td><a class="btn-main form-btn-main delete-btn delete_link">Изтрии</a></td></tr>');
        $('#link_note, #link').val('');
      }
      if (response.busy_mail != undefined) {
        $('#btn_fpas').removeAttr('disabled');
        $('.busy_mail').closest('.form-group').addClass('has-error');
        $('.busy_mail').fadeIn(2000);
      }
      if (response.errors != undefined){
        $('#btn_fpas').removeAttr('disabled');
        for (var i=0;i<response.errors.length;i++){
          var el_parent=$('#'+response.errors[i]).closest('.form-group');
          el_parent.addClass('has-error');
          $('.help-block',el_parent).fadeIn(1000);
        }
      }
      if (response.login != undefined) { 
        $('#login').html(response.login);
        location.reload();
      }
      if (response.no_user != undefined) {
        $('#go_login').addClass('open');
        $('#no_user').fadeIn('slow').delay(1500).fadeOut('slow');
      }
      if (response.fpassword != undefined) {
        $('#btn_fpas').hide();
        $('#sfpass').fadeIn(2000);
      }
    }
  });
}
$('body').on('submit','form',function(){
  if ($(this).is("[action]")){
    var formData = new FormData($(this)[0]);
    json_sbm($(this).attr("action"),formData);
    return false;
  }
});


