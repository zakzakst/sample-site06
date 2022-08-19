<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => get_bloginfo('name'),
    'subTitle' => get_bloginfo('description'),
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>

<div class="px-2 py-16">
  <main class="container mx-auto max-w-screen-lg">
    <!-- ▼▼▼ お知らせ ▼▼▼ -->
    <section>
      <?php get_template_part('partials/heading/section', null, array('text' => 'お知らせ')); ?>
      <div class="mt-4">
        <?php get_template_part('partials/news-items', null, array('page' => 3)); ?>
      </div>
      <p class="mt-4 text-center">
        <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
          お知らせ一覧を見る
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </p>
    </section>
    <!-- ▲▲▲ お知らせ ▲▲▲ -->

    <!-- ▼▼▼ 〇〇について ▼▼▼ -->
    <section class="mt-16">
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
      <p class="mt-4 text-center">
        <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
          開催情報を見る
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </p>
    </section>
    <!-- ▲▲▲ 〇〇について ▲▲▲ -->

    <!-- ▼▼▼ プログラム ▼▼▼ -->
    <section class="mt-16">
      <?php get_template_part('partials/heading/section', null, array('text' => '近日開催予定のプログラム')); ?>
      <div class="mt-4">
        <?php get_template_part('partials/program-items', null, array('page' => 8)); ?>
      </div>
      <p class="mt-4 text-center">
        <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
          プログラム一覧を見る
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </p>
    </section>
    <!-- ▲▲▲ プログラム ▲▲▲ -->

    <section class="mt-16">
      <?php get_template_part('partials/contact'); ?>
    </section>
  </main>
</div>

<?php get_footer();