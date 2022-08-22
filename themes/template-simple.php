<?php
/*
Template Name: シンプルテンプレート
*/
?>

<?php get_header(); ?>

<?php
  $title = get_the_title();
  $HERO_ITEM = array(
    'title' => $title,
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>
<div class="px-2 py-16">
  <main class="container mx-auto max-w-screen-lg">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <h2>投稿が見つかりません。</h2>
    <?php endif; ?>
  </main>
</div>

<?php get_footer();