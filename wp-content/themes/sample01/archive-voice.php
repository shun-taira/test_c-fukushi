<?php
get_header();
?>

<main id="primary" class="site-main">

	<section>
		<div class="add-hero">
			<div class="wrap-add-hero">
				<div class="jumbotron mb-0 d-flex align-items-center jumbotron-fluid add-hero-content" style="background-image: url('https://sougiya.jp/sample01/wp-content/uploads/2022/04/AdobeStock_277485067.jpeg')">
					<div class="container mx-auto">
						<h1 class="h3 add-hero__h">お客様の声</h1>
						<div class="add-hero__p">葬儀後にお客様からアンケートをいただいております。<br>アンケートにお寄せいただいたお客様の声を一部ご紹介いたします。</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="voice">
			<div class="wrap-voice container-fluid py-14 py-md-30">
				<h2 class="h3 voice__h text-center mb-16 mb-md-30">
					お客様からのメッセージ </h2>
				<?php if (have_posts()) : ?>
					<ul class="list-group list-group-flush voice-list">
						<?php while (have_posts()) : the_post(); ?>
							<li class="list-group-item">
								<div class="row align-items-center">
									<div class="col-24 col-md-7 col-lg-5">
										<figure class="h6 voice-list__figure text-center">
											<?php the_post_thumbnail('full', array("class" => "img-fluid voice-list__img")); ?>
											<figcaption class="voice-list__cap">
												<?php the_excerpt(); ?>
											</figcaption>
										</figure>
									</div>
									<div class="col-24 col-md-17 col-lg-19">
										<h3 class="h5 voice-list__h">
											<?php the_title(); ?>
										</h3>
										<div class="voice-list__content">
											<?php
											if (mb_strlen($post->post_content, 'UTF-8') > 100) {
												$content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8'));
												echo $content . '……';
												echo '<div class="text-right mt-4"><a href="' . get_the_permalink() . '" class="btn btn-primary btn-sm">続きを見る</a></div>';
											} else {
												echo str_replace('\n', '', strip_tags($post->post_content));
											}
											?>
										</div>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php bootstrap_pagination(); ?>
				<?php else : ?>
					<p>まだ記事がありません</p>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
