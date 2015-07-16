<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>

<div class="row">

	<div class="small-12 large-9 columns medium-12 main large-push-3" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php foundationpress_entry_meta(); ?>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php //get_sidebar(); ?>
	<aside id="sidebar" class="small-12 large-3 columns large-pull-9">
			<article id="nav_menu-12" class="row widget widget_nav_menu">
				<div class="small-12 columns">
					<div class="menu-news-container">
						<ul id="menu-news" class="menu">
							<li class="menu-item active"><a href="http://www.parklands.co.za/site/news/">News</a></li>
							<li class="menu-item "><a href="http://www.parklands.co.za/site/newsletters/">Parklands Newsletters</a></li>
							<li class="menu-item"><a href="http://www.parklands.co.za/site/parklands-headlines/">Parklands Headlines</a></li>
						</ul>
					</div>
				</div>
			</article>	
</aside>
</div>
<?php get_footer(); ?>
