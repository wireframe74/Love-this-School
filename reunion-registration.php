<?php 
/* Template Name: REUNION REGISTRATION FORM */
get_header();
 ?>


		
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
						<a class="logo" title="Pacifico" href="index.html">
							<img alt="Pacifico" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" />
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
							To recieve a prospectus, book a
							Talk & Tour or request a member
							of the College to contact you
							click on the button below.</p>
							
							 <a class="button-lrg" href="#">Discover More</a> 
							
							
							
</div>


<!-- _________________________ Start Navigation _____________________ -->
						<div class="navigation_wrap">
						


<ul id="navigation">
<li><a href="album.html">Alumnae Gallery</a></li>
<li><a href="album-suessical.html">Seussical the Musical Gallery</a></li>
<li><a href="album-community.html">Community Action Gallery</a></li>
<li><a href="archive.html">Archive</a></li>
<li><a href="contacts.html">Contacts</a></li>
</ul>				</div>
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
					
				</div>
				<div id="content">
					<div class="entry">
					
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
						<div id="contactform">
						
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif; ?>
</div>
					
					
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
