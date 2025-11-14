<?php
/*
Template Name: company
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="company">
    <div class="company-block">
      <div class="company-head">
        <h1 class="company__h">ごあいさつ</h1>
      </div>
      <div class="company-body">
        <div class="company-wrap">
          <?php /* 
          <h2 class="company__h-sub">
            お葬式をもっと自由に
          </h2>
           */ ?>
          <p class="company__p">
            “生者必滅・会者定離”と昔から使い古されたこの世のきびしい別れの言葉の通り、<br class="display_pc">だれもがこの真理を避けて通ることはできません。<br class="display_pc">この悲しい 出来事の為に私共の役割があり、<br class="display_pc">人として、人生の最後を送る儀式が葬儀式だと思います。<br>
            <br>
            その儀式にふさわしく、<br class="display_pc">心よりそこに存在する皆様の心にふれる形の物を残して行きたい……。<br>
            私共は此の意義深い仕事を真心を込めてご奉仕させていただく事が<br class="display_pc">社会ヘの報恩になる事を信じ日々努めさせていただいております。<br>
            <br>
            御葬儀式は心を形にした物だと思います。<br>
            一言でお葬儀式とは申しましても、お通夜の準備より、<br class="display_pc">お葬儀終了後迄しなくてはならない事がたくさんあります。<br class="display_pc">どの―つも欠かす事のできない事ばかりですが<br class="display_pc">一貫しての私共の心は、どのお葬儀に対しましても<br class="display_pc">厳粛おごそかを基本として、心を込めて務めさせていただき、<br class="display_pc">価格においても皆様のご予算に合わし、<br class="display_pc">その中で私共のベストを尽くして行きたいと思っております。<br>
            どうかご遠慮をなさらずに、お気軽にご相談下さい。<br>
            その状況に合わしたお見積りを出させていただき、又細かくご説明をさせていただきます。<br>
            <br>
            私共に対するご意見・ご要望等がありましたら<br class="display_pc">是非ともご教示いただけますようお願い申し上げます。<br>
            その一つ一つを又私共の知識として<br class="display_pc">社会へのお役に立たせていただきます事をお誓い申し上げます。<br>
            今後共私共一同心を合わせ努力をして行きたく思っておりますので、<br class="display_pc">どうか宜しくお願い申し上げます。
          </p>
          <span class="company-ceo">
            取締役 金澤 一史
          </span>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="company-overview">
      <div class="overview-block">
        <div class="overview-head">
          <h2 class="overview__h">会社概要</h2>
        </div>
        <div class="overview-body">
          <table>
            <tbody>
              <tr>
                <th>会社名</th>
                <td>有限会社中央福祉葬祭</td>
              </tr>
              <tr>
                <th>取締役</th>
                <td>金澤 一史</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>TEL：<a href="tel:048-281-3771">048-281-3771</a><br>FAX：048-281-3921</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>〒333-0833<br>埼玉県川口市西新井宿603-3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="overview-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12936.266113547372!2d139.7260243!3d35.8473722!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601894fbc1c743ef%3A0x1eb385d5af0dc49e!2z5Lit5aSu56aP56WJ6JGs56Wt!5e0!3m2!1sja!2sjp!4v1724758697230!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
</section>

<section>
  <div class="company-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>