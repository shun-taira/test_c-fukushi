<?php

/*
Template Name: flower
*/

get_header();
$file_id = get_field('file_pdf');
if ($file_id) {
  $file_url = wp_get_attachment_url($file_id);
}
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'add-hero');

  endwhile; // End of the loop.
  ?>

  <section>
    <div class="flower">
      <div class="wrap-flower container-fluid py-14 py-md-30">
        <?php /* 
				<nav>
					<div class="flower-tab nav nav-tabs mb-10" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">エリアA</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">エリアB</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">エリアC</a>
					</div>
				</nav>
         */ ?>
        <div class="flower-tab-content tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <section>
              <div class="block-flower-kyouka py-20">
                <h2 class="flower__h h3 text-center mb-12 mb-md-30">
                  生花
                </h2>
                <p class="flower__p mb-10 mb-md-24">
                  祭壇の両脇にお飾りする供花になります。ご予算に応じて各種取り揃えております。<br>
                  ※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
                </p>
                <ul class="row flower__list list-unstyled mb-10">
                  <li class="flower__item col-24 col-md-12 col-lg-12">
                    <div class="card">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/flower/flower15000.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-center">生花（洋菊）1基<span class="h4 flower__list-price ml-4">16,500円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-12">
                    <div class="card">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/flower/flower20000.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-center">生花（洋菊）1基<span class="h4 flower__list-price ml-4">22,000円</span>(税込)</h3>
                      </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-12">
                    <div class="card">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/flower/flower35000.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-center">生花（洋花）1基<span class="h4 flower__list-price ml-4">38,500円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-12">
                    <div class="card">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/flower/flower50000.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-center">生花（洋花）1基<span class="h4 flower__list-price ml-4">55,000円</span>(税込)</h3>
                      </div>
                  </li>
                </ul>
                <?php /* 
                <div class="flower-btn text-center">
                  <a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
                    ご注文方法はこちら
                  </a>
                </div>
                  */ ?>
              </div>
            </section>
            <?php /* 
            <section>
              <div class="block-flower-kyouka py-20">
                <h2 class="flower__h h3 text-center mb-12 mb-md-30">
                  籠花
                </h2>
                <p class="flower__p mb-10 mb-md-24">
                  祭壇の両脇にお飾りする籠花になります。ご予算に応じて各種取り揃えております。<br>
                  ※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
                </p>
                <ul class="row flower__list list-unstyled mb-10">
                  <li class="flower__item col-24 col-md-12 col-lg-8">
                    <div class="card">
                      <img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-8">
                    <div class="card">
                      <img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-8">
                    <div class="card">
                      <img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-8">
                    <div class="card">
                      <img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-8">
                    <div class="card">
                      <img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-8">
                    <div class="card">
                      <img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="flower-btn text-center">
                  <a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
                    ご注文方法はこちら
                  </a>
                </div>
              </div>
            </section>
            */ ?>

            <section>
              <div class="block-flower-kyouka py-20">
                <h2 class="flower__h h3 text-center mb-12 mb-md-30">
                  供物
                </h2>
                <p class="flower__p mb-10 mb-md-24">
                  祭壇の両脇にお飾りする供物になります。ご予算に応じて各種取り揃えております。<br>
                  ※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
                </p>
                <ul class="row flower__list list-unstyled mb-10">
                  <li class="flower__item col-24 col-md-12 col-lg-12">
                    <div class="card">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/flower/kumotsu-kudamono-15000.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-center">供物(果物) 1基<span class="h4 flower__list-price ml-4">16,500円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                  <li class="flower__item col-24 col-md-12 col-lg-12">
                    <div class="card">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/flower/kumotsu-kanzume-15000.jpg" alt="" class="img-fluid flower__img">
                      <div class="card-body">
                        <h3 class="h6 flower__list-title text-center">供物(缶詰) 1基<span class="h4 flower__list-price ml-4">16,500円</span>(税込)</h3>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="flower-btn text-center">
                  <a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
                    ご注文方法はこちら
                  </a>
                </div>
              </div>
            </section>


          </div>
          <?php /* 
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<section>
							<div class="block-flower-kyouka py-20">
								<h2 class="flower__h h3 text-center mb-12 mb-md-30">
									エリアBの生花　
								</h2>
								<p class="flower__p mb-10 mb-md-24">
									祭壇の両脇にお飾りする供花になります。ご予算に応じて各種取り揃えております。<br>
									※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
								</p>
								<ul class="row flower__list list-unstyled mb-10">
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
								</ul>
								<div class="flower-btn text-center">
									<a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
										ご注文方法はこちら
									</a>
								</div>
							</div>
						</section>
						<section>
							<div class="block-flower-kyouka py-20">
								<h2 class="flower__h h3 text-center mb-12 mb-md-30">
									エリアBの籠花　
								</h2>
								<p class="flower__p mb-10 mb-md-24">
									祭壇の両脇にお飾りする籠花になります。ご予算に応じて各種取り揃えております。<br>
									※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
								</p>
								<ul class="row flower__list list-unstyled mb-10">
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
								</ul>
								<div class="flower-btn text-center">
									<a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
										ご注文方法はこちら
									</a>
								</div>
							</div>
						</section>
						<section>
							<div class="block-flower-kyouka py-20">
								<h2 class="flower__h h3 text-center mb-12 mb-md-30">
									エリアBの供物　
								</h2>
								<p class="flower__p mb-10 mb-md-24">
									祭壇の両脇にお飾りする供物になります。ご予算に応じて各種取り揃えております。<br>
									※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
								</p>
								<ul class="row flower__list list-unstyled mb-10">
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
								</ul>
								<div class="flower-btn text-center">
									<a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
										ご注文方法はこちら
									</a>
								</div>
							</div>
						</section>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						<section>
							<div class="block-flower-kyouka py-20">
								<h2 class="flower__h h3 text-center mb-12 mb-md-30">
									エリアCの生花　
								</h2>
								<p class="flower__p mb-10 mb-md-24">
									祭壇の両脇にお飾りする供花になります。ご予算に応じて各種取り揃えております。<br>
									※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
								</p>
								<ul class="row flower__list list-unstyled mb-10">
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">生花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
								</ul>
								<div class="flower-btn text-center">
									<a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
										ご注文方法はこちら
									</a>
								</div>
							</div>
						</section>
						<section>
							<div class="block-flower-kyouka py-20">
								<h2 class="flower__h h3 text-center mb-12 mb-md-30">
									エリアCの籠花　
								</h2>
								<p class="flower__p mb-10 mb-md-24">
									祭壇の両脇にお飾りする籠花になります。ご予算に応じて各種取り揃えております。<br>
									※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
								</p>
								<ul class="row flower__list list-unstyled mb-10">
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">籠花1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
								</ul>
								<div class="flower-btn text-center">
									<a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
										ご注文方法はこちら
									</a>
								</div>
							</div>
						</section>
						<section>
							<div class="block-flower-kyouka py-20">
								<h2 class="flower__h h3 text-center mb-12 mb-md-30">
									エリアCの供物　
								</h2>
								<p class="flower__p mb-10 mb-md-24">
									祭壇の両脇にお飾りする供物になります。ご予算に応じて各種取り揃えております。<br>
									※ 季節や地域によって、お花の内容や大きさが写真と異なる場合がございます。予めご了承くださいませ。
								</p>
								<ul class="row flower__list list-unstyled mb-10">
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
									<li class="flower__item col-24 col-md-12 col-lg-8">
										<div class="card">
											<img src="http://54.150.14.70/sample-funeral-1/wp-content/uploads/2022/03/kyouka_sample.jpg" alt="" class="img-fluid flower__img">
											<div class="card-body">
												<h3 class="h6 flower__list-title text-right">供物1基<span class="h4 flower__list-price ml-4">66,000円</span>(税込)</h3>
											</div>
										</div>
									</li>
								</ul>
								<div class="flower-btn text-center">
									<a href="#fax" class="flower-btn__link btn btn-primary btn-lg rounded-0">
										ご注文方法はこちら
									</a>
								</div>
							</div>
						</section>
					</div>
           */ ?>
        </div>
      </div>
    </div>

  </section>

  <section>
    <div class="order" id="fax">
      <div class="wrap-order container-fluid pb-14 pb-md-30">
        <div class="card">
          <h5 class="card-header">供花・供物のご注文方法</h5>
          <div class="card-body">
            <h5 class="card-title">FAXでのご注文</h5>
            <p class="card-text">下記ボタンよりFAX専用の申込み用紙をダウンロードして、必要事項をご記入の上、FAX送信ください。</p>
            <div class="text-center mt-20 mb-20">
              <a href="<?php echo esc_url($file_url); ?>" class="btn btn-secondary text-white btn-lg rounded-0" download="供花発注書.pdf">申込用紙をダウンロードする</a>
            </div>
            <div class="text-center">
              <div class="card d-inline-block border-primary">
                <div class="card-body text-center">
                  <h2 class="card-title text-center h6">
                    ご葬儀に関するご依頼・<br class="d-block d-md-none">お見積もり・ご相談はこちらから
                  </h2>
                  <?php /* 
                    <p class="card-text text-center">
                      生前のご相談、お急ぎの相談など<br>各サービスについても<br>お気軽にお問い合わせください。
                    </p>
                   */ ?>
                  <div class="help-tel d-inline-block">
                    <a href="tel: <?php echo $freedial_number ? $freedial_number : ''; ?>" class="d-inline-block">
                      <p class="mb-0 site-nav-tel__p mb-4 text-center">
                        24時間365日受付 / 携帯からもOK
                      </p>
                      <?php
                      $freedial_number = get_theme_mod('freedial_number');
                      ?>
                      <div class="d-flex align-items-center">
                        <span class="mr-4">
                          <img class="img-fluid site-nav-tel__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/ico_tel.svg">
                        </span>
                        <span itemprop="telephone" class="site-nav-tel__number">
                          <?php echo $freedial_number ? $freedial_number : ''; ?>
                        </span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
