<div class="row school-links">
	<ul class="medium-block-grid-4 small-block-grid-1 <?php if (is_front_page() == true) { echo "home-links"; } else { } ?>">
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
				<h5 class="red">SENIOR PREPARATORY<br><span>GRADES 4 - 7</span></h5>
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
</div>
<div class="link-dropdown">
	<select>
		<option value="preprimary">Pre-Primary (Grade 0000 - R)</option>
		<option value="juniorprep">Junior Preparatory (Grade 1 - 3)</option>
		<option value="seniorprep">Senior Preparatory (Grade 4 - 7)</option>
		<option value="highschool">Secondary Faculty (Grade 7 - 12)</option>
	</select>
</div>
<?php if (is_front_page() == true) { ?>
	<br>

<?php } else { } ?>
