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
<li><a href="http://www.academy.vic.edu.au/">Visit Academy Site</a></li>
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
				

<?php get_footer(); ?>	