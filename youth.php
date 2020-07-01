<?php /* Template Name: Youth Template */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/youth/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#side-nav" data-offset="0" data-focus="#first-link">
 <div class="quick-links">

   		<!-- a11y toolbar widget -->
   		<div class="  ltr  left a11y-toolbar">
			<ul>
				<li><button type="button" class="a11y-toggle-contrast toggle-contrast" id="is_normal_contrast" aria-pressed="false"><span class="offscreen">Toggle High Contrast</span><span class="aticon aticon-adjust" aria-hidden="true"></span></button></li>
				<li><button type="button" class="a11y-toggle-grayscale toggle-grayscale" id="is_normal_color" aria-pressed="false"><span class="offscreen">Toggle Grayscale</span><span class="aticon aticon-tint" aria-hidden="true"></span></button></li>
				<li><button type="button" class="a11y-toggle-fontsize toggle-fontsize" id="is_normal_fontsize" aria-pressed="false"><span class="offscreen">Toggle Font size</span><span class="aticon aticon-font" aria-hidden="true"></span></button></li>
			</ul>
		</div>
<!-- // a11y toolbar widget -->
	</div>
	
	<div id="accessibility">
		<a href="http://211norcal.org/shasta/" title="Get Connected to Shasta County Services">Shasta</a>
		<a href="http://211norcal.org/tehama/" title="Get Connected to Tehama County Services">Tehama</a>
		<a id="hotkeys" title="Keyboard Navigation Hotkeys" class="lbp_secondary" href="http://211norcal.org/hotkeys.html">Hotkeys</a>
	</div>
	<!-- Pushy Menu -->
	<nav class="pushy pushy-right" data-focus="#first-link">
	    <div class="pushy-content">
		    <ul>
			    <li class="pushy-link close"><a href="#"><i class="fas fa-times"></i> CLOSE</a>
	        	<li class="pushy-link"><a href="#enrichment">Enrichment</a></li>
				<li class="pushy-link"><a href="#support">Support</a></li>
				<li class="pushy-link"><a href="#events">Events</a></li>
				<li class="pushy-link"><a href="#parents">For Parents</a></li>
				<li class="pushy-link"><a href="#partners">Partners</a></li>
	        </ul>
	    </div>
	</nav>
	
	<!-- Site Overlay -->
	<div class="site-overlay"></div>  
	<!--hero-->  
    <section id="hero" class="push">
	    <header class="top-nav">
		    <div class="container">
				<div class="row" id="top">
					<div class="col-xs-6 col-md-8">
						<a href="#" class="logo">211</a>
						<div id="menu-mainnav-1">
						<div id="top-nav">
							<ul class="nav" id="desktop-nav">
								<li><a href="#enrichment">Enrichment</a></li>
								<li><a href="#support">Support</a></li>
								<li><a href="#events">Events</a></li>
								<li><a href="#parents">For Parents</a></li>
								<li><a href="#partners">Partners</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div id="top-cta">
							<p>For More Information</p>
							<a href="tel:211" class="btn btn-primary">Dial 2-1-1</a><a href="<?php the_field('view_services_link'); ?>" class="btn btn-default">View Services</a>
						</div>
						<div id="mobile-nav">
							<button class="menu-btn"><i class="fas fa-bars"></i> MENU</button>
						</div>
					</div>
    			</div>
    			<svg class="ex-lrg-circles"><use xlink:href="#circles" /></svg>
    			<div class="row" id="hero-text">
				 	<div class="col-sm-12">
					 	<h1>Youth<br>Services</h1>
					 	<p><?php the_field('hero_paragraph'); ?></p>
					 	<a href="<?php the_field('view_services_link'); ?>" class="btn btn btn-default btn-lg">Click Here To View Services</a>
					 	
					 	
				 	</div>
    			</div>
			<!--end container--></div>
	    </header>
	    
    <!--end hero--></section>
<div id="contentarea">
    <section id="enrichment" class="push">
	    <svg class="md-circles"><use xlink:href="#circles" /></svg>
	    <div class="container-fluid" id="enrichment-header">
		    <div class="row">
			 	<div class="col-sm-12">
				 	<h2>Enrichment <br>&amp; Resources</h2>
			 	</div>
    		</div>
	    <!--end fluid--></div>
	    <div class="container">
			<div class="row">
		        <div class="col-sm-12">
			        <p><?php the_field('enrichment_paragraph'); ?></p>
		        </div>
		        
		        <?php if( have_rows('enrichment_opportunites') ): ?>

				<?php while( have_rows('enrichment_opportunites') ): the_row(); 

				// vars
				$eu = get_sub_field('enrichment_url');
				$ei = get_sub_field('enrichment_image');
				$et = get_sub_field('enrichment_title');
				$ep = get_sub_field('enrichment_paragraph');
				?>

		        <div class="col-sm-6 col-md-3">
			        <a href="<?php echo $eu; ?>" class="enrichment-item" style="background-image: url('<?php echo $ei; ?>')">
				        <div class="name"><h3><?php echo $et; ?><h3></div>
				        <div class="slide">
					        <p><?php echo $ep; ?></p>
				        </div>			      
				    <!--end Enrichment Link--></a>
		        <!--end col--></div>
		        
		        <?php endwhile; ?>

				<?php endif; ?>  
    		</div>
		<!--end container--></div>
    <!--end enrichment--></section>
    <section id="support" class="push">
	    <div class="bg">
		    <h2>Support</h2>
	    </div>
	    <svg class="lrg-circles circle-1"><use xlink:href="#circles" /></svg>
	    <div class="container">
	    	<div class="row">
				<div class="col-sm-12 card">
					<div class="row">
						<?php if( have_rows('support_services') ): ?>
						<?php while( have_rows('support_services') ): the_row();
						
						$sl = get_sub_field('support_link');
						$si = get_sub_field('support_image');
						$st = get_sub_field('support_title');
						$sp = get_sub_field('support_paragraph');
						?>
						
						<div class="col-sm-6">
							<a href="<?php echo $sl; ?>" class="support-item" style="background-image: url('<?php echo $si; ?>')">
								<div class="name"><h3><?php echo $st; ?><h3></div>
							</a>
						</div>
						<?php endwhile; ?>

						<?php endif; ?> 
    				</div>
				</div>
    		</div>
    		<svg class="md-circles circle-2"><use xlink:href="#circles" /></svg>
    		<div class="row suicide">
				<div class="col-sm-offset-0 col-sm-12 col-md-offset-2 col-md-8">
					<div id="suicide-box">
						<p><?php the_field('suicide_text'); ?></p>
						<a href="<?php the_field('suicide_link'); ?>" class="btn btn-default">Get Help Now</a>
					</div>
				</div>
    		</div>
	    </div>
	    
    </section>
    <?php //if (get_category('24') -> category_count < 0) { ?>
    <section id="events" class="push">
	     <svg class="lrg-circles"><use xlink:href="#circles" /></svg>
	    <div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Upcoming Events</h2>
				</div>
			</div>
			<div class="row">
				
				<?php 
						$args = array(
							'posts_per_page' => '3',
							'cat'   => '24'
							);	
						$the_query = new WP_Query( $args ); ?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php 

// get raw date
$date = get_field('youth_event_date', false, false);


// make date object
$date = new DateTime($date);

?>
				<div class="col-md-4">
					<a href="<?php the_permalink() ?>" class="card event-card">
						<div class="event-detail">
							<h3><?php the_title(); ?></h3>
							<p class="date"><?php echo $date->format('M j, Y'); ?></p>
						</div>
						<div class="learn-more">
							Learn More <i class="fas fa-arrow-right"></i>
						</div>
					</a>
				</div>
				
				<?php endwhile; ?>


						<?php wp_reset_postdata(); ?>

						<?php else : ?>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<a href="http://211norcal.org/category/shasta-county/" class="card event-card">
								<div class="event-detail">
									<h3>No upcoming events. Click to see all news.</h3>
									<p class="date"></p>
								</div>
								<div class="learn-more">
									See All News &amp; Events <i class="fas fa-arrow-right"></i>
								</div>
							</a>
						</div>
						<div class="col-md-4"></div>
						<?php endif; ?>
				
    		</div>
		</div>
    </section>
    <?php //} ?>
    <section id="parents" class="push">
	    <div class="container-fluid">
		<div class="row">
        	<div class="col-sm-12 col-md-3 parent-header">
	        	<h2>For Parents</h2>
        	</div>
			<div class="col-sm-12 col-md-9 parent-content">
				<div class="parent-container">
					<p><?php the_field('for_parents_paragraph'); ?></p>
					<div class="parent-slider">
						<?php if( have_rows('parent_services') ): ?>
						<?php while( have_rows('parent_services') ): the_row(); 

						// vars
						$pl = get_sub_field('parent_link');
						$pi = get_sub_field('parent_image');
						$pt = get_sub_field('parent_title');
						$pp = get_sub_field('parent_paragraph');
						?>

						<div>
							<a href="<?php echo $pl; ?>" class="card" style="background-image: url('<?php echo $pi; ?>')">
					        <div class="name"><h3><?php echo $pt; ?><h3></div>
					        <div class="slide">
						        <p><?php echo $pp; ?></p>
					        </div>			      
							<!--end parent Link--></a>
						</div>
						
						<?php endwhile; ?>

						<?php endif; ?> 

					</div>
					<div class="slider-nav">
						<a class="left"><i class="fas fa-arrow-left"></i></a>
						<a class="right"><i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
    	</div>
		</div>
    </section>
    <section id="partners" class="push">
	     <svg class="lrg-circles"><use xlink:href="#circles" /></svg>
	     <svg class="ex-lrg-circles"><use xlink:href="#circles" /></svg>
	    <div class="container">
		    <div class="row">
				<div class="col-xs-12">
					<h2>Our Partners</h2>
					<p><?php the_field('partner_paragraph'); ?></p>
				</div>
    		</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card partner-card">
						<div class="logo-cont"><img src="<?php bloginfo('template_directory');?>/youth/img/SCHS.png" class="schs"></div>
						<p><?php the_field('partner_1'); ?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card partner-card">
						<div class="logo-cont"><img src="<?php bloginfo('template_directory');?>/youth/img/dignity-health.png" class="dignity-health"></div>
						<p><?php the_field('partner_2'); ?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card partner-card">
						<div class="logo-cont"><img src="<?php bloginfo('template_directory');?>/youth/img/first-five.png" class="first-five"></div>
						<p><?php the_field('partner_3'); ?></p>
					</div>
				</div>
				
    		</div>
		</div>
    </section>
    <section id="bottom-cta">
	    <div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8"><p>Can’t find the services you need?</p></div>
				<div class="col-md-5 col-lg-4"><a href="tel:211" class="btn btn-primary">Dial 2-1-1</a><a href="<?php the_field('view_services_link'); ?>" class="btn btn-default">View Services</a></div>
    		</div>
		</div>
    </section>
</div>
    <footer id="top-footer">
	    <div class="container">
			<div class="row">
				<div class="col-md-3 col-lg-2"><img src="<?php bloginfo('template_directory');?>/youth/img/logo-blue.png"></div>
				<div class="col-md-3 col-lg-2"><img src="<?php bloginfo('template_directory');?>/youth/img/united-way.png"></div>
				<div class="col-md-3 col-lg-2"><img src="<?php bloginfo('template_directory');?>/youth/img/prosperity.png"></div>
				<div class="col-md-3 col-lg-6">
					<ul>
						<li><a href="#enrichment"><span>Enrichment</span></a></li>
						<li><a href="#support"><span>Support</span></a></li>
						<li><a href="#events"><span>Events</span></a></li>
						<li><a href="#parents"><span>Parents</span></a></li>
						<li><a href="#partners"><span>Partners</span></a></li>
    				</ul>
				</div>
    		</div>
		</div>
    </footer>
    <footer id="bottom-footer">
	    <div class="container">
			<div class="row">
				<div class="col-xs-12"><?php echo date("Y")?> <a href="http://211norcal.org/" target="_blank">211 Norcal</a>. All Rights Reserved.</div>
    		</div>
		</div>
    </footer>
     
	<nav id="side-nav">
   		<ul class="nav nav-list">
   			<li><a href="#hero"><span>Hero</span></a></li>
   			<li><a href="#enrichment"><span>Enrichment</span></a></li>
   			<li><a href="#support"><span>Support</span></a></li>
   			<li><a href="#events"><span>Events</span></a></li>
   			<li><a href="#parents"><span>Parents</span></a></li>
   			<li><a href="#partners"><span>Partners</span></a></li>
    	</ul>
  </nav>		
<div style="display:none">
<svg viewBox="0 0 262 262" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="circles">
    <!-- Generator: Sketch 49.1 (51147) - http://www.bohemiancoding.com/sketch -->
    <title>circle square</title>
    <desc>Circles</desc>
    <defs></defs>
    <g id="v2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.3">
        <g id="Youth-DT" transform="translate(-100.000000, -528.000000)" fill="#F58221">
            <g id="cirlce-square" transform="translate(100.000000, 528.000000)">
                <circle id="Oval-3" cx="37.5" cy="37.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-3" cx="37.5" cy="130.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-6" cx="37.5" cy="224.5" r="37.5"></circle>
                <circle id="Oval-3-Copy" cx="129.5" cy="37.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-4" cx="129.5" cy="130.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-7" cx="129.5" cy="224.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-2" cx="223.5" cy="37.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-5" cx="223.5" cy="130.5" r="37.5"></circle>
                <circle id="Oval-3-Copy-8" cx="223.5" cy="224.5" r="37.5"></circle>
            </g>
        </g>
    </g>
</svg>
</div>
</body>
<script src="<?php bloginfo('template_directory');?>/youth/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/youth/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/youth/js/pushy.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/youth/js/jquery.matchHeight.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/youth/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/youth/js/load.min.js"></script>
<?php wp_footer(); ?>
</html>