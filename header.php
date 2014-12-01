<!DOCTYPE html>
<html class="no-js"> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="cmsmasters website template" />
		<meta name="keywords" content="html, css, template" />
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/png" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles/prettyPhoto.css" type="text/css" media="screen" />
		<link id="gFontName" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum:regular,italic,bold,bolditalic" type="text/css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles/ie.css" type="text/css" />
		<![endif]-->
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class('standard interest simple'); ?>>


	
		<script type="text/javascript"> if (window.jQuery == undefined) document.write( unescape('%3Cscript src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.4.min.js" type="text/javascript"%3E%3C/script%3E') ); </script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon/DINOT_400.font.js" type="text/javascript"></script>
        
	
		<script type="text/javascript">
			jQuery(document).ready(function(){
				if (jQuery.browser.msie && jQuery.browser.version < 9){
					var $windowWidth = jQuery(window).width()+17;
					var $windowHeight = jQuery(window).height()+17;
				} else {
					var $windowWidth = window.innerWidth;
					var $windowHeight = window.innerHeight;
				}
				
				var $image = jQuery('.bgImage img');
				var img = new Image();
				
				img.src = jQuery($image).attr('src');
				
				var intervalId = setInterval(function(){
					if (img.complete){
						var $imgWidth = img.width;
						var $imgHeight = img.height;
						var $widthFactor = parseFloat($imgWidth/$windowWidth);
						var $heightFactor = parseFloat($imgHeight/$windowHeight);
						
						if ($widthFactor < $heightFactor){
							jQuery($image).css({width:$windowWidth+'px', height:parseInt($imgHeight/$widthFactor)+'px', top:'-'+parseInt((parseInt($imgHeight/$widthFactor)-$windowHeight)/2)+'px', left:0});
						} else {
							jQuery($image).css({width:parseInt($imgWidth/$heightFactor)+'px', height:$windowHeight+'px', top:0, left:'-'+parseInt((parseInt($imgWidth/$heightFactor)-$windowWidth)/2)+'px'});
						}
						
						clearInterval(intervalId);
						LoadImageStart();
					}
				}, 50);
				
				function LoadImageStart(){
					$image.parent().fadeIn(500, function(){
						jQuery(this).css({display:'block'});
					});
				}
				
				jQuery(window).resize(function(){
					if (jQuery.browser.msie && jQuery.browser.version < 9){
						var $windowWidth = jQuery(window).width()+17;
						var $windowHeight = jQuery(window).height();
					} else {
						var $windowWidth = window.innerWidth;
						var $windowHeight = window.innerHeight;
					}
					
					var $imgWidth = img.width;
					var $imgHeight = img.height;
					var $widthFactor = parseFloat($imgWidth/$windowWidth);
					var $heightFactor = parseFloat($imgHeight/$windowHeight);
					
					if ($widthFactor < $heightFactor){
						jQuery($image).css({width:$windowWidth+'px', height:parseInt($imgHeight/$widthFactor)+'px', top:'-'+parseInt((parseInt($imgHeight/$widthFactor)-$windowHeight)/2)+'px', left:0});
					} else {
						jQuery($image).css({width:parseInt($imgWidth/$heightFactor)+'px', height:$windowHeight+'px', top:0, left:'-'+parseInt((parseInt($imgWidth/$heightFactor)-$windowWidth)/2)+'px'});
					}
				});
			});
		</script>