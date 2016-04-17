<form action="edit" method="post">

    <?php echo validation_errors(); ?>
    <input type="text" name="project_name" value="<?php echo $project['name']; ?>">
    <textarea name="project_description" id="" cols="30" rows="10">
        <?php echo $project['description']; ?>
    </textarea>
    <select name="status" id="">
        <option <?php if($project['status'] == 0 ): echo 'selected'; endif;?> value="0">отворен</option>
        <option <?php if($project['status'] == 1 ): echo 'selected'; endif;?> value="1">затворен</option>
        <option <?php if($project['status'] == 2 ): echo 'selected'; endif;?> value="2">приключен</option>
    </select>
    <input type="submit" name="edit" value="Редактирай">
</form>
<?php

$ex = explode(',', $project['images']);

for ($i = 0; $i < count($ex); $i++){
    echo $ex[$i]. '<input type="button" class="delete" data-delete-pimage="'.$project['id'].'" value="DELETE">';
}
