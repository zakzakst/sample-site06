<!-- ▼▼▼ ヒーロー ▼▼▼ -->
<section class="px-2 py-16 bg-gray-600 text-white">
  <div class="container mx-auto">
    <h1 class="text-3xl"><?php echo $args['title']; ?></h1>
    <?php if (isset($args['subTitle'])) : ?>
      <p class="mt-2"><?php echo $args['subTitle']; ?></p>
    <?php endif; ?>
  </div>
</section>
<!-- ▲▲▲ ヒーロー ▲▲▲ -->