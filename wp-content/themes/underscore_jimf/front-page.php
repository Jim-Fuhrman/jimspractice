<?php
echo "milestone #1";
get_header();
echo "milestone #2";
$categories = new WP_Query(array(
    'post_type' => 'category',
    'posts_per_page' => -1
));
echo "milestone #3";