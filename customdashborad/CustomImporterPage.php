<?php
/*
 * targetpage importer.php
 * overview remove default task
 *
 *
 */

class CustomImporterPage
{
    public function __construct(){
        add_action( 'admin_init', [$this, 'initImporterPageAction']);
    }

    public function initImporterPageAction(){
        global $wp_version;
    	$locale            = get_user_locale();
    	$cache_key         = 'popular_importers_' . md5( $locale . $wp_version );
        add_filter("site_transient_".$cache_key, [$this, 'changeImportTask'], 10, 2);
    }

    //changekey
    public function changeImportTask($value, $transient){
        unset($value["importers"]["blogger"]);
        unset($value["importers"]["livejournal"]);
        unset($value["importers"]["movabletype"]);
        unset($value["importers"]["tumblr"]);
        unset($value["importers"]["rss"]);
        return $value;
    }
}

new CustomImporterPage();