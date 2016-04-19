

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

            <?php echo form_open_multipart('projects/upload') ?>
            <?php
            echo $error;
            echo $this->session->flashdata('success_project');
            ?>
                				<div class="file-cnt-holder create-project-file">
                					<h4 class="sub-heading">Качи файлове: </h4>
                					<div class="file input-spacing">
                						<input type="file" name="file" id="id_media" />
                						<span class="value">Upload File</span>
                						<span class="btn-value"></span>
                					</div>
                				</div>

                <input type="submit" name="upload" value="ПУБЛИКУВАЙ" class="btn-main form-btn-main input-spacing">
            </form>
        </div>

        <img src="assets/img/KVADRATI-01.png" class="box-element-1">
    </div>
</div>