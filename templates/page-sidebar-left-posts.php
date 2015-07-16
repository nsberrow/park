<?php
/*
Template Name: Left Sidebar Posts
*/
get_header(); ?>
<div class="row">
  <div class="small-12 medium-12 large-9 large-push-3 columns" role="main">
    <h1 class="entry-title">
      Parklands Headlines
    </h1>
    <hr>
    <section class="posts-list">
      <?php $the_query = new WP_Query( 'posts_per_page=15' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h3 class="entry-title">
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3>
        <article>
          <p>
        <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
            </a>
        <?php } ?>
        <?php $content = get_the_content();
              $content = strip_tags($content);
              echo substr($content, 0, 255);
        ?>
        <div class="clearfix"></div>
      <a class="button tiny" href="<?php the_permalink() ?>">Read more</a>
      </p>
    </article>


      <?php
        endwhile;
      wp_reset_postdata();
      ?>
</section>

  </div>
  <?php get_sidebar( 'left' ); ?>
</div>
<?php get_footer(); ?>
