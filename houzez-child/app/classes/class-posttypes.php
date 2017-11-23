<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 11/15/2017
 * Time: 01:18
 */

class PostTypes
{
    public static function make_n_info_post_type()
    {
        $labels = array(
       		'name'               => _x( 'اطلاعات محله', 'houzez' ),
       		'singular_name'      => _x( 'اطلاعات محله', 'houzez' ),
       		'menu_name'          => _x( 'اطلاعات محله ها', 'admin menu', 'houzez' ),
       		'name_admin_bar'     => _x( 'طلاعات محله', 'add new on admin bar', 'houzez' ),
       		'add_new'            => _x( 'اضافه کردن', 'n-info', 'houzez' ),
       		'add_new_item'       => __( 'اضافه کردن اطلاعات محله', 'houzez' ),
       		'new_item'           => __( 'اطلاعات محله جدید', 'houzez' ),
       		'edit_item'          => __( 'ویرایش اطلاعات محله', 'houzez' ),
       		'view_item'          => __( 'نمایش طلاعات محله', 'houzez' ),
       		'all_items'          => __( 'همه اطلاعات محله ها', 'houzez' ),
       		'search_items'       => __( 'جستجوی اطلاعات محله ها', 'houzez' ),
       		'parent_item_colon'  => __( 'والد اطلاعات محله:', 'houzez' ),
       		'not_found'          => __( 'اطلاعات محله یافت نشد', 'houzez' ),
       		'not_found_in_trash' => __( 'هیچ اطلاعات محله ای در زباله دان نیست.', 'houzez' )
       	);

       	$args = array(
       		'labels'             => $labels,
            'description'        => __( 'Description.', 'houzez' ),
       		'public'             => true,
       		'publicly_queryable' => true,
       		'show_ui'            => true,
       		'show_in_menu'       => true,
       		'query_var'          => true,
       		'rewrite'            => array( 'slug' => 'neighborhood-info' ),
       		'capability_type'    => 'post',
       		'has_archive'        => true,
       		'hierarchical'       => false,
       		'menu_position'      => 12,
       		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
       	);

       	register_post_type( 'n-info', $args );

    }
}