<ul class="hide-for-small-only medium-block-grid-4 small-block-grid-1 <?php if (is_front_page() == true) { echo "home-links"; } else { } ?>">
		<li>
			<a href="<?=site_url();?>/welcome-to-christopher-robin-pre-primary/">
				<?php if (is_front_page() == true) { ?>
					<img src="<?=get_template_directory_uri();?>/assets/img/home-preprimary.jpg" />
				<?php } else { } ?>
				<h5 class="green">PRE-PRIMARY<br><span>GRADES 0000 - R</span></h5>
			</a>
		</li>
		<li>
			<a href="<?=site_url();?>/welcome-to-the-junior-preparatory/">
				<?php if (is_front_page() == true) { ?>
					<img src="<?=get_template_directory_uri();?>/assets/img/home-juniorprep.jpg" />
				<?php } else { } ?>
				<h5 class="yellow">JUNIOR PREPARATORY<br><span>GRADES 1 - 3</span></h5>
			</a>
		</li>
		<li>
			<a href="<?=site_url();?>/welcome-to-the-senior-preparatory/">
				<?php if (is_front_page() == true) { ?>
					<img src="<?=get_template_directory_uri();?>/assets/img/home-seniorprep.jpg" />
				<?php } else { } ?>
				<h5 class="red">SENIOR PREPARATORY<br><span>GRADES 4 - 6</span></h5>
			</a>
		</li>
		<li>
			<a href="<?=site_url();?>/welcome-to-the-secondary-faculty/">
				<?php if (is_front_page() == true) { ?>
					<img src="<?=get_template_directory_uri();?>/assets/img/home-highschool.jpg" />
				<?php } else { } ?>
				<h5 class="blue">SECONDARY FACULTY<br><span>GRADES 7 - 12</span></h5>
			</a>
		</li>
	</ul>

<div class="link-dropdown show-for-small-only">
	<ul class="stack button-group">
		<li class="button"><a href="<?=site_url();?>/welcome-to-christopher-robin-pre-primary/ ">Pre-Primary (Grade 0000 - R)</a></li>
		<li class="button"><a href="<?=site_url();?>/welcome-to-the-junior-preparatory/">Junior Preparatory (Grade 1 - 3)</a></li>
		<li class="button"><a href="<?=site_url();?>/welcome-to-the-senior-preparatory/">Senior Preparatory (Grade 4 - 6)</a></li>
		<li class="button"><a href="<?=site_url();?>/welcome-to-the-secondary-faculty/">Secondary Faculty (Grade 7 - 12)</a></li>
	</ul>
</div>
<?php if (is_front_page() == true) { ?>
	<br>

<?php } else { } ?>
