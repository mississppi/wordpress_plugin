<?php
/*
Plugin Name: custom_slug
Plugin URI: http://www.example.com/plugin
Description: custom_slug
Author: mississppi
Version: 0.1
Author URI: http://www.example.com
*/
class CustomSlugInit
{
    public function __construct(){
        include_once("SettingSlug.php"); 
    }
}
new CustomSlugInit();
