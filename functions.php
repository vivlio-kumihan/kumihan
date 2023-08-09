<?php
// 外観／サイドバー表示
function theme_slug_widgets_init()
{
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
  ));
}
add_action('widgets_init', 'theme_slug_widgets_init');

// アイキャッチ画像表示
add_theme_support('post-thumbnails');

// JavaScriptの設置場所を指定
function behavior_js()
{
  wp_enqueue_script(
    'behavior_js',
    get_template_directory_uri() . '/js/behavior.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'behavior_js');

// archive.php 投稿一覧ページのための設定
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    // 任意のスラッグ名を登録←アーカイブページが有効になる。
    $args['has_archive'] = 'archive';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
