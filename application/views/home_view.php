<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="owl-carousel main-slider">
	<div class="item" style="background-image: url(assets/img/BANNER-001.jpg);">
		<div class="shell">
			dasdasdas
		</div>
	</div>

	<div class="item" style="background-image: url(assets/img/BANNER-001.jpg);">
		<div class="shell">
			fasdasdasdad
		</div>
	</div>

	<div class="item" style="background-image: url(assets/img/BANNER-001.jpg);">
		<div class="shell">
			dsadada
		</div>
	</div>
</div>

<div class="main-content">
	<div class="shell">
		<div class="main-heading">
			<h2>ПОСЛЕДНИ ПРОЕКТИ</h2>
			<img src="assets/img/SEPARATE-fade.png">
		</div>

		<div class="project-box-holder clearfix">

			<?php

			foreach ($last_projects as $last_project) {
				?>
				<div class="project-box">
					<a href="<?php echo base_url() ?>projects/<?php echo $last_project['pr_ID'] ?>" class="image-holder">
						<img src="<?php echo base_url() ?>assets/uploads/<?php echo $last_project['filename']; ?>">
					</a>

					<div class="box-description">
						<a href="<?php echo base_url() ?>projects/<?php echo $last_project['pr_ID'] ?>"
						   class="project-title"><?php echo $last_project['pr_name']; ?></a>
						<p><?php echo $last_project['pr_description']; ?></p>
						<?php
						if($last_project['avatar']){
							?>
							<a href="<?php echo base_url() ?>user/<?php echo $last_project['u_id']; ?>"
							   class="user-uploaded-image">
								<img src="assets/uploads/<?php echo $last_project['avatar']; ?>">
							</a>
							<?php
						}else{
							?>
							<a href="<?php echo base_url() ?>user/<?php echo $last_project['u_id']; ?>" class="user-uploaded-image">
								<img src="assets/img/person1.jpg">
							</a>
							<?php
						}
						?>


						<p class="project-category">Category: 
							<?php
							echo $last_project['cat_name'];
							?>
						</p>
					</div>
				</div>
				<?php
				}

			?>
			
		</div>		

<!--		<a href="#" class="load-more-btn">Зареди повече</a>-->
	</div>
</div>

<div class="call-to-action">
	<div class="shell">
		<div class="cta-holder">
			<h2>Вземи <span>участие</span> сега</h2>
			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
			<a href="#" class="btn-main">Присъедини се</a>
		</div>
	</div>
</div>