<form action="create" method="post">
    <?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('fail_project');?>
    <input type="text" name="project_name">
    <?php
    foreach ($categories as $category) {
        printf('<label for="category-%1$s">%2$s</label><input id="category-%1$s" type="checkbox" name="categories[]" value="%1$s">',
            $category['id'], $category['name']);
        }
    ?>
    <textarea name="project_description" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="create" value="Create">
</form>
