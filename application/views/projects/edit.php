
<?php

//$ex = explode(',', $project['images']);
//
//for ($i = 0; $i < count($ex); $i++){
//    echo $ex[$i]. '<input type="button" class="delete" data-delete-pimage="'.$project['id'].'" value="DELETE">';
//}
?>

<div class="form-top-heading">
    <div class="shell">
        <h3>Редактирай проекта</h3>
    </div>
</div>

<div class="form-main-content">
    <div class="shell">
        <div class="form-holder">
            <?php echo validation_errors(); ?>
            <?php echo $this->session->flashdata('fail_project');?>

            <form action="edit" method="post">
                <?php echo validation_errors(); ?>
                <input type="text" placeholder="Заглавие" name="project_name" value="<?php echo $project['name']; ?>"
                 class="input-main input-spacing">
				<textarea name="project_description" class="input-main textarea-main textarea-link input-spacing"
                          placeholder="Описание " ><?php echo $project['description']; ?></textarea>
                <form class="category-filter-dropdown">
                    <select  name="status" class="main-select">
                        <option <?php if($project['status'] == 0 ): echo 'selected'; endif;?> value="0">отворен</option>
                        <option <?php if($project['status'] == 1 ): echo 'selected'; endif;?> value="1">затворен</option>
                        <option <?php if($project['status'] == 2 ): echo 'selected'; endif;?> value="2">приключен</option>
                    </select>
               
                <h4 class="sub-heading input-spacing">Категории:</h4>

                <div class="checkbox-holder">
                    <div class="checkbox-col">
                        <?php
                        foreach ($categories as $category) {
                            printf('<label for="category-%1$s">%2$s<input id="category-%1$s" checked type="checkbox" name="categories[]" value="%1$s"
><span></span></label>',
                                $category['id'], $category['name']);
                        }
                        ?>
                    </div>
                </div>

                <input type="submit" name="edit" value="РЕДАКТИРАЙ" class="btn-main form-btn-main input-spacing">
            </form>
        </div>

        <img src="<?php echo base_url(); ?>assets/img/KVADRATI-01.png" class="box-element-1">
    </div>
</div>
