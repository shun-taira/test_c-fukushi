<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'add-hero');

	?>
		<section>
			<div class="page">
				<div class="wrap-page container-fluid py-14 py-md-30">
					<div class="block-page mx-auto">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>

	<?php

	endwhile; // End of the loop.
	?>

	<?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
