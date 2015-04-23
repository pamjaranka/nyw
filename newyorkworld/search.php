<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col15-md-11 col15-sm-10 col-xs-12 col-main-left">
				<?php
				if ( have_posts() ) :?>
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s'), get_search_query() ); ?></h1>
					<?php while (have_posts()) : the_post(); 
						get_template_part( 'content', get_post_format() );
					endwhile;
				get_template_part( 'pagination', get_post_format() );
				else :
				?>
					<h1 class="page-title"><?php _e( 'Oops! Nothing was found.'); ?></h1>
					<p><?php _e( 'Maybe try another search?'); ?></p>
				<?php endif; 
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
