<?php
$page_id = get_page_by_path('faq')->ID;
?>
<div class="component-faq" id="accordion-faq">
  <div class="faq-head">
    <h1 class="faq__h">
      家族葬・葬儀でよくあるご質問
    </h1>
    <p class="faq__p">
      お客様からよくいただくご質問です。
    </p>
  </div>
  <div class="faq-body">
    <h2 class="faq__h-sub">
      質問カテゴリー
    </h2>
    <section>
      <?php if (have_rows('faq_cate', $page_id)): ?>
        <div class="faq-category">
          <ul class="faq-category-list">
            <?php while (have_rows('faq_cate', $page_id)): the_row(); ?>
              <li class="faq-category-item">
                <span data-title="<?php echo urlencode(get_sub_field('faq_title', $page_id)); ?>" class="faq-category-link">
                  <?php the_sub_field('faq_title', $page_id); ?>
                </span>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php if (have_rows('faq_cate', $page_id)): ?>
        <div class="faq-content">
          <?php while (have_rows('faq_cate', $page_id)) : the_row(); ?>
            <?php
            $active = get_row_index() == 1 ? ' active' : '';
            ?>
            <div class="faq-content-item <?php echo $active; ?>" data-content="<?php echo urlencode(get_sub_field('faq_title', $page_id)); ?>">
              <h3 class="faq-content-item__h">
                <?php the_sub_field('faq_title', $page_id); ?>
              </h3>
              <div class="faq-content-item-wrap">
                <?php while (have_rows('faq_qa', $page_id)) : the_row(); ?>
                  <div class="faq-content-qa">
                    <div class="faq-content-question triger-open">
                      <span class="faq-content-question__q">
                        Q
                      </span>
                      <span class="faq-content-question__text">
                        <?php the_sub_field('faq_q', $page_id); ?>
                      </span>
                    </div>
                    <div class="faq-content-answer">
                      <span class="faq-content-answer__a">
                        A
                      </span>
                      <span class="faq-content-answer__text">
                        <?php the_sub_field('faq_a', $page_id); ?>
                      </span>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
  <div class="faq-link">
    <a href="<?php echo home_url(); ?>/faq" class="faq__link">詳しく見る</a>
  </div>
</div>