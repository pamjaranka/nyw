
<?php 
	$post_id = get_the_ID();
	$postlocation = get_the_tags();
	if ($postlocation) {
		echo '<div class="sidebar-title">Related Stories</div>';
		foreach($postlocation as $tag) {
			$tag_id = $tag->term_id;
			$exclude_ids = array( $post_id );
			$args = array(
				'tag_id' => $tag_id,
				'orderby' => 'date',
				'order' => 'DESC',
				'post__not_in' => $exclude_ids,
				'posts_per_page' => 2
			);
			$my_query = new WP_Query( $args ); while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="post-block clearfix">
				<div class="row">
					<div class="post-block-img col15-md-3 col15-sm-3 col15-xs-5">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'smallPost' ); ?>
						<?php endif; ?>
					</div>
					<div class="post-block-text">
						<h2><?php the_title(); ?></h2>
						<div><?php the_field('annotation'); ?></div>
						<div class="read-more"><a href="<?php the_permalink() ?>">Read more</a></div>
					</div>
				</div>
				</div>
			<?php endwhile; 
	  }
	} 
	wp_reset_postdata(); ?>

	

