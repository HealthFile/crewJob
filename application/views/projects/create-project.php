<div class="form-top-heading">
	<div class="shell">
		<h5>Не се чуди много</h5>
		<h3>Създай нов проект</h3>
	</div>
</div>

<div class="form-main-content">
	<div class="shell">
		<div class="form-holder">
			<?php echo validation_errors(); ?>
			<?php echo $this->session->flashdata('fail_project');?>

			<form action="create" method="post">
				<?php echo validation_errors(); ?>
				<input type="text" placeholder="Заглавие" name="project_name" class="input-main input-spacing">
				<textarea name="project_description" class="input-main textarea-main textarea-link input-spacing"
						  placeholder="Описание " ></textarea>

				<h4 class="sub-heading input-spacing">Категории:</h4>

				<div class="checkbox-holder">
					<div class="checkbox-col">
						<?php
						foreach ($categories as $category) {
							printf('<label for="category-%1$s">%2$s<input id="category-%1$s" type="checkbox" name="categories[]" value="%1$s"
><span></span></label>',
								$category['id'], $category['name']);
						}
						?>
					</div>
				</div>

<!--				<div class="file-cnt-holder create-project-file">-->
<!--					<h4 class="sub-heading">Качи файлове: </h4>-->
<!--					<div class="file input-spacing">-->
<!--						<input type="file" name="file" id="id_media" />-->
<!--						<span class="value">Upload File</span>-->
<!--						<span class="btn-value"></span>-->
<!--					</div>-->
<!--				</div>-->

				<input type="submit" value="ПУБЛИКУВАЙ" class="btn-main form-btn-main input-spacing">
			</form>
		</div>

		<img src="assets/img/KVADRATI-01.png" class="box-element-1">
	</div>
</div>