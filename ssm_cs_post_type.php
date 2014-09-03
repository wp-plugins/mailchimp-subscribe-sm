<?php 



//////////// CUSTOM POST TYPE STARTS HERE!!!!! //////////////

function ss_m_custom_post_type(){
  $labels = array(
    'name' => _x('Subscribe Me Forms','post type general name'),
    'singular_name' => _x('Subscribe Me','post type singular name'),
    'add_new' => _x('Add New','SM Forms'),
    'add_new_item' => __('Add new SM Forms'),
    'edit_item' => __('Edit SM Forms'),
    'new_item' => __('New SM Forms'),
    'all_items' => __('All SM Forms'),
    'view_itme' => __('View SM Forms'),
    'search_items' => __('Search SM Forms'),
    'not_found' => __('No SM Forms found'),
    'not_found_in_trash' => __('No SM Forms found in trash'),
    'parent_item_colon' => "",
    'menu_name' => 'SM Forms',
    );
  $args = array(
    'labels' => $labels,
    'description' => 'Create SM Forms',
    'public' => true,
    'menu_position' => 25,
    'supports' => array('title','custom_fields'),
    'has_archive' => true,
    'capability_type' => 'page',
    'query_var' => 'ssm_forms',
    'menu_icon' => 'dashicons-welcome-add-page',
    'show_in_menu' => true,
    );


  register_post_type('subscribe_me_forms',$args);
}

add_action('init','ss_m_custom_post_type');

//////////// CUSTOM POST TYPE ENDS HERE!!!!! ////////////// /
                                                        // //   / 
                                                            //  //  /
                                                            //  //  //
                // WONDERFULL ART HERE                      //  //  //////////////////////////////
                                                            //  //  ///        //////////////////
                                                            //  //  ////////////////////////////
                                                            //  //  ///
                                                            //  //
                                                            //  //
                                                            //  /
                                                            //

/////////////////////////// Removing post name from perma link ///////////////////////////




?>