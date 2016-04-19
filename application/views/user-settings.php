<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  $g0=$g1=$g2='';
  if ($user['gender']==0) { $g0=' checked'; }
  if ($user['gender']==1) { $g1=' checked'; }
  if ($user['gender']==2) { $g2=' checked'; }
  if ($user['date_of_birth']){ $birth=date('d-m-Y',strtotime($user['date_of_birth'])); }
  else{ $birth=''; }
?>
<div>
	<div class="tabs-nav">
		<nav class="shell">
		  <ul>
				<li class="active"><a href="#tab1" class="btn-main">Лични данни</a></li>
				<li><a href="#tab2" class="btn-main">Категории</a></li>
				<li><a href="#tab3" class="btn-main">Линкове</a></li>
				<li><a href="#tab4" class="btn-main">Файлове</a></li>
				<li><a href="#tab5" class="btn-main">Смяна на парола</a></li>
			</ul>
		</nav>
	</div>

  <div class="tabs-content">
    <div class="shell">
      <form action="portfolio/user_data" class="tab tab1 active" id="tab1">
	<!--		<div id="tab1" class="tab tab1 active">  -->
        <div class="shell">
          <h2 class="tab-heading">Лични данни</h2>
            <div class="tab-form-holder">
              <input type="text" placeholder="Име " class="input-main input-spacing"
                     name="usr_name" id="usr_name" value="<?php echo htmlspecialchars($user['user_name']); ?>">
                <div class="input-spacing">
                  <span class="gender">Пол: </span>
                  <label>
                    <input name="gender" type="radio" value="0"<?php echo $g0; ?>> <span></span>Мъж
                  </label>
                  <label>
                    <input name="gender" type="radio" value="1"<?php echo $g1; ?>> <span></span>Жена
                  </label>
                  <label>
                    <input name="gender" type="radio" value="2"<?php echo $g2; ?>> <span></span>Фирма
                  </label>
                </div>
<!--                <input type="date" class="input-spacing input-main">  -->
              <input type="date" name="birth_date" id="birth_date" class="input-spacing input-main" value="<?php echo $birth; ?>" readonly>
                <textarea class="input-main textarea-main input-spacing" placeholder="Описание " id="user_note" name="user_note"><?php echo $user['user_note'] ?></textarea> 
                <div class="file input-spacing">
                  <input type="file" name="file" id="id_media" />
                  <span class="value">Upload File</span>
                  <span class="btn-value"></span>
                </div>
                <input type="submit" class="btn-main form-btn-main input-spacing">
            </div>
          </div>

				<img src="assets/img/KUB-003.png" class="box-element-5">
				<img src="assets/img/KUB-003.png" class="box-element-3">
				<img src="assets/img/KUB-004.png" class="box-element-4">
			<!--</div> -->
        </form>

			<div id="tab2" class="tab tab2">
				<div class="shell">
					<h2 class="tab-heading">Категории</h2>
                                        
                                        

					<div class="categories-boxes">
						<div class="categories-row clearfix">
							<a href="#" class="categories-box" data-id='1'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box" data-id='2'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box" data-id='3'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box" data-id='4'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>
						</div>

						<div class="categories-row clearfix">
							<a href="#" class="categories-box" data-id='5'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box" data-id='6'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box" data-id='7'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box" data-id='8'>
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>
						</div>
                                            <form action="portfolio/user_category">
                                                <input type='checkbox' id='cid1' name='category[]' value="1">
                                                <input type='checkbox' id='cid2' name='category[]' value="2">
                                                <input type='checkbox' id='cid3' name='category[]' value="3">
                                                <input type='checkbox' id='cid4' name='category[]' value="4">
                                                <input type='checkbox' id='cid5' name='category[]' value="5">
                                                <input type='checkbox' id='cid6' name='category[]' value="6">
                                                <input type='checkbox' id='cid7' name='category[]' value="7">
                                                <input type='checkbox' id='cid8' name='category[]' value="8">
                                                
						<button type='submit' class="btn-main form-btn-main input-spacing">Запази</button>
                                            </form>
					</div>
				</div>

				<img src="assets/img/KVADRATI-02.png" class="box-element-1">
			</div>

			<div id="tab3" class="tab tab3">
				<div class="shell">
					<h2 class="tab-heading">Линкове</h2>
					<form action="portfolio/add_link" class="form-add">
                                                 <div class="form-group">
						 <textarea class="input-main textarea-main textarea-link input-spacing" placeholder="Описание " name="link_note" id="link_note"></textarea> 
                                                 <span class="help-block">Въведете описание!</span>
                                                 </div><br/>
                                                 <div class="form-group">
						 <input type="text" class="input-main input-spacing" placeholder="Линк" name="link" id="link"> 
                                                 <span class="help-block">Въведете валиден URL!</span>
                                                 </div><br/>
						 <input type="submit" class="btn-main form-btn-main input-spacing" value="КАЧИ">
					</form>

					<div class="form-edit">
						<h4 class="sub-heading">Preview links</h4>
          <table id="list_link" class="">
<?php
  if ($links){
    foreach ($links as $key => $link){
      echo "          <tr data-link_id='$key'>\n";
      echo "            <td style='padding: 3px 30px 3px 0'><a href='$link[link]' target='_blank' class='input-link' style='color: #00F'>$link[link_note]</a></td>\n";
      echo "            <td><a class='btn-main form-btn-main delete-btn delete_link'>Изтрии</a>   </td>\n";
      echo "          </tr>\n";
    }
  }
?>
          </table>

<!--						<form>
							<div class="input-holder input-spacing">
								<input type="text" id="link" class="input-main input-link" value="Project 1">
								<input type="submit" value="Изтрии" class="btn-main form-btn-main delete-btn">
							</div>

							<div class="input-holder input-spacing">
								<input type="text" id="link" class="input-main input-link" value="Project 1">
								<input type="submit" value="Изтрии" class="btn-main form-btn-main delete-btn">
							</div>

							<div class="input-holder input-spacing">
								<input type="text" id="link" class="input-main input-link" value="Project 1">
								<input type="submit" value="Изтрии" class="btn-main form-btn-main delete-btn">
							</div>
						</form>
-->
					</div>
				</div>

				<img src="assets/img/KVADRATI-01.png" class="box-element-1">
			</div>

			<div id="tab4" class="tab tab4">
				<h2 class="tab-heading">Файлове</h2>

				<div class="file-cnt-holder">
					<h4 class="sub-heading">Качи файлове: </h4>
					<div class="file input-spacing">
						<input type="file1"  id="id_media" />
						<span class="value">Upload File</span>
						<span class="btn-value"></span>
					</div>
<!--		<input type="submit" class="btn-main form-btn-main file-btn" value="ДОБАВИ"> -->
            <form action="portfolio/add_file"  id="tab4a" enctype="multipart/form-data">                          
              <div id="browse1" class="input-group">
                  <a class="btn-main form-btn-main file-btn btn-file" style="">ДОБАВИ</a>
              </div>
              <input type="file" name="file" id="file" accept="bin/*.bin" onChange="upload();" style="display:none;">
            </form>
              <br/>
                                        
                                        
                                        
				</div>

				<div class="uploaded-files-cnt">
					<h4 class="sub-heading">Качени файлове: </h4>
<!--					<div class="uploaded-files-boxes">
						<div class="uploaded-file-box">
							<a href="#" class="file-box"></a>
							<h4>Word doc...</h4>
						</div>  -->

						
					</div>
        <table id="list_files" class="">
<?php
  if ($files){
    foreach ($files as $key => $file){
      echo "          <tr data-file_id='$key'>\n";
      echo "            <td style='padding: 12px 30px 12px 0'>$file</td>\n";
      echo "            <td><a class='btn-main form-btn-main delete-btn delete_file'>Изтрии</a>   </td>\n";
      echo "          </tr>\n";
    }
  }
?>
          </table>
			</div>

			<div id="tab5" class="tab tab5">
				<h2 class="tab-heading">Промени парола:</h2>

				<form action="portfolio/change_pass">
<!--					<input type="password" class="input-main input-spacing" placeholder="Old password">   -->
                                    <div class='form-group'>
					<input type="password" class="input-main input-spacing" name="password" id="password" placeholder="New password">
                                        <span class="help-block">Поне 4 символа!</span>
                                    </div><br/>
                                    <div class='form-group'>
					<input type="password" class="input-main input-spacing" name="cpass" id="cpass" placeholder="Repeat new password">
                                        <span class="help-block">Повторената парола не съвпада!</span>
                                    </div><br/>
					<input type="submit" class="btn-main form-btn-main input-spacing" value="ПРОМЕНИ">
				</form>
			</div>
		</div>
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
        var data=new FormData($('#tab4a')[0]);
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
              $('#list_files').append('<tr data-file_id="'+response.id_file+'"><td style="padding: 12px 30px 12px 0">'+response.filename+
                                      '</td><td><a class="btn-main form-btn-main delete-btn delete_file">Изтрии</a></td></tr>')
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