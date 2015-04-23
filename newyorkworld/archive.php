<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col15-md-11 col15-sm-10 col-xs-12 col-main-left">
		<?php if ( have_posts() ) : ?>
			<?php	the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
				get_template_part( 'pagination', get_post_format() );
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
			
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
