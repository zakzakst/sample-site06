<?php
  $NAV_ITEMS = GET_MENU_ITEMS('footer_links');
  $SNS_ITEMS = GET_MENU_ITEMS('footer_sns_links');
?>

<!-- ▼▼▼ フッター ▼▼▼ -->
<footer class="bg-gray-900 px-2 py-8 text-white">
  <div class="container mx-auto">
    <div class="flex justify-between">
      <div class="">
        <a href="<?php echo esc_url(home_url()); ?>">LOGO</a>
      </div>
      <ul class="grid grid-cols-2 gap-4 sm:gap-x-4 sm:gap-y-2 sm:grid-cols-3">
        <?php foreach ($NAV_ITEMS as $ITEM) : ?>
          <li>
            <a href="<?php echo $ITEM->url; ?>" class="hover:underline"><?php echo $ITEM->title; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <p class="text-sm text-gray-500 sm:text-center">Copyright &copy; XXXXX 2022. All Rights Reserved.</p>
      <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
        <?php foreach ($SNS_ITEMS as $ITEM) : ?>
          <a href="<?php echo $ITEM->url; ?>" class="text-gray-500 hover:text-white">
            <i class="<?php echo $ITEM->title; ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</footer>
<!-- ▲▲▲ フッター ▲▲▲ -->