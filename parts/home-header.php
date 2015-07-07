<?php
/**
 * Template part for home header banner
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="row">
  <div class="header small-12 large-12 columns">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo" />
    <div class="logo-title">
      <h1>Parklands College</h1>
      <h4>& Christopher Robin Pre-primary</h4>
      <span class="tagline">“Reaching Outwards, Growing Minds, Building Futures”</span>
    </div>
  	<div class="social-box">
      <?php get_template_part( 'parts/social-box' ); ?>
    </div>
  </div>
  <div class="strip">
  	<h4>For Excellence in Education from Grade 0000 - Grade 12</h4>
  </div>
</div>
