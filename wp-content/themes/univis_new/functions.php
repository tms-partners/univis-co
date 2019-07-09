<?php
// ヘッダーにある不要なタグを削除する
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
// 自動br、p削除防止
remove_filter('the_content', 'wpautop');

// タグをリストアップし目次化
function get_custom_content() {
	//本文からh2タグをリストアップ
	$content = get_the_content();
	$h2_list = array();
 	preg_match_all('/<h2>(.*?)<\/h2>/', $content, $h2_list);

	//置換・目次の準備
	list($h2_outer, $h2_inner) = $h2_list;
	$search = $h2_outer;
	$replace = array();
	$li_list = array();

	foreach ($h2_inner as $key => $val) {
    	$replace[] = sprintf('<h2 class="article_h2 js-scroll" id="link%s">%s</h2>', $key, $val);
    	$li_list[] = sprintf('<a href="#link%s"><li>&gt;&nbsp;&nbsp;%s</li></a>', $key, $val);
	}

	//目次部分
	$nav = '<nav class="article_nav"><ul>' .  implode("\n", $li_list) ."</ul></nav>";

	//ショートコードを置換
	$url_replace = array(
  		//'変更前' => '変更後',
    	'[url]' => get_bloginfo('url'),
    	'[template_url]' => get_bloginfo('template_url')
  	);
	$content = str_replace(array_keys($url_replace), $url_replace, $content);
	//replace wp shortcodes and filters
  $content = apply_filters( 'the_content', $content );
  $content = str_replace( ']]>', ']]&gt;', $content );

	//リンク用のidを埋め込んだ本文
	$body = str_replace($search, $replace, $content);

	// 配列に格納し個別出力
	$consequence = array();
	$consequence['nav'] = $nav;
	$consequence['body'] = $body;

	return $consequence;
}
// パンくずリスト生成
function breadCrumb() {
	$title = get_the_title();
	$content = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></span> &gt; ';
	if (is_404()) {
		// 404ページ処理
		$content = $content . '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">お探しのページは見つかりませんでした</span><meta property="position" content="2"></span>';
	} elseif(is_page()) {
		// 固定ページ処理
		global $post;
		$parent_id = $post->post_parent;
		$post_name = get_post($parent_id)->post_name;
		$post_title = get_post($parent_id)->post_title;
		if ($parent_id != 0) {
			// 親ページが存在しない場合
			$content = $content . '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . $post_name . '""><span itemprop="name">' . $post_title . '</span></a><meta property="position" content="2"></span>' .'&gt; ' . '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $title . '</span><meta property="position" content="3"></span>';
		} else {
			// 親ページが存在する場合
			$content = $content . '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $title . '</span><meta property="position" content="2"></span>';
		}
	} elseif (is_archive()) {
		// カテゴリー別アーカイブページ
		$cat = get_queried_object();
		$content = $content . '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $cat->cat_name . '</span><meta property="position" content="2"></span>';
	} elseif (is_single()) {
		// 投稿ページ

	}
	$content = $content . '</div>';
	echo $content;
}
// 子ページかどうかを判定
function is_subpage() {
    global $post; // $post には現在の固定ページの情報があります
    if ( is_page() && $post->post_parent ){ // 現在の固定ページが親ページを持つかどうかをチェックします
        $parentID = $post->post_parent; // 親ページの ID を取得します
        return $parentID; // 親ページの ID を返します
    } else { // 親ページを持っていない場合
        return false; // false を返します
    };
};
