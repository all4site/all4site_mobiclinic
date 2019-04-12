<?php

// Регистрируем Post Type

function afs_add_posttype_doctors()
{
	register_post_type(
		'doctors',
		array(
			'labels'             => array(
				'name'              => 'Доктора', // Основное название типа записи
				// 'singular_name'      => 'Мнение', // отдельное название записи типа Book
				// 'add_new'            => 'Добавить новую',
				// 'add_new_item'       => 'Добавить новую книгу',
				// 'edit_item'          => 'Редактировать книгу',
				// 'new_item'           => 'Новая книга',
				// 'view_item'          => 'Посмотреть книгу',
				// 'search_items'       => 'Найти книгу',
				// 'not_found'          => 'Книг не найдено',
				// 'not_found_in_trash' => 'В корзине книг не найдено',
				'parent_item_colon' => '',
				'menu_name'         => 'Доктора',

			),
			'menu_icon'					=> 'dashicons-groups',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array(),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);

	register_post_type(
		'terapevts',
		array(
			'labels'             => array(
				'name'              => 'Терапевты', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Терапевты',

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => 'edit.php?post_type=doctors',
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor'),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);

	register_post_type(
		'nevrapatolog',
		array(
			'labels'             => array(
				'name'              => 'Неврапатолог', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Неврапатолог',

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => 'edit.php?post_type=doctors',
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor'),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);

	register_post_type(
		'hirurgs',
		array(
			'labels'             => array(
				'name'              => 'Хирурги', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Хирурги',

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => 'edit.php?post_type=doctors',
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor'),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);

	register_post_type(
		'dermatolog',
		array(
			'labels'             => array(
				'name'              => 'Дерматологи', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Дерматолог',

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => 'edit.php?post_type=doctors',
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor'),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);

	register_post_type(
		'news',
		array(
			'labels'             => array(
				'name'              => 'Новости', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Новости',

			),
			'menu_icon'					=> 'dashicons-admin-site',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor', 'custom-fields'),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);
	register_post_type(
		'akcii',
		array(
			'labels'             => array(
				'name'              => 'Акции', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Акции',

			),
			'menu_icon'					=> 'dashicons-visibility',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor'),
			'taxonomies'         => array('category'),
			// 'show_in_rest'       => true
		)
	);

	register_post_type(
		'costs',
		array(
			'labels'             => array(
				'name'              => 'Цены', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Цены',

			),
			'menu_icon'					=> 'dashicons-awards',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 20,
			'supports'           => array('title'),
			// 'taxonomies' => array('category'),
			// 'show_in_rest'       => true
		)
	);
	register_post_type(
		'contacts',
		array(
			'labels'             => array(
				'name'              => 'Контакты', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'Контакты',

			),
			'menu_icon'						=> 'dashicons-email',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 20,
			'supports'           => array('title'),
			// 'taxonomies' => array('category'),
			// 'show_in_rest'       => true
		)
	);
	register_post_type(
		'about-us',
		array(
			'labels'             => array(
				'name'              => 'О нас', // Основное название типа записи
				'parent_item_colon' => '',
				'menu_name'         => 'О нас',

			),
			'menu_icon'						=> 'dashicons-universal-access',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 20,
			'supports'           => array('title', 'thumbnail', 'editor'),
			// 'taxonomies' => array('category'),
			// 'show_in_rest'       => true
		)
	);
}
