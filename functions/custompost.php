<?php
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*

カスタム投稿の設定

*/

/*note: INDEXの表示は、コメントの「 index: 」でハイライト表示してください。*/

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
///*index: カスタム投稿を追加*/
if ( ! function_exists( 'custompost' ) ) {
	function custompost() {

		register_post_type(
			'member',
			array(
				'labels' => array(

					'name' => __( '会員' ),
					'singular_name' => __( '会員' )
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' =>6,
				'supports' => array( 'title', 'custom-fields' ),
			)
		);
		// register_post_type( 'product',
		//  array(
		// 	 'labels' => array(
		// 		 'name' => __( '商品情報' ),
		// 		 'singular_name' => __( '商品情報' )
		// 	 ),
		// 	 'public' => true,
		// 	 'has_archive' => false,
		// 	 'menu_position' =>7,
		// 	 'supports' => array( 'title','thumbnail', 'custom-fields' ),
		//  )
		// );
		// register_taxonomy(
		// 	'season',
		// 	'product',
		// 	array(
		// 		'hierarchical' => true,
		// 		'update_count_callback' => '_update_post_term_count',
		// 		'label' => '季節',
		// 		'singular_label' => '季節',
		// 		'public' => true,
		// 		'show_ui' => true
		// 	)
		// );
		// register_post_type( 'member',
		// 		array(
		// 			'labels' => array(
		// 			'name' => __( '社員紹介' ),
		// 			'singular_name' => __( '社員紹介' )
		// 		),
		// 		'public' => true,
		// 		'has_archive' => true,
		// 		'menu_position' =>8,
		// 		'supports' => array( 'title','thumbnail', 'custom-fields' ),
		// 	)
		// );
		// register_post_type( 'recruit',
		//  array(
		//    'labels' => array(
		// 	   'name' => __( '募集要項' ),
		// 	   'singular_name' => __( '募集要項' )
		//    ),
		//    'public' => true,
		//    'has_archive' => false,
		//    'menu_position' =>9,
		// 	 'supports' => array( 'title', 'custom-fields' ),
		//  )
		// );
		// register_taxonomy(
		// 			'recruit_category',
		// 			'recruit',
		// 	array(
		// 		'hierarchical' => true,
		// 		'update_count_callback' => '_update_post_term_count',
		// 		'label' => 'カテゴリー',
		// 		'singular_label' => 'カテゴリー',
		// 		'public' => true,
		// 		'show_ui' => true
		// 	)
		// );

//		register_post_type( 'recruit',
//				array(
//					'labels' => array(
//					'name' => __( '採用情報' ),
//					'singular_name' => __( '採用情報' )
//				),
//				'public' => true,
//				'has_archive' => true,
//				'menu_position' =>21,
//				'supports' => array( 'title', 'custom-fields' ),
//			)
//		);
//		register_taxonomy(
		//			'recruit_category',
		//			'recruit',
//			array(
//				'hierarchical' => true,
//				'update_count_callback' => '_update_post_term_count',
//				'label' => 'カテゴリー',
//				'singular_label' => 'カテゴリー',
//				'public' => true,
//				'show_ui' => true
//			)
//		);
	}
}
add_action( 'init', 'custompost' );
