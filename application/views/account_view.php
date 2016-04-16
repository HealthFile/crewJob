<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="modal" id="usage_modal" tabindex="-1" role="dialog" aria-labelledby="usage" aria-hidden="true">
      <div class="modal-dialog1 container">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-title-logo" style="margin: -10px 0; height: 40px">&nbsp</h4>
          </div>
          <div class="modal-body">
<?php  // $this->load->view('usage_view'); ?>
          </div>
          <div style="border-top: 1px solid #DDD; padding: 25px 0">
            <center>
              <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="border">
      <h1>Нов потребител</h1>
      <form action="account/add_user" class="row" style="margin-top: 20px;">
        <div class="col-md-6">
          <table id="tbl-user" class="table table-bordered">
            <tr class="form-group">
              <td style="width: 100px;"><span class="required">*</span><span class="control-label">E-mail</span></td>
              <td>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>"/>
                <span class="help-block">Невалиден e-mail!</span>
                <span class="label label-danger warning busy_mail">Вече има регистриран потребител с този e-mail!</span>
              </td>
            </tr>
            <tr class="form-group">
              <td><span class="required">*</span><span class="control-label">Парола</span></td>
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
            <tr class="form-group" style="height: 48px;">
                <td colspan="2" style="padding: 0 8px; vertical-align: middle">
                <span class="required">*</span><span class="control-label">Прочетох и съм съгласен с </span>
                <a data-toggle="modal" data-target="#usage_modal" style="cursor: pointer"><b>условията за ползване</b></a>
                <input type="checkbox" name="agree" id="agree"><br/>
                <span class="help-block">Трябва да сте съгласни с условията за ползване!</span>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-xs-12"><button type="submit" class="btn btn-primary">Готово</button></div>
      </form>
    </div>

