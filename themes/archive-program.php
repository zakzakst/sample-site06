<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => 'プログラム',
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
              <?php if ($wp_query->current_post == 0) : ?>
                <li>
              <?php else : ?>
                <li class="mt-2">
              <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="overflow-hidden flex flex-row items-center h-32 bg-white rounded-lg border shadow-md hover:bg-gray-100">
                  <div class="flex-shrink-0 w-48 h-full">
                    <?php
                      if (has_post_thumbnail()) :
                      $THUMBNAIL_URL = get_the_post_thumbnail_url($post, 'square');
                      $THUMBNAIL_ID = get_post_thumbnail_id($post->ID);
                      $THUMBNAIL_ALT = get_post_meta($THUMBNAIL_ID, '_wp_attachment_image_alt', true);
                    ?>
                      <img class="object-cover w-full h-full" src="<?php echo $THUMBNAIL_URL; ?>" alt="<?php echo $THUMBNAIL_ALT; ?>">
                    <?php else : ?>
                      <img class="object-cover w-full h-full" src="https://placehold.jp/900x900.png?text=no+image" alt="NO IMAGE">
                    <?php endif; ?>
                  </div>
                  <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php the_title(); ?></h5>
                    <div class="font-normal text-gray-700"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php get_template_part('partials/pagination'); ?>
          <!-- TODO: カテゴリ分割 -->
        <?php else : ?>
          <h2>投稿が見つかりません。</h2>
        <?php endif; ?>
      </div>
      <div class="w-1/3 flex-shrink-0">
        <?php get_sidebar(); ?>
      </div>
  </main>
</div>

<?php get_footer();