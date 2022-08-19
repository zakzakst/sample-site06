<?php get_header(); ?>

<div class="px-2 py-16">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : ?>
          <ul>
            <?php while (have_posts()) : the_post(); ?>
              <!-- TODO: index判定して最初の要素は「mt-2」クラスをつけない -->
              <li class="mt-2">
                <a href="<?php the_permalink(); ?>" class="overflow-hidden flex flex-row items-center h-32 bg-white rounded-lg border shadow-md hover:bg-gray-100">
                  <div class="flex-shrink-0 w-48 h-full">
                    <!-- TODO: サムネイル画像反映（登録されていない場合は「no image」表示 -->
                    <img class="object-cover w-full h-full" src="https://placehold.jp/900x900.png?text=no+image" alt="">
                  </div>
                  <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php the_title(); ?></h5>
                    <div class="font-normal text-gray-700"><?php the_excerpt(); ?></div>
                  </div>
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
  </main>
</div>

<?php get_footer();