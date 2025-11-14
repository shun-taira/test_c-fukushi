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
        <h1 class="company__h">ご挨拶</h1>
      </div>
      <div class="company-body">
        <div class="company-wrap">
          <h2 class="company__h-sub">
            お葬式をもっと自由に
          </h2>
          <p class="company__p">
            自由なお葬式では、伝統的で格式高いご葬儀も、<br class="display_pc">
            従来の価値観にとらわれない新しいカタチのご葬儀も、<br class="display_pc">
            ひとしく尊い時間であると考えています。<br>
            だからこそ私共は、故人様の人生に相応しいお見送りを実現するため、<br class="display_pc">
            ご遺族様の「想い」にとことん向き合います。<br>
            自由なお葬式は、ご遺族様お一人おひとりの<br class="display_pc">
            「そんなことできるの⁉」をカタチにする葬儀社です。
          </p>
          <span class="company-ceo">
            代表取締役社長　川本賢司
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
                <td>ファミそう株式会社</td>
              </tr>
              <tr>
                <th>設立</th>
                <td>令和4年6月1日</td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td>葬祭の儀式設備の提供及び儀式全般の請負<br>葬祭に付随する物品の企画、販売及び斡旋<br>葬祭の装飾設備の施工並びにその手続き全般<br>葬祭に関する情報の提供及び式典の代行、仲介、斡旋<br>一般貸切旅客自動車運送事業<br>一般貨物自動車運送事業<br>一般乗用旅客自動車運送事業<br>前各号に付帯関連する一切の事業</td>
              </tr>
              <tr>
                <th>代表取締役社長</th>
                <td>川本賢司</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>TEL：<a href="tel:03-6806-7440">03-6806-7440</a><br>FAX：03-6806-7480</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>〒121-0064　東京都足立区保木間2丁目2-6</td>
              </tr>
              <tr>
                <th>営業</th>
                <td>年中無休（電話の受付は24 時間対応しております。）</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="overview-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12954.162863613526!2d139.75793814832022!3d35.737512411786895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188f3ec5ad4c95%3A0x34d726523cdb95f8!2z6Ieq55Sx44Gq44GK6JGs5byPIOeUuuWxiw!5e0!3m2!1sja!2sjp!4v1723905963536!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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