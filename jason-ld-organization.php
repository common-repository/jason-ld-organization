<?php
/*
Plugin Name: Jason LD Organization
Plugin URI: http://www.pivari.com/software/jasonldorg/
Description: Plugin to add Jason LD Organization code on your home.
Version: 1.0.3
Author: Fabrizio Pivari
Author URI: http://www.pivari.com
License: GPL12
*/

function setup_theme_plugin_menus() {
    add_menu_page(
        'Jason LD Organization', 'Jason LD Organization', 'manage_options', 
        'Jason-LD-Organization', 'jlo_page_settings'); 
}
// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_plugin_menus");

function jlo_page_settings() {
require("jlo-options.php");
}

function addjlo(){ 
// Version of the plugin
$version='1.0.3';
if(get_option("jlo_faxNumber")) {$Faxnumber=',
  "faxNumber" : "'.get_option("jlo_faxNumber").'"';}
if(get_option("jlo_telephone")) {$Telephone=',
  "telephone" : "'.get_option("jlo_telephone").'"';}
if(get_option("jlo_email")) {$Email=',
  "email" : "'.get_option("jlo_email").'"';}

echo '<!-- Jason LD Organization plugin v. '.$version.' -->'."\n" ;

echo '<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
'.'  "name" : "'.get_option("jlo_name").'"'.$Telephone.''.$Faxnumber.''.$Email.
',
  "url" : "'.get_site_url().'"';
echo '
}
</script>'."\t\n";
} 
add_action('wp_head','addjlo');



