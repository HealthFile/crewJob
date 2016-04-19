<div class="main-content project-desc-main-content">
    <div class="shell">
        <h4 class="sub-heading category-sub-heading">Filter by category: </h4>
        <form class="category-filter-dropdown">
            <select id="cat" class="main-select">
                <option value="all">All</option>
                <?php
                foreach ($category as $item) {
                    ?>
                    <option value="<?php echo $item['name'] ?>"><?php echo $item['name']; ?></option>
                    <?php
                }

                ?>
            </select>
        </form>
<!--

class="main-select"
-->
        <div class="project-box-holder clearfix">


            <?php
            foreach ($projects as $project) {
                ?>
                <div data-cat="<?php echo $project['cat_name']; ?>" class="project-box">
                    <a href="<?php echo base_url() ?>projects/<?php echo $project['pr_ID'] ?>" class="image-holder">
                        <img src="<?php echo base_url() ?>assets/uploads/<?php echo $project['filename']; ?>">
                    </a>

                    <div class="box-description">
                        <a href="<?php echo base_url() ?>projects/<?php echo $project['pr_ID'] ?>"
                           class="project-title"><?php echo $project['pr_name']; ?></a>
                        <p><?php echo $project['pr_description']; ?></p>
                        <?php
                        if ($project['avatar']) {
                            ?>
                            <a href="<?php echo base_url() ?>user/<?php echo $project['u_id']; ?>"
                               class="user-uploaded-image">
                                <img src="assets/uploads/<?php echo $project['avatar']; ?>">
                            </a>
                            <?php
                        } else {
                            ?>
                            <a href="<?php echo base_url() ?>user/<?php echo $project['u_id']; ?>"
                               class="user-uploaded-image">
                                <img src="<?php echo base_url() ?>assets/img/person1.jpg">
                            </a>
                            <?php
                        }
                        ?>

                        <p class="project-category">Category:

                            <?php
                            echo $project['cat_name'];
                            ?>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>

        <a href="#" class="load-more-btn">Зареди повече</a>
    </div>
</div>