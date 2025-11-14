<?php
/*
Template Name: membership
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="membership-prepare">
    <div class="prepare-block">
      <div class="prepare-head">
        <h2 class="prepare__h">
          葬儀費用の事前準備に<br class="display_sp">2つの制度をご用意しております
        </h2>
      </div>
      <div class="prepare-body">
        <h3 class="prepare__h-sub">
          葬儀費用の事前準備
        </h3>
        <p class="prepare__p">
          日常生活の中で、できるだけ考えたくないことかもしれませんが、どのような人生にも終焉は訪れます。誰もがいつかは遺族になり、告別式の参列者になることも避けられません。悲しみに打ちひしがれ、心も動転するような場面で、遺族や親しい人たちを支えるために、しきたりや作法があるともいえます。最近は死を忌むべきことと考えるより、人生を全うすることとして、自らの葬儀の演出を前もって指示しておいたり、希望しておくことも広まってきました。<br>いざというとき慌てないために、基本的な葬儀の流れ、会葬のマナーは心得ておきましょう。
        </p>
        <div class="prepare-table-wrap js-scrollable">
          <table>
            <thead>
              <tr>
                <th>名称</th>
                <td>1万円会員登録</td>
                <td>終身保険みどりの終身<br>メモリアルⅢ</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th></th>
                <td>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-card.jpg" class="prepare__img">
                </td>
                <td>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-display.jpg" class="prepare__img">
                </td>
              </tr>
              <tr>
                <th>概要</th>
                <td>ご加入メリット：<br>会員登録で10万円の式場利用料が無料</td>
                <td>
                  ご加入メリット：<br>
                  ・途中で解約しても解約払戻金をお支払い致します。<br>
                  ・保険料は上がりません。<br>
                  ・一生涯保証！<br>
                  <br>
                  ご葬儀費用を保険金から直接支払うことができる！普通の保険と違い、ご葬儀費用のお支払いに保険金などを直接ファミそうへお支払いすることができ、ご葬儀費用の請求・お支払いなどにムダな時間がかからなくなります。<br>
                  <br>
                  ＊満81歳～85歳の方は、100歳払済のみのお申込みとなります。<br>
                  ＊詳しくは<br>
                  「パンフレット（契約概要）」<br>
                  「注意喚起情報・ご契約のしおり・約款」<br>
                  をご覧ください。
                </td>
              </tr>
              <tr>
                <th>お問い合わせ先</th>
                <td>
                  【お問合せ・ご登録はお電話にて】<br>
                  <a href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a><br>
                  24時間365日受付 / 携帯からもOK
                </td>
                <td>
                  【お問合せ・ご相談はお電話にて】<br>
                  <a href="tel:0120-566-322">0120-566-322</a><br>
                  受付時間／9：00〜17：00<br>
                  （土・日・祝日・年末年始を除く）
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="membership-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>