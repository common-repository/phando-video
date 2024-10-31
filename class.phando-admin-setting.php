<?php

class Phando_Admin_Settings {

    public static function init() {
        add_action('admin_menu', array('Phando_Admin_Settings', 'init_hook'));
        add_action('admin_enqueue_scripts', array('Phando_Admin_Settings', 'phando_scripts'));
    }

    public static function init_hook() {
        add_options_page('Phando Video Settings', 'Phando', 'manage_options', 'phando_video_settings', array('Phando_Admin_Settings', 'phando_setting_page'));
    }

    public static function phando_setting_page() {

        $page = '<br/><h3 class="settings-heading">Phando video settings</h3> <br/>';
        $page = $page . '<div class="embed-info"><p class="embed-content">Add Video using shortcode [phando src=""] </p></div>';
        $page = $page . '<div class="premium"><div class="get-premium-heading">Get Premium versions ...</div>';
        $page = $page . '<ul class="premium-list">';

        $page = $page . '<li class="one"><span class="num-icon"> </span> <div class="premium-block" > <a href="http://www.phando.com/home/contact/" target="_blank">Play Ads</a> Embed Ads in your video  </div> <div class="premium-block" > <img alt="marthastewart" src="' . PHANDO__PLUGIN_URL . 'assets/dollar.png"> </div> </li>';
        $page = $page . '<li class="two"><span class="num-icon"></span> <div class="premium-block" > <a href="http://www.phando.com/home/contact/" target="_blank">Embed Brand logo</a> Embed your brand&#39;s logo in video</div> <div class="premium-block" >  <img alt="marthastewart" src="' . PHANDO__PLUGIN_URL . 'assets/brand.png"> </div> </li>';

        $page = $page . '</ul></div>';

        echo $page;
    }

    public static function phando_scripts() {

        wp_register_style('phando_video', PHANDO__PLUGIN_URL . 'assets/phando.css');
        wp_enqueue_style('phando_video');
    }
}
