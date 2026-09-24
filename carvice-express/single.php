<?php get_header(); ?>
<main class="container" style="padding: 120px 20px 80px; min-height: 60vh;">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 style="font-size: 2.5rem; font-weight: 800; color: #111827; margin-bottom: 24px;"><?php the_title(); ?></h1>
        <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #374151;">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
    endwhile;
  endif;
  ?>
</main>
<?php get_footer(); ?>
