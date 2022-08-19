<!-- TODO: お問い合わせページ 離脱防止のためにヘッダー・フッター変える -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php
      $title = get_the_title();
      $HERO_ITEM = array(
        'title' => $title,
        'subTitle' => 'お問い合わせ用',
      );
      get_template_part('partials/hero', null, $HERO_ITEM);
    ?>
    <div class="px-2 py-16">
      <main class="container mx-auto max-w-screen-lg">
        <?php the_content(); ?>
      </main>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <h2>投稿が見つかりません。</h2>
<?php endif; ?>

<?php get_footer();