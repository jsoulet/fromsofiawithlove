<?php get_header(); ?>
<div class="archive-title">Category: <?php single_cat_title(); ?></div>
<?php get_template_part('loop');
get_footer(); ?>