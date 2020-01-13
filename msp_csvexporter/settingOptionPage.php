<?php

class settingOptionPage
{
    public function __construct(){
        add_action('admin_menu', [$this, 'registerAdmin']);
    }
    public function registerAdmin(){
        // add_submenu_page( 'tools.php', 'csvexport', 'csvexport', 'manage_options', MSP_PLUGIN_NAME, array( &$this, 'show_options_page', ) );
        add_submenu_page('tools.php', 'csvexport', 'csvexport', 'manage_options', 'export_page', [$this, 'showOptionPage', ]);
    }

    public function showOptionPage(){
        require_once MSP_PLUGIN_DIR .'/admin/index.php';
    }
}

new settingOptionPage();