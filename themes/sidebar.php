<!-- ▼▼▼ サイドバー ▼▼▼ -->
<aside>
  <?php $post_type = get_post_type(); if ($post_type == 'program') : ?>
    <h4>プログラム用のサイドバー</h4>
  <?php elseif ($post_type == 'post') : ?>
    <h4>お知らせ用のサイドバー</h4>
  <?php else : ?>
    <h4>全般サイドバー</h4>
  <?php endif; ?>
</aside>
<!-- ▲▲▲ サイドバー ▲▲▲ -->