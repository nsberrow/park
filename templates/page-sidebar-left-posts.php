<?php
/*
Template Name: Left Sidebar Posts
*/
get_header(); ?>
<div class="row">
  <div class="small-12 medium-12 large-9 large-push-3 columns" role="main">

    <ul>

      <?php $the_query = new WP_Query( 'posts_per_page=15' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h1 class="entry-title">
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>
        <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
            </a>
        <?php } ?>
        <p><?php the_excerpt(__('(more…)')); ?></p>



      <?php
        endwhile;
      wp_reset_postdata();
      ?>
    </ul>

  </div>
  <?php get_sidebar( 'left' ); ?>
</div>
<?php get_footer(); ?>
