<?php


get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col15-md-11 col15-sm-10 col-xs-12 col-main-left">
			<div class="main-left">
			<?php 
				$args = array(
				'category_name' => 'main-post',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1
			);
			$my_query = new WP_Query( $args ); while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<a href="<?php the_permalink() ?>" class="main-post-block">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'mainPost' ); ?>
					<?php endif; ?>
					<div class="main-post-text">
						<h1><?php the_title(); ?></h1>
						<div><?php the_field('annotation'); ?> </div>
					</div>
					
				</a>
				
			<?php endwhile; ?>

			<?php 
				$idObj = get_category_by_slug('main-post'); 
				$id = $idObj->term_id;
				$exclude_cat = array( $id );
				$args = array(
				'category_name' => 'projects-of-the-new-york-world',
				'orderby' => 'date',
				'order' => 'DESC',
				'category__not_in' => $exclude_cat,
				'posts_per_page' => 4
			);
			$args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$my_query = new WP_Query( $args ); 
			
			// Pagination fix
			$temp_query = $wp_query;
			$wp_query   = NULL;
			$wp_query   = $my_query;
			
			if ( $my_query->have_posts() ) :
				while ($my_query->have_posts()) : $my_query->the_post(); 
					get_template_part( 'content', get_post_format() );
				endwhile;
			endif; 
			wp_reset_postdata(); 
			
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page' ),
				'next_text'          => __( 'Next page' ),
				'before_page_number' => '<span class="page-pagination">' . __( 'Page') . ' </span>',
			) );
			// Reset main query object
			$wp_query = NULL;
			$wp_query = $temp_query;
			?>




			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
