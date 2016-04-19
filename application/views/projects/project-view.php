<div class="owl-carousel main-slider">
    <?php
    $ex = explode(',', $project[0]['img']);
    for ($i =0; $i < count($ex); $i++){
?>
        <div class="item" style="background-image: url(<?php echo base_url(); ?>/assets/uploads/<?php echo $ex[$i]; ?>);">
            <div class="shell">
                <!--			dasdasdas-->
            </div>
        </div>
    <?php
    }
    ?>
    <div class="item" style="background-image: url(<?php echo base_url(); ?>assets/img/bill-last.jpg);">
        <div class="shell">
            <!--			dasdasdas-->
        </div>
    </div>
</div>
<div class="main-content">
    <div class="shell">
        <?php echo $this->session->flashdata('success_edit'); ?>
        <h2 class="tab-heading"><?php echo $project[0]['pr_name']; ?></h2>

        <div class="avatar-project">
            <img src="<?php echo base_url() ?>assets/img/person1.jpg">
        </div>
        <h5 class="person-name"><?php if($project[0]['username']) : echo $project[0]['username']; else: echo $project[0]['u_email']; endif;?></h5>

        <div class="project-description">
            <p><?php echo $project[0]['pr_description']; ?></p>
        </div>

        <div class="project-details-categories">
            <h4 class="sub-heading">Категории: </h4>
            <table>
                <tr>
            <?php
            $ex_icon = explode(',',$project[0]['cat_icon']);
            for($i = 0; $i<count($ex_icon); $i++) {
                printf('<td><img src="%1$sassets/img/%2$s" alt=""></td>', base_url(), $ex_icon[$i]);
            }
            ?>
                </tr>
                <tr>
            <?php
            $ex_cat = explode(',', $project[0]['cat_name']);
            for ($i =0; $i < count($ex_cat); $i++){
                ?>

                <td><p><?php echo $ex_cat[$i]; ?></p></td>
                <?php
            }
            ?>
                </tr>
            </table>
        </div>
        <p class="msg-apply"></p>
        <?php
        if(empty($_SESSION['user_id'])){
            ?>
            <a href="<?php echo base_url() ?>/login"  data-project-id="<?php echo $project[0]['pr_ID']; ?>"
               class="btn-main
        project-btn">КАНДИДАТСТВАЙ ПО ПРОЕКТ</a>
            <?php
        }else{
            ?>
            <a href="" id="apply" data-project-id="<?php echo $project[0]['pr_ID']; ?>" class="btn-main
        project-btn">КАНДИДАТСТВАЙ ПО ПРОЕКТ</a>
            <?php
        }
        ?>

        <?php
        if($is_author['num']){
            ?>
            <a href="<?php echo $project[0]['pr_ID']; ?>/edit" class="btn-main
        project-btn">РЕДАКТИРАЙ</a>
            <?php
        }
        ?>

    </div>
</div>