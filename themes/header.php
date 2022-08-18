<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php
    // TODO: includeでなくget_template_part使う
    // include('components/head/meta.php');
    // include('components/head/ogp.php');
    // include('components/head/schema.php');
    // include('components/page-loader/page-loader-head.php');
    wp_head();
  ?>
</head>
<body class="layout__body" <?php body_class(); ?>>
<?php
  // include('components/page-loader/page-loader.php');
  get_template_part('partials/header/pc');