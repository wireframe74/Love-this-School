<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="cmsmasters website template" />
		<meta name="keywords" content="html, css, template" />
		<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles/prettyPhoto.css" type="text/css" media="screen" />
		<link id="gFontName" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum:regular,italic,bold,bolditalic" type="text/css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles/ie.css" type="text/css" />
		<![endif]-->
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
<link href="<?php bloginfo("url"); ?>/favicon.ico" rel="shortcut icon"> 
	</head>
	<body class="standard interest simple">
	

		
		
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
		
<!-- _________________________ Start Background Image __________________________ -->
		<div class="bgImage">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider/img3.jpg" alt="" />
		</div>
<!-- _________________________ Finish Background Image __________________________ -->


<!-- _________________________ Start Page ___________________________ -->
		<div id="page">

<!-- _________________________ Start Header _________________________ -->
			<div class="header_wrap">
				<div id="header">
					<div class="header_inner">
						<a class="logo" title="Pacifico" href="<?php bloginfo('url'); ?>">
							<img alt="Pacifico" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" />
						</a>
						
	


<!-- _________________________ Start Navigation _____________________ -->
						<div class="navigation_wrap">
						


<?php include_once('nav.php'); ?>


				</div>
					</div>
					
					<!-- <div class="header_arrow_wrap">
						<a href="#" class="header_arrow"><span></span></a>
					</div>
					-->
					
					
					
<!-- _________________________ Finish Navigation ____________________ -->


<ul id="navigation2">
<li><a href="http://www.academy.vic.edu.au/news-and-events/dsp-default.cfm?loadref=84">Visit Academy Site</a></li>
</ul>


				</div>
			</div>
            



<!-- _________________________ Finish Header ________________________ -->


<!-- _________________________ Start Middle _________________________ -->
			<div id="middle">
		<div id="home">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<h2 class="home"><?php the_title(); ?></h2>
				</div>
				<div id="content">
					<div class="entry">
					
					<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif; ?>
							
							
					</div>
				</div>
				

				<div class="cl"></div>
<!-- _________________________ Finish Sidebar _______________________ -->



<!-- _________________________ Finish Bottom ________________________ -->	
				
				
<!-- _________________________ Start Footer _________________________ -->
				<div id="footer">
					<p>&copy; 2013 Love this School</p>
				</div>
<!-- _________________________ Finish Footer ________________________ -->

			</div>
<!-- _________________________ Finish Middle ________________________ -->

			<div class="cl"></div>
		</div>
<!-- _________________________ Finish Page __________________________ -->
<script type = 'text/javascript'>
Cufon.replace('#navigation li a, h2, h2, h3, .callout > p, .button-lrg, input[type="submit"],	 #navigation2 li a',  {  hover: true,  fontFamily: 'DINOT' });
Cufon.now();
</script>
<?php wp_footer(); ?>
	</body>
</html>
