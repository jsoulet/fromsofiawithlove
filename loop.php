<img class="hidden" src="http://fromsofiawithlove.zz.mu/wp-content/uploads/profil_pic3.png" />
<ul id="article-list">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<li class="article-list-item" id="post-<?php the_ID(); ?>">
			<div href="#" class="bwWrapper">
				<?php
					if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
						the_post_thumbnail('medium');}
				?>
			<div class="item-category"><?php the_category(', ') ?></div>
			<footer class="item-info">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><header class="item-title"><?php the_title(); ?></header></a>
				<p class="item-caption"><?php if(has_excerpt()) the_excerpt(); ?></p>
				<ul class="item-tag-list">
					<li><i class="icon-tags"></i></li>
					<?php echo get_the_tag_list('<li>','</li><li>','</li>'); ?>
				</ul>
			</footer>
		</div>
	</li>

	<?php endwhile; ?>
	<?php else : ?>
	<p class="nothing">
		Nothing to display !
	</p>
	<?php endif; ?>
</ul>