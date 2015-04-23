<?php

?>
<div class="container">
	<footer>
		<div class="row">
			<div class="col15-md-11 col15-sm-10 col-xs-12">
				<div class="row">
					<div class="col-md-4 footer-form">
						<?php echo do_shortcode ('[contact-form-7 id="76" title="Suscribe"]'); ?>
						<div>
						<?php
							wp_nav_menu( array(
								'menu_class'     => 'footer-menu',
								'theme_location' => 'social',
							) );
						?>
						</div>
						<div class="social-icons">
							<a href="" class="social-icons-item twiter"></a>
							<a href="" class="social-icons-item facebook"></a>
							<a href="" class="social-icons-item vimeo"></a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="h3"><?php the_field('footer_title_center', 'option'); ?></div>
						<?php the_field('footer_text_center', 'option'); ?>
						<p><img class="logo" src="<?php the_field('footer_img_center', 'option'); ?>" alt=""></p>
					</div>
				</div>
			</div>
			<div class="col15-md-4 col15-sm-5 col-xs-12">
				<div class="h3"><?php the_field('footer_title_right', 'option'); ?></div>
				<?php the_field('footer_text_right', 'option'); ?>
			</div>
		</div>
	</footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
