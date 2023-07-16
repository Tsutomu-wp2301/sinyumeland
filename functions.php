<?php
add_theme_support( 'post-thumbnails' );
add_image_size('150_thumbnail', 150, 75, true );
add_image_size('280_thumbnail', 280, 125, true );
add_image_size('640_thumbnail', 640, 424, true );
set_post_thumbnail_size( 200, 142, true );


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

function enqueue_my_scripts() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3');
	wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.js',array('jquery'), NULL );
	wp_enqueue_script('glance', get_template_directory_uri() . '/js/glance/jquery.glance.js',array('jquery'), NULL );
	wp_enqueue_script('audio', get_template_directory_uri() . '/js/audiojs/audio.min.js',array('jquery'), NULL );
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',array('jquery'), NULL );
	wp_enqueue_script('agent', get_template_directory_uri() . '/js/agent.js',array('jquery'), NULL );
	wp_enqueue_script('facebook-sdk', get_template_directory_uri() . '/js/facebook.js', array(), '1.0', true);/* facebookの表示 */
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.2');
	wp_enqueue_script('glide', get_template_directory_uri() . '/js/jquery.glide.js',array('jquery'), NULL );
	wp_enqueue_script('FooTable', get_template_directory_uri() . '/js/FooTable.js',array('jquery'), NULL );
	wp_enqueue_script('easySlideText', get_template_directory_uri() . '/js/easySlideText.js',array('jquery'), NULL );
	wp_enqueue_script('pulltorefresh', get_template_directory_uri() . '/js/pulltorefresh.js',array('jquery'), NULL );
	wp_enqueue_script('pulltorefresh2', get_template_directory_uri() . '/js/swiperAll.js',array('jquery'), NULL );
	wp_enqueue_script('pulltorefresh3', get_template_directory_uri() . '/js/swiper.js',array('jquery'), NULL );
	wp_enqueue_script('pulltorefresh4', get_template_directory_uri() . '/js/addOpen.js',array('jquery'), NULL );/* トグルクラス */
	wp_enqueue_script('hiro','/wp-content/themes/yumelandgroup01/js/jquery-hiro.js',array('jquery'), NULL );
	wp_enqueue_script('headerClose1','/wp-content/themes/yumelandgroup01/js/headerClose.js',array('jquery'), NULL );
	wp_enqueue_script('logofadein','/wp-content/themes/yumelandgroup01/js/logoFadeIn.js',array('jquery'), NULL );
	wp_enqueue_script('slider--sp', get_template_directory_uri() . '/js/hiromslide/hiromslide.js',array('jquery'), NULL );
	wp_enqueue_script('underLine', get_template_directory_uri() . '/js/underLine.js',array('jquery'), NULL );
	wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js', array(), '3.4.1', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');


function custom_attribute( $html ){
    $myclass = 'myclass'; // クラス名をサムネイル画像に追加する
    return preg_replace('/class=".*\w+"/', 'class="'. $myclass .'"', $html);
}
add_filter( 'post_thumbnail_html', 'custom_attribute' );
