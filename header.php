<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<meta itemprop="name" content="VILLA DEL CINE 2014" />
<meta itemprop="author" content="Coordinación de Páginas Web - MippCI" />
<meta itemprop="copyright" content="<?php print date('Y') ?>" />
<meta name="distributor" content="Local" />
<meta itemprop="contentRating" content="General" />
<meta name="robots" content="All" />
<meta name="revisit-after" content="7 days" />

<?php wp_head() ?>

</head>

<body <?php body_class() ?>>
	<div id="wrap"> <!-- ## Begins wrap -->
		<header>
			<div class="readline">
				<div class="inner-readline">
					<div id="logo">
						<div class="inner-logo">
							<img src="<?php print get_template_directory_uri() ?>/static/images/logo.png" alt="Fundación Villa del Cine">
						</div>
					</div>
					<div class="top-menu"><?php wp_nav_menu(array('theme_location' => 'top')); ?></div>
					<div class="social">
						<ul class="social-menu">
							<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/icosearch.png" alt="Buscar"></a></li>
							<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/icotwitter.png" alt="Twitter"></a></li>
							<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/icofacebook.png" alt="Facebook"></a></li>
							<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/icoyoutube.png" alt="Youtube"></a></li>
							<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/icoinstagram.png" alt="Instagram"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="grayline">
				<div class="inner-grayline">
					<div class="middle-menu"><?php wp_nav_menu(array('theme_location' => 'middle')); ?></div>
				</div>
			</div>
		</header>

		<div id="content">

