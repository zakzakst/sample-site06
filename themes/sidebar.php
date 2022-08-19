<!-- ▼▼▼ サイドバー ▼▼▼ -->
<aside>
  <?php
    $post_type = get_post_type();
    if ($post_type == 'program' || $post_type == 'post') :
  ?>
    <?php
      $queryArgs = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 5,
      );
      if ($post_type == 'program') {
        $heading = '新着プログラム';
        $queryArgs['post_type'] = $post_type;
      } else {
        $heading = '新着お知らせ';
      }
      $new_query = new WP_Query($queryArgs);
      if ($new_query->have_posts()) :
    ?>
      <h4 class="font-bold"><?php echo $heading; ?></h4>
      <div class="mt-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-400">
        <?php
          while($new_query->have_posts()) :
          $new_query->the_post();
        ?>
          <!-- TODO: index判定して最初の要素以外は「border-t border-gray-400」クラスをつける -->
          <a href="<?php echo the_permalink(); ?>" class="block py-2 px-4 w-full cursor-pointer hover:text-blue-700"><?php echo the_title(); ?></a>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    <?php else : ?>
      <!-- <p>投稿なし</p> -->
    <?php endif; ?>
  <?php else : ?>
    <?php
      $LINK_ITEMS = GET_MENU_ITEMS('side_links');
      // TODO: 現在のページを参照して、クラスをつける
    ?>
    <div class="mt-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-400">
      <?php foreach ($LINK_ITEMS as $ITEM) : ?>
        <a href="<?php echo $ITEM->url; ?>" class="block py-2 px-4 w-full cursor-pointer hover:text-blue-700"><?php echo $ITEM->title; ?></a>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</aside>
<!-- ▲▲▲ サイドバー ▲▲▲ -->