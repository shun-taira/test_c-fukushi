<?php
/*
Template Name: beginner
*/

get_header();
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="beginner">
    <div class="beginner-block">
      <h1 class="beginner__h">
        お葬式がはじめての方へ
      </h1>
      <p class="beginner__p">
        当社のこだわり、お葬式後のアフターサポートについて<br class="display_pc">ご説明いたします。
      </p>
      <ul class="beginner-list">
        <li class="beginner-item">
          <a href="<?php echo home_url(); ?>/flow" class="beginner-link">
            お葬式の流れ
          </a>
        </li>
        <li class="beginner-item">
          <a href="<?php echo home_url(); ?>/reasons" class="beginner-link">
            選ばれる理由
          </a>
        </li>
        <li class="beginner-item">
          <a href="<?php echo home_url(); ?>/faq" class="beginner-link">
            よくある質問
          </a>
        </li>
      </ul>
    </div>

    <?php get_template_part('template-parts/component-flow'); ?>

  </div>
</section>

<?php get_template_part('template-parts/component-banner'); ?>
<?php get_template_part('template-parts/component-plan'); ?>
<?php
get_footer();
?>