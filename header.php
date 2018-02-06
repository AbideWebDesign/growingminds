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
$header = '';

if ((get_field('featured_image_on_post_page') == 'True' && !is_home()) || is_page()) {
	$header_img = get_field('featured_image');
	$header = $header_img['sizes']['post-header'];
} else {
	$header = home_url('/wp-content/uploads/2018/01/img-header.jpg');
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="<?php echo $header; ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="https://oregonaitc.org/wp-content/uploads/2015/05/favicon.png">
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=146582076020665&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
					<li class="nav-divider-right"><a href="https://oregonaitc.org"><i class="fa fa-home"></i> Oregon Agriculture in the Classroom</a></li>
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

	<header id="masthead" class="site-header" style="background-image: url(<?php echo $header; ?>)">
		<div class="site-header-top">
			<div class="container">
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/logo-growing-minds.png" /></a>
				</div><!-- .site-branding -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
