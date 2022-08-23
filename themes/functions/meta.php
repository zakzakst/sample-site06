<?php
function description() {
  global $post;
  $term = get_post_meta($post->ID, 'description', true);
  if ($term) {
    printf('<meta name="description" content="%s">', esc_html($term));
  } else {
    printf('<meta name="description" content="%s">', esc_html(get_bloginfo('description')));
  }
}
add_action('wp_head', 'description');

function custom_css() {
  global $post;
  $term = get_post_meta($post->ID, 'customcss', true);
  if ($term) {
    echo '<style>';
    echo esc_html($term);
    echo '</style>';
  }
}
add_action('wp_head', 'custom_css');