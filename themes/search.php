<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => '「' . get_search_query() . '」の検索結果',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>
<div class="px-2 py-16">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : ?>
          <ul>
            <?php while (have_posts()) : the_post(); ?>
              <!-- TODO: index判定して最初の要素に「border-t」クラスをつける -->
              <li class="border-b border-gray-400 border-dotted">
                <a href="<?php the_permalink(); ?>" class="block py-3">
                  <h2 class="font-bold"><?php the_title(); ?></h2>
                  <div><?php the_excerpt(); ?></div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
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