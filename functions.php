<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 142, true );
add_image_size('640_thumbnail', 640, 424, true );

/* サイドウィジェット */
if ( function_exists('register_sidebar') )
	register_sidebars(3);
	
/* OGP http://webbingstudio.com/weblog/cms/entry-486.html */

function post_ogp($id) {
	$noImg = 'ogp_default.jpg';
	//アイキャッチ画像を取得
	$eyeImg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
 
	if ($eyeImg){
		//アイキャッチ画像があれば優先
		echo $eyeImg[0];
	} else {
		//エントリーに属する画像を取得
		$query = 'post_parent=' . $id . '&post_type=attachment&post_mime_type=image';
		$postImg = get_children($query);
 
		if (!empty($postImg)){
			//最初にアップロードされた画像IDを取得
			$keys = array_keys($postImg);
			$num = $keys[sizeOf($keys)-1];
 
			//画像IDからサムネイルを取得
			$thumb = wp_get_attachment_image_src($num, 'thumbnail');
 
			echo clean_url($thumb[0]);
		} else {
			echo get_bloginfo('template_directory') . '/' . $noImg;
		}
	}
}

/*サムネイル表示*/
add_theme_support('post-thumbnails');
	
?>