<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package growingminds
 */

// Setup header image
$header_img = '';
if (get_field('featured_image_on_post_page') == 'true') {
	$header_img = get_field('featured_image');
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'nve7alp',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-top">
	<div class="navbar navbar-default">
		<div class="container">
			<div class="nav-social-xs visible-xs">
				<ul>
					<li><a target="_blank" href="https://www.facebook.com/OregonAITC/?ref=hl"><i class="fa fa-facebook-official"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/OregonAITC"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://www.pinterest.com/oregonaitc/"><i class="fa fa-pinterest"></i></a></li>
					<li><a target="_blank" href="https://www.youtube.com/user/ORAgInTheClassroom"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-top-wrap" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		    </div>
		    <div class="collapse navbar-collapse" id="menu-top-wrap">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-top', 'menu_class' => 'nav navbar-nav' ) ); ?>
				<ul class="nav navbar-nav navbar-right navbar-social hidden-xs">
					<li class="nav-divider-right"><a href="https://oregonaitc.org"><i class="fa fa-home"></i> Oregon Ag in the Classroom</a></li>
					<li><a target="_blank" href="https://www.facebook.com/OregonAITC/?ref=hl"><i class="fa fa-facebook-official"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/OregonAITC"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://www.pinterest.com/oregonaitc/"><i class="fa fa-pinterest"></i></a></li>
					<li><a target="_blank" href="https://www.youtube.com/user/ORAgInTheClassroom"><i class="fa fa-youtube"></i></a></li>
				</ul>
		    </div>
		</div>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'growingminds' ); ?></a>

	<header id="masthead" class="site-header" <?php if (get_field('featured_image_on_post_page') == 'true'): ?>style="background-image: url(<?php echo $header_img['sizes']['post-header']; ?>)"<?php endif; ?>>
		<div class="site-header-top">
			<div class="container">
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><img src="http://growingminds.local/wp-content/uploads/2018/01/logo-growing-minds.png" /></a>
				</div><!-- .site-branding -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
