<?php get_header(); ?>
	<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
	<section class="article-desc col-md-10">
		
		<header class="article-header">
			<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('full', array("class"=>"article-thumbnail"));
					}

			?>
			<h1 class="article-title"><?php the_title(); ?></h1>
		</header>
		<div class="article-content">
			<?php the_content(); ?>
		</div>
		<footer class="article-footer">
			<?php if(has_tag()){?>
				<ul class="item-tag-list">
					<li><i class="icon-tags"></i></li>
					<?php echo get_the_tag_list('<li>','</li><li>','</li>'); ?>
				</ul>
			<?php } ?>
		</footer>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>