=== Plugin Name ===
Contributors: bl968	
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2017947
Tags: admin, dashboard, spam
Requires at least: 2.8
Tested up to: 2.8.2
Stable tag: trunk

This plugin removes the "Latest News from Yoast" Widget added by Sociable and other Yoast plugins to the Admin Dashboard. 

== Description ==

This plugin removes the "Latest News from Yoast" Widget added by Sociable and other Yoast Plugins to the Admin Dashboard. 

This plugin is not associated nor affiliated with "Joost de Valk" nor the "Yoast - Tweaking Websites" website. While this plugin
removes his widget from the dashboard of your web site, I encourage each of you to send Mr de Valk a cash donation if you use his plugins.

== Installation ==

1. Upload `yoastremove.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why did you create this plugin =

I use the sociable plugin however that plugin's authors started adding a dashboard widget with their web sites feed with
the release of Wordpress 2.7. There is no option to disable on a global basis. You could manually remove it, however in 
the latest versions they have made it harder for non-programmers and with the frequency of their updates it was getting 
annoying to have to do that every time. 

= Which Yoast plugins has this been tested against =

This is tested and removes the Latest News from Yoast feed added by Sociable and Robots Meta. If you find a Yoast plugin that
adds a latest news that this does not remove, let me know which plugin, and I will update.

== Screenshots ==

This plugin produces no visible output.

== Changelog ==

= 0.1 =
* Initial Release

= 0.0.2 = 
* Changed Version number format.
* Added link plugin page on Wordpress Forums to the plugin.

= 0.0.3 = 
* Changed method for removing the widget to deal with the class method utilized by the yst_plugin_tools.php for adding widgets.

= 0.0.4 = 
* Added disclaimer to description, to clear up any possibility of confusion between this plugin and Joost de Valk.

= 0.0.5 = 
* Modified to also remove new blogplay designation

= 0.0.6 = 
* Modified fixed blogplay typo

= 0.0.7 =

* Added code to remove WPSEO box