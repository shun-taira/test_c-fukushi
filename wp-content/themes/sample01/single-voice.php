<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (have_posts()) :
		the_post();
	?>

		<div class="wrap-breadcrumb container-fluid mt-4" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if (function_exists('bcn_display')) {
				bcn_display();
			} ?>
		</div>

		<section>
			<div class="voice-hero pt-0 pt-md-20">
				<div class="wrap-voice-hero container-fluid">
					<div class="card mb-3">
						<div class="row no-gutters align-items-center">
							<div class="col-md-8">
								<?php the_post_thumbnail('full', array("class" => "img-fluid voice-hero__img")); ?>
							</div>
							<div class="col-md-16">
								<div class="card-body">
									<h5 class="card-title"><?php the_title(); ?></h5>
									<p class="card-text"><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="voice">
				<div class="wrap-voice container-fluid py-14 py-md-30">
					<div class="block-voice mx-auto">
						<?php the_content(); ?>
					</div>
					<div class="samecategory-link">

						<?php
						$prev_post = get_previous_post();
						$next_post = get_next_post();
						?>

						<div class="d-md-flex align-items-center">
							<div class="samecategory-link-left">
								<?php if ($prev_post) : ?>
									<a class="samecategory-link-prev" href="<?php echo get_permalink($prev_post->ID) ?>">
										<img class="samecategory-link__img" src="<?php echo get_the_post_thumbnail_url($prev_post->ID, 'thumbnail') ?>">
										<?php echo get_the_title($prev_post->ID) ?>
									</a>
								<?php endif; ?>
							</div>
							<div class="samecategory-link-right">
								<?php if ($next_post) : ?>
									<a class="samecategory-link-next" href="<?php echo get_permalink($next_post->ID) ?>">
										<?php echo get_the_title($next_post->ID) ?>
										<img class="samecategory-link__img" src="<?php echo get_the_post_thumbnail_url($next_post->ID, 'thumbnail') ?>">
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php
	else :
	?>
		<p>記事がありません</p>
	<?php
	endif;
	?>

	<?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
