<!doctype html>
<!--[if lt IE 7]> <html class="lte-ie9 lte-ie8 lte-ie7 lte-ie6 ie6 no-js" lang="de-DE"> <![endif]-->
<!--[if IE 7]><html class="lte-ie9 lte-ie8 lte-ie7 ie7 no-js" lang="ende-DE> <![endif]-->
<!--[if IE 8]><html class="lte-ie9 lte-ie8 ie8 no-js" lang="de-DE"> <![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="de-DE"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="de-DE"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement) /* removes no-js class */</script>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="generator" content="WordPress" />
	
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<h1>It works.</h1>

<?php get_footer(); ?>

</body>
</html>