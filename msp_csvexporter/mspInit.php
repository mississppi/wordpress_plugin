<?php
/*
Plugin Name: MSP CSV Exporter
Plugin URI: http://hogehoge.com
Description: 特定のカスタム投稿タイプをcsvファイルへエクスポート。ダウンロードさせるプラグインです
Version: 1.0.0
Author URI: http://hogehoge.com
 */
define( 'MSP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

class mspInit 
{
    public function __construct(){
        include_once("settingOptionPage.php");
    }
}
$mspinit = new mspInit();