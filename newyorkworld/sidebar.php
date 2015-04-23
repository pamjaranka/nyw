<div class="col15-md-4 col15-sm-5 col-xs-12 col-sidebar">
	<div class="sidebar-block sidebar-slider">
		<div class="sidebar-title">Data tools</div>
		<?php 
			$args = array(
			'category_name' => 'data-tools',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 3
		);
		if ($args) {
		echo '<ul class="bxslider">';
			$my_query = new WP_Query( $args ); while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li class="sidebar-item">
					<a href="<?php the_permalink() ?>">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'sidebarPost' ); ?>
							<?php endif; ?>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h3><?php the_title(); ?></h3>
							<div><?php the_field('annotation'); ?></div>
						</div>
					</div>
					</a>
				</li>
				
			<?php endwhile; 
			echo '</ul>';
		 }; ?>
		
	</div>

	<div class="sidebar-block">
		<div class="sidebar-title">Data talk</div>
		<?php 
			$args = array(
			'category_name' => 'data-talk',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 1
		);
		$my_query = new WP_Query( $args ); while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="sidebar-item">
			<a href="<?php the_permalink() ?>">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'sidebarPost' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h3><?php the_title(); ?></h3>
					<div><?php the_field('annotation'); ?></div>
				</div>
			</div>
			</a>
			</div>
		<?php endwhile; ?>
	</div>

	<div class="sidebar-block">
		<div class="sidebar-title">Partners</div>
		<?php 
			$args = array(
			'category_name' => 'partners',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 6
		);
		if ($args) {
		echo '<div class="parners-all">';
		$my_query = new WP_Query( $args ); while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="partners-item row clearfix">
				<div class="partners-img col15-md-5 col-sm-12 col-xs-12">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'sidebarPartners' ); ?>
					<?php endif; ?>
				</div>
				<div class="partners-text col15-md-10 col-sm-12 col-xs-12">
					<div class="partners-title"><?php the_title(); ?></div>
					<div><?php the_field('annotation'); ?></div>
				</div>
			</div>
			
		<?php endwhile;
			echo '</div>';
		} ?>
	</div>
</div>