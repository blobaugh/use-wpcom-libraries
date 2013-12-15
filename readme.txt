=== Use WPCOM Libraries ===
Contributors: blobaugh
Tags: cdn, wordpress.com, scripts
Requires at least: 3.7
Tested up to: 3.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Rewrites core WordPress script URLs to be served from the WordPress.com CDN

== Description ==

Serving assets from a Content Delivery Network (CDN) can drastically decrease load time, however many solutions for putting WordPress core scripts on CDNs utilize differing versions of the scripts and sometimes even contain incompatibilities. WordPress.com always serves the correct version of core scripts. This plugin taps into the WordPress.com CDN to provide high quality and fast delivery to scripts gauranteed to work with up to date versions of WordPress.

== Installation ==
Use any of the typical WordPress plugin install methods described in http://codex.wordpress.org/Managing_Plugins

== Frequently Asked Questions ==

= Why? =
Serving assets from a Content Delivery Network (CDN) can drastically increase load time speed by providing copies of files closer to the user and reducing the amount of resources the site uses to serve the page. For more information about CDNs see <a href="http://en.wikipedia.org/wiki/Content_delivery_network">http://en.wikipedia.org/wiki/Content_delivery_network</a>.

WordPress.com has a fast CDN and always uses the correct versions of the core provided scripts. This plugin taps into the WordPress.com CDN to provide fast delivery to your site users.

= Will it work with plugin X? =
Probably. It is never possible to provide a 100% gaurantee, however WordPress.com will always utilize the correct versions of scripts for WordPress functionality. If a certain plugin acts up when activating this plugin please contact the plugin author to ensure they are utilizing WordPress core versions of scripts in their code.

== Changelog ==

= 0.6 =
* First version released
