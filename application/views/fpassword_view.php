<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div class="border">
      <h1>Забравена парола</h1>
      <h4>Въведете e-mail адреса с който сте се регистрирали и ще изпратим новата Ви парола на него.</h4><br/>
      <form action="fpassword/new_password" class="row" style="margin-top: 20px;">
        <div class="col-md-6 col-md-offset-3">
          <table id="tbl-user" class="table table-bordered">
            <tr class="form-group">
              <td><span class="control-label">E-mail</span></td>
              <td>
                <input type="text" id="email" name="email" class="form-control"/>
                <span class="help-block">Невалиден e-mail!</span>
                <span class="label label-danger warning busy_mail">Няма регистриран потребител с този e-mail!</span>
              </td>
            </tr>
          </table>
          <button id="btn_fpas" type="submit" class="btn btn-primary btn-block">Изпрати ми нова парола</button>
          <div id="sfpass" class="alert alert-success">Паролата е изпратена успешно.</div>
        </div>
      </form>
    </div>

