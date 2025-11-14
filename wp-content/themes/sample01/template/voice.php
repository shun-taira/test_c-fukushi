<?php

/*
Template Name: voice
*/

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'add-hero');

  endwhile; // End of the loop.
  ?>

  <section>
    <div class="voice">
      <div class="wrap-voice container-fluid py-14 py-md-30">
        <h2 class="h3 voice__h text-center mb-16 mb-md-30">
          お客様からのメッセージ </h2>
        <ul class="list-group list-group-flush voice-list">

          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-24 col-md-7 col-lg-5">
                <figure class="h6 voice-list__figure text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/ロングヘアーの女の人の無料アイコン素材-1.jpeg" alt="" class="img-fluid voice-list__img">
                  <figcaption class="voice-list__cap">平成28年4月<br>ご利用プラン：家族葬30<br>K 様</figcaption>
                </figure>
              </div>
              <div class="col-24 col-md-17 col-lg-19">
                <h3 class="h5 voice-list__h">私たちの気持ちを大切にして一緒に考えていただきました。</h3>
                <p class="voice-list__p">この度は大変お世話になりありがとうございました。 茫然自失の私と娘をずっと支えていただきました。 私たちに接してくださったすべての方が輻輳、態度、言葉使い、思いやりといった最高のもてなしをしてくださいました。 仏壇を選ぶときも私たちの気持ちを大切にして一緒に考えていただきました。</p>
              </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-24 col-md-7 col-lg-5">
                <figure class="h6 voice-list__figure text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/ロングヘアーの女の人の無料アイコン素材-1.jpeg" alt="" class="img-fluid voice-list__img">
                  <figcaption class="voice-list__cap">平成28年4月<br>ご利用プラン：家族葬30<br>K 様</figcaption>
                </figure>
              </div>
              <div class="col-24 col-md-17 col-lg-19">
                <h3 class="h5 voice-list__h">私たちの気持ちを大切にして一緒に考えていただきました。</h3>
                <p class="voice-list__p">この度は大変お世話になりありがとうございました。 茫然自失の私と娘をずっと支えていただきました。 私たちに接してくださったすべての方が輻輳、態度、言葉使い、思いやりといった最高のもてなしをしてくださいました。 仏壇を選ぶときも私たちの気持ちを大切にして一緒に考えていただきました。</p>
              </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-24 col-md-7 col-lg-5">
                <figure class="h6 voice-list__figure text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/ロングヘアーの女の人の無料アイコン素材-1.jpeg" alt="" class="img-fluid voice-list__img">
                  <figcaption class="voice-list__cap">平成28年4月<br>ご利用プラン：家族葬30<br>K 様</figcaption>
                </figure>
              </div>
              <div class="col-24 col-md-17 col-lg-19">
                <h3 class="h5 voice-list__h">私たちの気持ちを大切にして一緒に考えていただきました。</h3>
                <p class="voice-list__p">この度は大変お世話になりありがとうございました。 茫然自失の私と娘をずっと支えていただきました。 私たちに接してくださったすべての方が輻輳、態度、言葉使い、思いやりといった最高のもてなしをしてくださいました。 仏壇を選ぶときも私たちの気持ちを大切にして一緒に考えていただきました。</p>
              </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-24 col-md-7 col-lg-5">
                <figure class="h6 voice-list__figure text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/ロングヘアーの女の人の無料アイコン素材-1.jpeg" alt="" class="img-fluid voice-list__img">
                  <figcaption class="voice-list__cap">平成28年4月<br>ご利用プラン：家族葬30<br>K 様</figcaption>
                </figure>
              </div>
              <div class="col-24 col-md-17 col-lg-19">
                <h3 class="h5 voice-list__h">私たちの気持ちを大切にして一緒に考えていただきました。</h3>
                <p class="voice-list__p">この度は大変お世話になりありがとうございました。 茫然自失の私と娘をずっと支えていただきました。 私たちに接してくださったすべての方が輻輳、態度、言葉使い、思いやりといった最高のもてなしをしてくださいました。 仏壇を選ぶときも私たちの気持ちを大切にして一緒に考えていただきました。</p>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
