<?php 
/* Template Name: REGISTER */

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
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body class="standard interest simple">
	

		
		
		<script type="text/javascript"> if (window.jQuery == undefined) document.write( unescape('%3Cscript src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.4.min.js" type="text/javascript"%3E%3C/script%3E') ); </script>
           <script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon/DINOT_400.font.js" type="text/javascript"></script>
        		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script2.js" type="text/javascript"></script>
	
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
					<h2 class="home">Reunion Registration 2014</h2>
				</div>
				<div id="content">
					<div class="entry">
						<p>RSVP for reunion 2014. Update your contact details. Subscribe to our eNews. Keep connected.
						</p>
						<div class="box error_box" style="display:none;">
							<table>
								<tbody>
									<tr>
										<td>&nbsp;</td>
										<td>Your message has not been sent successfully <br />It was an error on page!</td>
									</tr>
									</tbody>
							</table>
						</div>
						<div class="box info_box" style="display:none;">
							<table>
								<tbody>
									<tr>
										<td>&nbsp;</td>
										<td>Thank you! <br />Your message has been sent successfully.</td>
									</tr>
									</tbody>
							</table>
						</div>
						<div class="contform">
							<form action="#" method="post" id="contactform">
								
								
								<div class="form_info">
									<div class="form_error defaulterror">You forgot to enter your first name.</div>
									<div class="form_error shorterror">Entered first name should not be shorter than 3 characters.</div>
									<div class="form_error longerror">Entered first name should not be longer than 30 characters.</div>
									
									<label for="name">First Name<span> *</span></label>
									<input type="text" name="name" id="name" value="" size="22" tabindex="3" />
									
								</div>
								
								
								<div class="cl"></div>
								
								
									<div class="form_info">
									<div class="form_error defaulterror">You forgot to enter your surname.</div>
									<div class="form_error shorterror">Entered surname should not be shorter than 3 characters.</div>
									<div class="form_error longerror">Entered surname should not be longer than 30 characters.</div>
									
									<label for="surname">Surname<span> *</span></label>
									<input type="text" name="surname" id="surname" value="" size="22" tabindex="4" />
								</div>
								
									<div class="cl"></div>
								
									<div class="form_info">
									<div class="form_error defaulterror">You forgot to enter your maiden name.</div>
									<div class="form_error shorterror">Entered maiden name should not be shorter than 3 characters.</div>
									<div class="form_error longerror">Entered maiden name should not be longer than 30 characters.</div>
									<label for="maiden-name">Maiden Name</label>
									<input type="text" name="maiden-name" id="maiden-name" value="" size="22" tabindex="5" />
								</div>
								
								<div class="cl"></div>
								
								
								<div class="form_info">
								 <div class="form_error defaulterror">You forgot to enter your graduating year.</div>
									<label for="graduating-year">Graduating Year<span> *</span></label>
									<input type="text" name="graduating-year" id="graduating-year" value="" size="22" tabindex="6" />
								</div>
								
								
								
								
								
								<div class="form_info">
									<div class="form_error defaulterror">You forgot to enter your email address.</div>
									<div class="form_error invaliderror">You entered an invalid email address.</div>
									<label for="email">Email<span> *</span></label>
									<input type="text" name="email" id="email" value="" size="22" tabindex="7" />
								</div>
								
								
								<div class="cl"></div>
								
								
								<div class="form_info">
									<div class="form_error defaulterror">You forgot to enter your contact number.</div>
									<label for="number">Contact Number</label>
									<input type="text" name="number" id="number" value="" size="22" tabindex="8" />
								</div>
								
								
								
								<div class="cl"></div>
								
								
								<div class="form_info">
									<div class="form_error defaulterror">You forgot to enter the subject of your message.</div>
									<div class="form_error shorterror">Entered subject should not be shorter than 3 characters.</div>
									<div class="form_error longerror">Entered subject should not be longer than 100 characters.</div>
									<label for="subject">Subject<span> *</span></label>
									<input type="text" name="subject" id="subject" value="" size="22" tabindex="9" />
								</div>
								
								
								<div class="cl"></div>
								
								
								<div class="form_info message_info">
									<div class="form_error defaulterror">You forgot to enter the text of your message.</div>
									<div class="form_error shorterror">Entered message should not be shorter than 3 characters.</div>
									<label for="message" class="message">Message / Other Guests<span> *</span></label>
									<textarea name="message" id="message" cols="28" rows="6" tabindex="10"></textarea>
								</div>
								
								
								<div><input type="hidden" value="http://www.lovethisschool.com.au/" id="contactwebsite" name="contactwebsite" /></div>
								<div><input type="hidden" value="info@lovethisschool.com.au" id="contactemail" name="contactemail" /></div>
								<div><input type="hidden" value="http://www.lovethisschool.com.au/php/sendmail2.php" id="contacturl" name="contacturl" /></div>
								<div>
									<a href="#" class="button btn_1" id="formsend" tabindex="8">Send message</a>
									<div class="loading"></div>
								</div>
							</form>
						</div>
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
