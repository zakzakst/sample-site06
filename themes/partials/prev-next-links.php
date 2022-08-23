<!-- ▼▼▼ 前後投稿リンク ▼▼▼ -->
<nav class="block text-center">
  <ul class="inline-flex -space-x-px">
    <?php
      $prev_post = get_previous_post();
      if (!empty($prev_post)) :
      $url = get_permalink($prev_post->ID);
      $title = $prev_post->post_title;
    ?>
      <li>
        <a href="<?php echo $url; ?>" class="inline-block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $title; ?></a>
      </li>
    <?php endif ?>
    <?php
      $next_post = get_next_post();
      if (!empty($next_post)) :
      $url = get_permalink($next_post->ID);
      $title = $next_post->post_title;
    ?>
      <li>
        <a href="<?php echo $url; ?>" class="inline-block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $title; ?></a>
      </li>
    <?php endif ?>
  </ul>
</nav>
<!-- ▲▲▲ 前後投稿リンク ▲▲▲ -->