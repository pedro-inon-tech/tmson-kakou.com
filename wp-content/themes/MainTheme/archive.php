<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name: お知らせ
*/
?>
<main class="">
  <section class="l-page-FV">
    <div class="l-page-FV__wrap">
      <div class="l-page-FV__left">
        <h1>NEWS
          <p>お知らせ</p>
        </h1>
      </div>
      <div class="l-page-FV__desc">
        <div class="l-breadcrumb p-newsBreadcrumb">
          <?php bcn_display(); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="p-new__wrap">
    <div class="l-inner">
      <?php query_posts(array('post_type' => 'post', 'posts_per_page' => 1)); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="p-news__item">
              <div class="p-news__left">
                <div class="p-news__time">
                  <time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>" class="">
                    <?php echo get_the_date(); ?>
                  </time>
                </div>
              </div>
              <div class="p-news__name line-clamp">
                <?php echo get_the_title(); ?>
              </div>
            </div>
          </a>
      <?php endwhile;
      endif;
      wp_reset_query(); ?>
    </div>

    <div class="Pagenation">
      <?php the_posts_pagination(
        array(
          'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
          'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
          'prev_text'     => '<span class="prev"></span>', // 「前へ」リンクのテキスト
          'next_text'     => '<span class="next"></span>', // 「次へ」リンクのテキスト
          'type'          => 'list', // 戻り値の指定 (plain/list)
        )
      ); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>