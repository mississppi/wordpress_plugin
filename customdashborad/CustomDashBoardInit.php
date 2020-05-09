<?php
/*
Plugin Name: CustomDashBoard
Plugin URI: http://www.example.com/plugin
Description: simple admin dashboard
Author: mississppi
Version: 0.1
Author URI: http://www.example.com
*/

class CustomDashBoardInit
{
    public function __construct(){
        include_once("RemoveMenu.php");

    }
}

new CustomDashboardInit();