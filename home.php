<?php 
/* Template Name: HOME  */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="cmsmasters website template" />
		<meta name="keywords" content="html, css, template" />
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
	<body class="standard homepage simple">
		
  
        
        
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
				
				jQuery('body').append('<div id="preloaderMotion" />');
				jQuery('a.header_arrow').addClass('hidden');
				
				var $slider = '#sliderMotion';
				var $preloader = '#preloaderMotion';
				var $images = jQuery($slider+' li img');
				var $max = $images.length;
				
				$images.each(function(){
					var img = new Image();
					
					img.src = jQuery(this).attr('src');
					
					var intervalId = setInterval(function(){
						if (img.complete){
							clearInterval(intervalId);
							
							$max--;
							
							jQuery($preloader).append('<img id="nMotion'+$max+'" src="'+img.src+'" width="60" height="35" alt="" />');
							jQuery($preloader).find('img#nMotion'+$max).animate({opacity:1}, 500);
							
							if ($max == 0){
								LoadImageStart(jQuery($slider));
								jQuery($preloader).fadeOut(500, function(){
									jQuery(this).css({display:'none'});
									showHideContent();
								});
							}
						}
					}, 50);
				});
				
				function LoadImageStart(slider){
					slider.cmsmsMotionSlider({
						sliderWidth:$windowWidth,
						sliderHeight:$windowHeight,
						pauseOnHover:false,
						showPause:false
					});
					
					jQuery('a[rel="prettyPhoto[bgSlider]"]').prettyPhoto({animationSpeed:'normal', deeplinking:false, social_tools:false});
				}
				
				jQuery(window).resize(function(){
					if (jQuery.browser.msie && jQuery.browser.version < 9){
						var $windowWidth = jQuery(window).width()+17;
						var $windowHeight = jQuery(window).height();
					} else {
						var $windowWidth = window.innerWidth;
						var $windowHeight = window.innerHeight;
					}
					
					jQuery('.cmsmsMotionSliderContainer, .cmsmsMotionSlides, .cmsmsMotionSlides canvas, .cmsmsMotionSlides img, .cmsmsMotionSlides iframe').css({width:$windowWidth+'px', height:$windowHeight+'px'});
					jQuery('.cmsmsMotionControl').css({height:$windowHeight+'px'});
					jQuery('.cmsmsMotionNavigation').css({height:parseInt($windowHeight - 195)+'px'});
				});
			});
		</script>

<!-- _________________________ Start Slider __________________________ -->
		<ul id="sliderMotion">
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/1.jpg" data-start="top left" data-finish="bottom right" data-zoom="out" data-animation="10">
<img src="http://www.lovethisschool.com.au/images/slider/1.jpg" alt="Banner Image 1" />

			</li>
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/2.jpg" data-start="bottom center" data-finish="center center" data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/2.jpg" alt="Banner Image 2" />
			</li>
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/3.jpg" data-start="top right" data-finish="bottom left" data-zoom="out">
			<img src="http://www.lovethisschool.com.au/images/slider/3.jpg" alt="Banner Image 3" />
			</li>
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/4.jpg" data-start="center center" data-finish="bottom left" data-zoom="in">
								<img src="http://www.lovethisschool.com.au/images/slider/4.jpg" alt="Banner Image 4" />

			</li>
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/5.jpg" data-start="center left" data-finish="top right" data-zoom="out" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/5.jpg" alt="Banner Image 5" />
			</li>
            
            <li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/6.jpg" data-start="bottom center" data-finish="top left" data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/6.jpg" alt="Banner Image 6" />
			</li>
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/7.jpg" data-start="center center" data-finish="bottom left" data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/7.jpg" alt="Banner Image 7" />
			</li>
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/8.jpg" data-start="top left" data-finish="bottom right" data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/8.jpg" alt="Banner Image 8" />
			</li>
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/9.jpg" data-start="bottom center" data-finish="top right"  data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/9.jpg" alt="Banner Image 9" />
			</li>
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/10.jpg" data-start="center center" data-finish="bottom left" data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/10.jpg" alt="Banner Image 10" />
			</li>
			
			
			<li data-thumb="http://www.lovethisschool.com.au/images/slider/thumbs/11.jpg" data-start="bottom center" data-finish="top right" data-zoom="in" data-animation="15">
			<img src="http://www.lovethisschool.com.au/images/slider/11.jpg" alt="Banner Image11" />
			</li>
			
			
			
		</ul>
        
        
		
<!-- _________________________ Finish Slider __________________________ -->


<!-- _________________________ Start Page ___________________________ -->
		<div id="page" class="hideContent">

<!-- _________________________ Start Header _________________________ -->
			<div class="header_wrap">
				
				
				
				<div id="header">
					<div class="header_inner">
						<a class="logo" title="Pacifico" href="<?php bloginfo('url'); ?>">
							<img alt="Pacifico" src="http://www.lovethisschool.com.au/images/logo.png" />
						</a>
						
						
						<div class="callout">
						
						<h3>“I love this school
							because <span class="blue">I get
							<br>the best of Melbourne.”</span>
						</h3>	
						
							<p>Welcome and thank you for your
							interest on our College. We would
							love to show you more - and why
							our students love this school.
							To receive a prospectus, book a
							Talk & Tour or request a member
							of the College to contact you
							click on the button below.</p>
							
							 <a class="button-lrg toggle-button" href="#">Talk & Tour</a> 
						
						 </div>



<!-- _________________________ Start Navigation _____________________ -->
						<div class="navigation_wrap">
<?php include_once('nav.php'); ?>


</div>


<!-- _________________________ Finish Navigation ____________________ -->

					</div>
					<div class="header_arrow_wrap">
						<a href="#" class="header_arrow"><span>&nbsp;</span></a>
					</div>
                    
                    
<ul id="navigation2">
<li><a href="http://www.academy.vic.edu.au/">Visit Academy Site</a></li>
</ul>




				</div>
			</div>
				<div id="content">
					<div class="entry">
			<div class="contform">
			  <div id="contactform">
				<div id="grav-form">
										<a class="cta-link" href="http://www.academy.vic.edu.au/enrolments-and-contacts/dsp-default-c.cfm?loadref=59" 
target="_blank">To make an online booking for Talk &amp; Tour <br><span class="bold">Click Here</span></span>
<!-- <img src="http://www.lovethisschool.com.au/lts-cms/wp-content/themes/lts-theme/images/arrow.png" width="19" height="16" /> -->
</a>
				<span class="close-btn toggle-button"></span>
				
				
						<?php 
						query_posts('page_id=22'); 
						
						if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif; ?>


</div>
			</div>
			</div>
			</div>
			</div>
			
<!-- _________________________ Finish Header ________________________ -->

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
