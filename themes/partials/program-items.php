<?php
  // TODO: 近日開催のデータを取得する
  $queryArgs = array(
    'post_type' => 'program',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  if (isset($args['page'])) {
    $queryArgs['posts_per_page'] = $args['page'];
  }
  $new_query = new WP_Query($queryArgs);
  if ($new_query->have_posts()) :
?>
  <ul class="grid grid-cols-4 gap-2">
    <?php
      while($new_query->have_posts()) :
      $new_query->the_post();
    ?>
      <li class="bg-white rounded-lg border border-gray-200 shadow-md">
        <a href="<?php the_permalink(); ?>">
          <!-- TODO: サムネイル画像反映（登録されていない場合は「no image」表示 -->
          <img class="rounded-t-lg" src="https://placehold.jp/900x450.png?text=no+image" alt="" />
        </a>
        <div class="p-5">
          <a href="<?php the_permalink(); ?>">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php the_title(); ?></h5>
          </a>
          <a href="<?php the_permalink(); ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
            詳細を見る
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </li>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php else : ?>
  <p>投稿はありません。</p>
<?php endif; ?>