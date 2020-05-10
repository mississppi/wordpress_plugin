<?php

class RemoveMenu
{

    public function __construct(){

        //removefortopbannermenu
        add_action('admin_bar_menu', [$this,'remove_topbanner_menus'], 201);

        //removeforleftnavimenu
        add_action( 'admin_menu', [$this,'remove_admin_menu'], 999 );

        //removefortophelpbutton
        add_action( 'admin_head', [$this, 'hide_help_and_options']);

    }

    public function hide_help_and_options(){
        echo '<style type="text/css">'.
            '#contextual-help-link-wrap,'.
            '#screen-options-link-wrap'.
            '{display:none;}</style>'.PHP_EOL;
    }

    public function remove_topbanner_menus($wp_admin_bar){
        $wp_admin_bar->remove_menu( 'wp-logo' );      // logo
        $wp_admin_bar->remove_menu( 'site-name' );    // sitename
        // $wp_admin_bar->remove_menu( 'view-site' );    // sitename -> viewsite
        // $wp_admin_bar->remove_menu( 'dashboard' );    // sitename -> dashboard (publish)
        // $wp_admin_bar->remove_menu( 'themes' );       // sitename -> theme (publish)
        // $wp_admin_bar->remove_menu( 'customize' );    // sitename -> customize (publish)
        $wp_admin_bar->remove_menu( 'comments' );     // comment
        $wp_admin_bar->remove_menu( 'updates' );      // update
        $wp_admin_bar->remove_menu( 'view' );         // viewpost
        $wp_admin_bar->remove_menu( 'new-content' );  // newpost
        $wp_admin_bar->remove_menu( 'new-post' );     // new -> post
        $wp_admin_bar->remove_menu( 'new-media' );    // new -> medis
        $wp_admin_bar->remove_menu( 'new-link' );     // new -> link
        $wp_admin_bar->remove_menu( 'new-page' );     // new -> page
        $wp_admin_bar->remove_menu( 'new-user' );     // new -> user
        // $wp_admin_bar->remove_menu( 'my-account' );   // myaccount
        // $wp_admin_bar->remove_menu( 'user-info' );    // myaccount -> profile
        // $wp_admin_bar->remove_menu( 'edit-profile' ); // myaccount -> editprofile
        // $wp_admin_bar->remove_menu( 'logout' );       // myaccount -> logout
        $wp_admin_bar->remove_menu( 'search' );       // search (publish)
    }

    public function remove_admin_menu(){
        // remove_menu_page( 'index.php' );                // dashboard
        remove_menu_page( 'edit.php' );                 // post
        remove_menu_page( 'upload.php' );               // media
        remove_menu_page( 'edit.php?post_type=page' );  // page
        remove_menu_page( 'edit-comments.php' );        // comment
        remove_menu_page( 'themes.php' );               // themes
        remove_menu_page( 'plugins.php' );              // plugins
        // remove_menu_page( 'users.php' );                // users
        // remove_menu_page( 'tools.php' );                // tools
        // remove_menu_page( 'options-general.php' );      // setting
    }


}
new RemoveMenu();
