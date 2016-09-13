<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Template_QuiteType
 */

$tRoot = get_bloginfo('template_directory');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Wordpress_Template_QuiteType' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'Wordpress_Template_QuiteType' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'Wordpress_Template_QuiteType' ), 'Wordpress_Template_QuiteType', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- CDN Dependencies -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://use.typekit.net/#######.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
 -->
<!-- Local Dependencies -->
<!-- Typography -->
<!-- <script src="<?php echo $tRoot ?>/src/static/js/jQuery-widowFix/js/jquery.widowFix-1.3.2.min.js"></script>
<script src="<?php echo $tRoot ?>/src/static/js/smartquotes/smartquotes.min.js"></script>
<script src="<?php echo $tRoot ?>/src/static/js/hypher/jquery.hypher.js"></script>
<script src="<?php echo $tRoot ?>/src/static/js/hypher/en-us.js"></script>
 -->
<!-- MAIN JS -->
<!-- <script src="<?php echo $tRoot ?>/dist/js/main.js"></script>
 -->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- (Via HTML5 Boilerplate: http://html5boilerplate.com/) -->
<!-- <script>
	var _gaq=[['_setAccount','##-########-#'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script> -->


<?php wp_footer(); ?>

</body>
</html>
