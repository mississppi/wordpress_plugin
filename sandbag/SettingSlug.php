<?php
/*
 * This plugin is adminpanel for post-new.php
 * Modify the taxonomy query
 * 
 */
class SettingSlug
{

    public function __construct(){
        add_action('admin_print_scripts-post-new.php', [$this, 'my_scripts_new']);
    }

    public function my_scripts_new(){
        //plugindir
        $file = WP_PLUGIN_URL . '/' . dirname(plugin_basename( __FILE__ )) . '/' . 'Assets/settingslug.js';
        wp_enqueue_script('settingslug.js', $file);
    }
}

new SettingSlug();
