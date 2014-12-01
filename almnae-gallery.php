<?php 
/* Template Name: GALLERY  */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="cmsmasters website template" />
		<meta name="keywords" content="html, css, template" />
		<link href="<?php bloginfo("url"); ?>/favicon.ico" rel="shortcut icon"> 
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles/prettyPhoto.css" type="text/css" media="screen" />
		<link id="gFontName" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum:regular,italic,bold,bolditalic" type="text/css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles/ie.css" type="text/css" />
		<![endif]-->
		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/woothemes-FlexSlider-a4647ed/demo/css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/woothemes-FlexSlider-a4647ed/flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="woothemes-FlexSlider-a4647ed/demo/js/modernizr.js"></script>
  
  
  
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=3.9.1' type='text/css' media='all' />
	</head>
	<body class="standard interest simple">
	

		
		
		<script type="text/javascript"> if (window.jQuery == undefined) document.write( unescape('%3Cscript src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.4.min.js" type="text/javascript"%3E%3C/script%3E') ); </script>
         
        		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js" type="text/javascript"></script>
	
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
		
   <script defer src="<?php bloginfo('stylesheet_directory');?>/woothemes-FlexSlider-a4647ed/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    jQuery(function(){
      SyntaxHighlighter.all();
    });
    jQuery(window).load(function(){
      jQuery('.flexslider').flexslider({
        animation: "slide",
		slideshow: false, 
		//manualControls: '.a	lbum_nav a',
		//controlsContainer: '.middle_content',
        start: function(slider){
		jQuery('body').removeClass('loading');
        }	
      });
    });
  </script>



		
<!-- _________________________ Start Background Image __________________________ -->
		<div class="bgImage">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider/img5.jpg" alt="" />

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
					<div class="header_arrow_wrap">
						<a href="#" class="header_arrow"><span></span></a>
					</div>
                    
                    
<ul id="navigation2">
<li><a href="http://www.academy.vic.edu.au/">Visit Academy Site</a></li>
</ul>


<!-- _________________________ Finish Navigation ____________________ -->

				</div>
			</div>
<!-- _________________________ Finish Header ________________________ -->


<!-- _________________________ Start Middle _________________________ -->
			<div id="middle">
		<div id="home">
		
		
		     <?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<h2 class="home"><?php the_title(); ?></h2>
				</div>
                
                <div class="album_nav">
						<a href="#" class="arrow_left transp flex-prev">prev</a>
						<a href="#" class="arrow_right transp flex-next">next</a>
					</div>
                    
                    
				<div class="middle_content">
					 <div class="flexslider">
 
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


<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2856627-35', 'auto');
  ga('send', 'pageview');

</script>

	</body>
</html>
