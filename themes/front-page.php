<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => 'トップページ',
    'subTitle' => 'サブタイトル',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>

<div class="px-2 py-16">
  <main class="container mx-auto max-w-screen-lg">
    <section>
      <?php get_template_part('partials/heading/section', null, array('text' => 'お知らせ')); ?>
      <div class="mt-4">
        <?php get_template_part('partials/news-items', null, array('page' => 3)); ?>
      </div>
    </section>
    <section class="mt-12">
      <?php get_template_part('partials/heading/section', null, array('text' => '〇〇について')); ?>
      <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div>
          <img src="https://placehold.jp/900x450.png?text=画像" alt="" class="max-w-full">
        </div>
      </div>
    </section>
    <section class="mt-12">
      <?php get_template_part('partials/contact'); ?>
    </section>
  </main>
</div>

<?php get_footer();