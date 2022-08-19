<?php get_header(); ?>

<?php
  $title = get_the_title();
  $HERO_ITEM = array(
    'title' => $title,
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>

<div class="px-2 py-16">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- TODO: アイキャッチ画像 -->
            <?php the_content(); ?>
            <a href="<?php echo get_post_type_archive_link(get_post()->post_type); ?>">一覧リンク</a>
          <?php endwhile; ?>
        <?php else : ?>
          <h2>投稿が見つかりません。</h2>
        <?php endif; ?>
      </div>
      <div class="w-1/3 flex-shrink-0">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
</div>

<?php get_footer();