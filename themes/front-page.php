<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => 'トップページ',
    'subTitle' => 'サブタイトル',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>

<div class="px-2 py-8">
  <main class="container mx-auto">
    front page
  </main>
</div>

<?php get_footer();