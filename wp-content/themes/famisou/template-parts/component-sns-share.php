<?php
// snsシェアボタン
// Facebook
$facebook_url = get_theme_mod('facebook_url');
// Twitter
$twitter_url = 'https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . get_the_title();
// LINE
$line_url = 'https://social-plugins.line.me/lineit/share?url=' . get_the_permalink();
// Instagram
$instagram_url = get_theme_mod('instagram_url');
// 投稿のURLを取得
$post_url = urlencode(get_permalink());
// 投稿のタイトルを取得
$post_title = urlencode(get_the_title());
?>
<div class="component-sns-share">
  <ul class="sns-share-list">
    <li class="sns-share-item">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" class="sns-share__link" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-facebook"></i>
      </a>
    </li>
    <li class="sns-share-item">
      <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" class="sns-share__link" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-twitter-x"></i>
      </a>
    </li>
    <li class="sns-share-item">
      <a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_permalink(); ?>" class="sns-share__link" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-line"></i>
      </a>
    </li>
  </ul>
</div>