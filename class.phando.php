<?php

class Phando {

    public static function init() {

        self::init_hook();
        add_action('wp_enqueue_scripts', array('Phando', 'phando_plugin_scripts'));
    }

    public static function init_hook() {
        add_shortcode('phando', array('Phando', 'phando_video_shortcode'));
    }

    public static function phando_video_shortcode($this) {

        $player_url = 'http://www.phando.com/wp-plugin/player.php';
                
        $video = $this['src'];

        $phando_video = $player_url . '?video=' . $video;

        return "<div class='phando_video'><iframe src='{$phando_video}' allowfullscreen='allowfullscreen' ></iframe> </div>";
    }

    public static function phando_plugin_scripts() {

        wp_register_style('phando', PHANDO__PLUGIN_URL . 'assets/phando-video.css');
        wp_enqueue_style('phando');
    }

}

