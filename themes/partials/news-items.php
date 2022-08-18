<?php
  $queryArgs = array(
    'orderby' => 'date',
    'order' => 'DESC',
  );
  if (isset($args['page'])) {
    $queryArgs['posts_per_page'] = $args['page'];
  }
  $new_query = new WP_Query($queryArgs);
  if ($new_query->have_posts()) :
?>
  <ul class="border-t-2 border-gray-400">
    <?php
      while($new_query->have_posts()) :
      $new_query->the_post();
      $category = get_the_category();
    ?>
      <li class="border-b border-gray-400 border-dotted">
        <a href="<?php the_permalink(); ?>" class="flex items-center py-3 hover:opacity-50">
          <span class="w-32"><?php echo get_the_date(); ?></span>
          <span class="w-24 px-2 py-1 text-center text-xs text-white bg-gray-600 rounded"><?php echo $category[0]->cat_name; ?></span>
          <span class="ml-4"><?php the_title(); ?></span>
        </a>
      </li>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php else : ?>
  <p>投稿はありません。</p>
<?php endif; ?>