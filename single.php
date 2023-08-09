<?php get_header(); ?>

<section class="single-page">
  <ul class="post-categorie">
    <li class="lastUpdate">
      <time datetime="<?php the_modified_date("Y-m-d"); ?>"><?php the_modified_date("Y-m-d"); ?></time>
    </li>
    <li class="this-category">
      <span>#</span><?php the_category(); ?>
    </li>
  </ul>
  <h1 class="blog-heading one"><?php the_title(); ?></h1>
  <div class="contents">
    <div>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<div class="page-nav">
  <div class="previous-page">
    <?php previous_post_link('%link', '前の記事へ'); ?>
  </div>
  <a class="back-to-index" href="<?php echo home_url('/archive') ?>">
    一覧へ戻る
  </a>
  <div class="behind-page">
    <?php next_post_link('%link', '次の記事へ'); ?>
  </div>
</div>

<?php get_footer(); ?>