<?php
get_header();
?>

<main style="max-width: 900px; margin: 40px auto; padding: 0 16px;">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article style="margin-bottom: 40px;">
        <h1><?php the_title(); ?></h1>
        <div>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php
get_footer();
