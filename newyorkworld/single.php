<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col15-md-11 col15-sm-10 col-xs-12 col-main-left">
				<?php
				while ( have_posts() ) : the_post();?>
					<h1 class="page-title post-title"><?php the_title(); ?></h1>
					<div class="tags-block">
						<?php get_template_part( 'post_date', get_post_format() ); ?>
						<?php get_template_part( 'category_tags', get_post_format() ); ?>
					</div>
					<div class="posttext"><?php the_content(); ?></div>
					<?php get_template_part( 'related_stories', get_post_format() ); ?>
				<?php endwhile; 
				wp_reset_postdata(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
