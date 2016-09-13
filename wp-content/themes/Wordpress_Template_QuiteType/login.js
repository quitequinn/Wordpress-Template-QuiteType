/*
Theme Name: Wordpress_Template_QuiteType

Javascript for customizing login page.

*/

$(document).ready(function() {

	$("#login h1:first-of-type").html(
		'<a class="quite-type-logo" href="http://quitetype.com/" title="Quite Type" tabindex="-2"></a>' +
		'<a class="wordpress-logo" href="https://en-ca.wordpress.org/" title="Powered by WordPress" tabindex="-1"></a>'
	)

});