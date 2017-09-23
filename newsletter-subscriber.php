<?php
/**
 * Plugin Name:Newsletter Subscriber
 * Description:A form to subscribe to a newsletter
 * Author:Andrei Ghervan
 * Version:1.0
 *
 */
if(!defined('ABSPATH')){
    exit;
}
require_once(plugin_dir_path(__FILE__).'/includes/newsletter-subscriber-scripts.php');
require_once(plugin_dir_path(__FILE__).'/includes/newsletter-subscriber-class.php');
//register widget
function register_newsletter_subscriber(){
    register_widget('Newsletter_Subscriber_Widget');
}
add_action('widgets_init','register_newsletter_subscriber');