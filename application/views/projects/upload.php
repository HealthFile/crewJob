
<?php echo form_open_multipart('projects/upload') ?>
<?php
echo $error;
?>
    <?php echo validation_errors(); ?>
    <input type="text" name="file_name">
    <input type="file" name="file">
    <input type="submit" name="upload" value="Create">
</form>
