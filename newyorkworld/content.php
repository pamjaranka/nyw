<div class="post-block clearfix">
	<div class="row">
		<div class="post-block-img col15-md-4 col15-sm-4 col15-xs-5">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'smallPost' ); ?>
			<?php endif; ?>
		</div>
		<div class="post-block-text">
			<h2><?php the_title(); ?></h2>
			<div class="tags-block">
				<?php get_template_part( 'category_tags', get_post_format() ); ?>
			</div>
			<div><?php the_field('annotation'); ?></div>
			<div class="read-more"><a href="<?php the_permalink() ?>">Read more</a></div>
		</div>
	</div>
</div>