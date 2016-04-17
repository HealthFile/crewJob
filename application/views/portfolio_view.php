<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  $g0=$g1=$g2='';
  if ($user['gender']==0) { $g0=' checked'; }
  if ($user['gender']==1) { $g1=' checked'; }
  if ($user['gender']==2) { $g2=' checked'; }
  if ($user['date_of_birth']){ $birth=date('d-m-Y',strtotime($user['date_of_birth'])); }
  else{ $birth=''; }
?>
    <div class="border">
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#tab1">Лични данни</a></li>
      <li role="presentation"><a href="#tab2">Категории</a></li>
      <li role="presentation"><a href="#tab3">Линкове</a></li>
      <li role="presentation"><a href="#tab4">Файлове</a></li>
      <li role="presentation"><a href="#tab5">Смени парола</a></li>
    </ul>
    <div class="tab-content">    
      <form action="portfolio/user_data" class="tab-pane fade in active" id="tab1" >
        <div class="col-md-6 col-md-offset-3">
          <h1>Лични данни</h1> 
          <table id="tbl-user" class="table table-bordered">
            <tr class="form-group">
              <td>Име</td>
              <td>
                  <input type="text" name="usr_name" id="usr_name" class="form-control" value="<?php echo htmlspecialchars($user['user_name']); ?>">
                <span class="help-block">Въведете име!</span>
              </td>
            </tr>
            <tr class="form-group">
              <td>Пол</td>
              <td>
                <input type="radio" name="gender" value="0"<?php echo $g0; ?>> Мъж &nbsp; &nbsp;
                <input type="radio" name="gender" value="1"<?php echo $g1; ?>> Жена &nbsp; &nbsp;
                <input type="radio" name="gender" value="2"<?php echo $g2; ?>> Фирма / организация
                <span class="help-block">Въведете име!</span>
              </td>
            </tr>
            <tr class="form-group">
              <td>Дата на раждане</td>
              <td>
                <input type="text" name="birth_date" id="birth_date" class="form-control" readonly value="<?php echo $birth; ?>">
                <span class="help-block">Въведете дата!</span>
              </td>
            </tr>
            <tr class="form-group">
              <td colspan="2">
                За мен<br/>
                <textarea id="user_note" name="user_note" class="form-control" rows="10"><?php echo $user['user_note'] ?></textarea>
              </td>
            </tr>
          </table>
          <button type="submit" class="btn btn-primary  btn-block">Запиши промените</button>
        </div>
      </form>
      <form action="portfolio/add_link" class="tab-pane fade" id="tab2">  
        <div class="col-md-6 col-md-offset-3">
          <h1>Категории:</h1>
        </div>
      </form>
      <form action="portfolio/add_link" class="tab-pane fade"  id="tab3">  
        <div class="col-md-6 col-md-offset-3">
          <h1>Линкове:</h1>
          <table id="tbl-user" class="table table-bordered">
            <tr class="form-group">
              <td>Описание</td>
              <td>
                <input type="text" name="link_note" id="link_note" class="form-control">
                <span class="help-block">Въведете описание!</span>
              </td>
            </tr>
            <tr class="form-group">
              <td>Линк</td>
              <td>
                <input type="text" name="link" id="link" class="form-control">
                <span class="help-block">Въведете валиден URL!</span>
              </td>
            </tr>
          </table>
          <button type="submit" class="btn btn-success btn-block">Добави линк</button>
          <table id="list_link" class="table table-bordered">
<?php
  if ($links){
    foreach ($links as $key => $link){
      echo "          <tr data-link_id='$key'>\n";
      echo "            <td><a href='$link[link]' target='_blank'>$link[link_note]</a></td>\n";
      echo "            <td><a class='btn btn-danger delete_link'>Изтрии</a></td>\n";
      echo "          </tr>\n";
    }
  }
?>
          </table>
        </div>  
      </form>
      <form action="portfolio/add_file" class="tab-pane fade"  id="tab4" enctype="multipart/form-data">  
        <div class="col-md-6 col-md-offset-3">
          <h1>Файлове:</h1>
          <div id="browse" class="input-group">
                
                <span class="input-group-addon btn btn-primary btn-file">
                  <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp; Добави Файл
                </span>
              </div>
              <input type="file" name="file" id="file" accept="bin/*.bin" onChange="upload();" style="display:none;">
              <br/>
          <table id="list_files" class="table table-bordered">
<?php
  if ($files){
    foreach ($files as $key => $file){
      echo "          <tr data-file_id='$key'>\n";
      echo "            <td>$file</td>\n";
      echo "            <td><a class='btn btn-danger delete_file'>Изтрии</a></td>\n";
      echo "          </tr>\n";
    }
  }
?>
          </table>
        </div>  
      </form>
      <form action="portfolio/change_pass" class="tab-pane fade" id="tab5" >
        <div class="col-md-6 col-md-offset-3">
          <h1>Смени парола</h1>
          <table id="tbl-user" class="table table-bordered">
            <tr class="form-group">
              <td><span class="required">*</span><span class="control-label">Нова парола</span></td>
              <td>
                <input type="password" name="password" id="password" class="form-control">
                <span class="help-block">Поне 4 символа!</span>
              </td>
            </tr>
            <tr class="form-group">
              <td><span class="required">*</span><span class="control-label">Повторете паролата</span></td>
              <td style="width: 65%">
                <input type="password" name="cpass" id="cpass" class="form-control">
                <span class="help-block">Повторената парола не съвпада!</span>
              </td>
            </tr>
          </table>
          <button type="submit" class="btn btn-primary  btn-block">Смени паролата</button>
        </div>
      </form>
    </div>
    </div>
    <link rel="stylesheet" href="assets/bootstrap-datepicker/css/bootstrap-datepicker3.css">
    <script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/bootstrap-datepicker/locales/bootstrap-datepicker.bg.min.js" charset="UTF-8"></script>
    <script>
      $('#birth_date').datepicker({
        format: "dd-mm-yyyy",
        weekStart: 1,
        language: "bg",
        autoclose: true,
        todayHighlight: true,
        daysOfWeekHighlighted: "0,6",
        endDate: "<?php echo date('d-m-Y'); ?>"
      });
      $('body').on('click','.delete_link', function(){
        var id=$(this).closest('tr').data('link_id');
        $.ajax({
          type: 'POST',
          dataType:'json',
          url: 'portfolio/delete_link',
          data: 'link_id='+id,
          cache: false,
          success: function(response){
            if (response.success) { $('tr').filter('[data-link_id="'+id+'"]').remove(); }
          }
        });
      });
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
      $('.btn-file').click(function(){ $('#file').click(); });
      function upload(){
        var data=new FormData($('#tab4')[0]);
        $.ajax({
          type: 'POST',
          url: 'portfolio/add_file',
          data: data,
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          success: function(response) {
            if (response.success) {
              $('#list_files').append('<tr data-file_id="'+response.id_file+'"><td>'+response.filename+
                                      '</td><td><a class="btn btn-danger delete_file">Изтрии</a></td></tr>')
            }
            else { alert('Максимална големина 10 Mb'); }
          }
        });
        return false;
      }
      $('body').on('click','.delete_file', function(){
        var id=$(this).closest('tr').data('file_id');
        $.ajax({
          type: 'POST',
          dataType:'json',
          url: 'portfolio/delete_file',
          data: 'file_id='+id,
          cache: false,
          success: function(response){
            if (response.success) { $('tr').filter('[data-file_id="'+id+'"]').remove(); }
          }
        });
      });
    </script>

