<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>
	
	<meta property="og:title" content="<?php elegant_titles(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:image" content="<?php $image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post_id ), 'single-post-thumbnail' );
echo $image[0]; ?>" />
	<meta property="og:site_name" content="Global Mobile Internet Conference | GMIC 2013" />
	<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
	<meta property="fb:admins" content="670979947" />
	<meta property="fb:app_id" content="377806332292440" />
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
    <link rel="Shortcut Icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<div id="top-bar"><div class="holder">
		<a href="http://www.thegmic.com" id="thegmic"></a>
		<a href="http://beijing.thegmic.com" id="gmic-beijing"></a>
		<a href="http://sv.thegmic.com" id="gmic-sv"></a>
		<a href="http://beijing.thegmic.com/cn" class="chinese"></a>
		<a href="http://beijing.thegmic.com/jp" class="japanese"></a>
		</div></div>

	<div id="container">
		<?php do_action('et_header_top'); ?>
		<header id="header" class="clearfix">
			<hgroup id="logo-area">
				<?php $bloginfo_name = get_bloginfo( 'name' ); ?>
				<h1 id="logo">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $bloginfo_name ); ?>"><?php if ( 'false' == et_get_option( 'flexible_logo_image', 'false' ) || '' == et_get_option( 'flexible_logo' ) ) echo apply_filters( 'et_logo_markup', $bloginfo_name ); else echo '<img src="' . esc_url( et_get_option( 'flexible_logo' ) ) . '" alt="' . esc_attr( $bloginfo_name ) . '" />'; ?></a>
				</h1>
				<!--<h2><?php bloginfo( 'description' ); ?></h2>-->
			</hgroup>
			
			<a href="http://beijing.thegmic.com/cn" class="action-button" id="gmic-sv-brochure" style="margin-top:2px;position: fixed; top:0; right:0;z-index: 999999999;display: none;"><span class="color"><span class="text">中文</span></span></a>
			<a href="/register/" id="go-register" class="action-button" style="clear:left;"><span class="color" style="padding-left: 16px;"><span class="text" style="font-size: 30px; padding: 12px 23px 14px 17px;">Register</span></span></a>
			<a style="margin-left:5px;" href="/sponsorship/" id="sponsor" class="action-button"><span class="color" style="padding-left: 16px;"><span class="text" style="font-size: 30px; padding: 12px 23px 14px 17px;"><?php esc_html_e( 'Sponsor', 'Flexible' ); ?></span></span></a>
			<a href="http://connect.thegmic.com/" target="_blank" id="re-speaker" class="action-button" style="margin-left:5px;"><span class="color" style="padding-left: 16px;"><span class="text" style="font-size: 22px; padding: 12px 23px 14px 17px;">GMIC Connect</span></span></a>
			<p class="social-buttons clearfix"><a id="fb" href="http://www.facebook.com/theGMIC" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons.png" /></a><a id="tt" href="http://www.twitter.com/theGMIC" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-02.png" /></a><a id="in" href="http://www.linkedin.com/groups?home=&gid=2825839" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-03.png" /></a><a id="em" href="mailto: gmic@gwc.net" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-05.png" /></a></p>
			<?php if ( is_active_sidebar( 'header-widget' ) ){ ?><?php dynamic_sidebar( 'header-widget' ); ?><?php } ?>
			<?php if ( ( $phone_num = et_get_option('flexible_phone_num') ) && '' != $phone_num ) echo '<span id="phone">' . $phone_num . '</span>'; ?>		
		</header> 
		<div id="main-area">
			<?php do_action('et_header_menu'); ?>