<?php get_header(); ?>

<?php
  if (is_category()) {
    $title = single_cat_title('', false); 
  } elseif (is_tag()) { 
    $title = single_tag_title('', false); 
  }
  $title = $title . 'の記事一覧'; 
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
          <ul class="border-t-2 border-gray-400">
            <?php
              while (have_posts()) :
              the_post();
              $category = get_the_category();
            ?>
              <li class="border-b border-gray-400 border-dotted">
                <a href="<?php the_permalink(); ?>" class="flex items-center py-3 hover:opacity-50">
                  <span class="w-32"><?php echo get_the_date(); ?></span>
                  <span class="w-24 px-2 py-1 text-center text-xs text-white bg-gray-600 rounded"><?php echo $category[0]->cat_name; ?></span>
                  <span class="ml-4"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php get_template_part('partials/pagination'); ?>
          <!-- TODO: 年毎ページ分割 -->
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