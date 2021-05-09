<?php
	/**
	 * Template Name: Home - Dream Marketing
	 *
	 * The home page template.
	 *
	 * @package UnderStrap
	 */
	
	// Exit if accessed directly.
	defined( 'ABSPATH' ) || exit;
	
	get_header();
	$container = get_theme_mod( 'understrap_container_type' );
	
	if ( is_front_page() ) {
		get_template_part( 'global-templates/hero' );
	}
	?>
<main role="main">
	<section id="header" class="jumbotron text-center top-banner">
		<div class="container">
			<h1 class="jumbotron-heading">Dream Marketing</h1>
			<h3 style="margin-bottom: 25px">Why wait for the customer to come to the show when you can take the show to the customer?</h3>
			<p>Our exhibition vehicle gives you the perfect opportunity to come & present your technology to all those important people who do not manage to get to the traditional trade show anymore. We visit the major Design Manufacturing facilities of some of the world’s largest Defence & Aerospace companies across the UK, Germany, and France.</p>
			<p>
				<a href="#" class="btn btn-primary my-2">Main call to action</a>
				<a href="#" class="btn btn-secondary my-2">Secondary action</a>
			</p>
		</div>
	</section>
	<section id="about">
		<div class="row" style="margin-bottom: 25px">
			<div class="col-md-6 half-section">
				<div class="container">
					<h2 class="section-heading text-center">What We Do</h2>
					<div class="heading-break"></div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="container">
								<i class="fa fa-star fa-3x about-icon"></i>
								<h4>Major Trade Shows Cancelled</h4>
								<p>Take the show to the customer, don’t wait for the customer to come to the show.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="container">
								<i class="fa fa-star fa-3x about-icon"></i>
								<h4>Mass Gatherings Restricted</h4>
								<p>Smaller Showcased Events in a manageable and safe environment.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="container">
								<i class="fa fa-star fa-3x about-icon"></i>
								<h4>Marketing Activities Curtailed</h4>
								<p>An Innovative way to market.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="container">
								<i class="fa fa-star fa-3x about-icon"></i>
								<h4>Supplier Engagement Reduced</h4>
								<p>Re-engage with both new and existing customers.</p>
							</div>
						</div>
					</div>
					<div style="margin-top: 25px">
						<p>Your Company will be one of many exhibitors that will be exposed across Europe to Major Blue-Chip Organisations and accounts within a specific industry. We currently run European Tours in the Automotive, Defence & Aerospace and Medical Device Industries visiting the major OEM’s and Tier 1 Manufacturers across the UK and Central Europe. All our tours are supported by major Publications in the Industry giving you amazing coverage.</p>
						<p>We also organise and run Individual Roadshows for Companies wishing to tailor the tours to their individual requirements. Why not contact us today and discuss your ideas for a tour?</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 section-image" style="background: url('<?php echo get_template_directory_uri(); ?>/img/dream1.jpg')">
			</div>
		</div>
	</section>
	<section id="vehicle">
		<div class="row" style="margin-bottom: 25px">
			<div class="col-md-6 section-image" style="background: url('<?php echo get_template_directory_uri(); ?>/img/tailored2.jpg')">
			</div>
			<div class="col-md-6 half-section">
				<div class="container">
					<h2 class="section-heading text-center">Vehicle Layout</h2>
					<div class="heading-break"></div>
					<p>Inside our unique Exhibition trailer we have up to 24 Exhibition Stands. We invite companies to come with us to showcase their technologies on board. We visit prime industry sites and meet Engineering, Production, Design and Development Teams who rarely get the chance these days to visit the more traditional trade shows.</p>
					<p>Over the last 16 years we have run Industry Specific Roadshows in the Automotive, Defence & Aerospace, Rail, Medical Device Technology and Oil & Gas Industries. In 2021 we plan to run our Rail Industry Tour in March, and Defence & Aerospace Tour in September. These tours will put you on site, in front of the hard-to-reach Engineers, and deliver a unique sales and marketing opportunity.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="spec">
		<div class="row" style="margin-bottom: 25px">
			<div class="col-md-6 half-section">
				<div class="container">
					<h2 class="section-heading text-center">Your Specification and Design – Endless Options</h2>
					<div class="heading-break"></div>
					<div class="row">
						<div class="col-md-6">
							<div class="card m-2">
								<div class="card-body container text-center">
									<h4>Do what you like with this 65 Cubic Metre space.</h4>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card m-2">
								<div class="card-body container text-center">
									<h4>Tailor it to your own specification and design and take it wherever you want to go.</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card m-2">
								<div class="card-body container text-center">
									<h4>Showcase your technology to existing and new customers in a unique environment.</h4>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card m-2">
								<div class="card-body container text-center">
									<h4>Use it for training, presentations, and hospitality. The options are endless.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 section-image" style="background: url('<?php echo get_template_directory_uri(); ?>/img/dream1.jpg')">
			</div>
		</div>
	</section>
	<section id="industry">
		<div class="row" style="margin-bottom: 25px">
			<div class="col-md-6 section-image" style="background: url('<?php echo get_template_directory_uri(); ?>/img/tailored6.jpg')">
			</div>
			<div class="col-md-6 half-section">
				<div class="container">
					<h2 class="section-heading text-center">Industry Specific Roadshows</h2>
					<div class="heading-break"></div>
					<p>Industries that we have successfully covered in the last 16 years include Defence & Aerospace, Automotive, Rail, Oil & Gas and Medical Device Technology.</p>
					<p>We believe our roadshows are by far the best way to connect face to face with Engineering, Purchasing and Senior Management directly on their premises.</p>
					<p>As one of 20 companies you will enjoy the economies of scale as our tours are very competitively priced delivering so much more than the traditional trade show.</p>
					<p>So why not do something a bit different in 2021? Something that is unique, innovative, and exciting. Your stand is already in place, all we require is your artwork and then you can come and meet all those lovely Engineers that don’t go to trade shows anymore!</p>
				</div>
			</div>
		</div>
	</section>
	<section id="testimonials" class="py-5">
		<div class="container">
			<h2 class="section-heading text-center">Testimonials</h2>
			<div class="heading-break"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="card m-2">
						<div class="card-body container">
							<p>“Dream Marketing International have certainly delivered what they promised! Visiting the rail industry sites, seeing some amazing things and above all meeting some important and interesting people have made this a thoroughly worthwhile and enjoyable experience.”</p>
						</div>
					</div>
					<h4>- Helen Richards, Product Marketing Manager, Telemecanique Sensors</h4>
				</div>
				<div class="col-md-4">
					<div class="card m-2">
						<div class="card-body container">
							<p>“I would thoroughly commend the activity of the Dream Marketing Defence and Aerospace Technology Roadshow, for a relevant and useful way of making a large number of on-site employees aware of what current and new technology is available from selected suppliers and manufacturers.”</p>
						</div>
					</div>
					<h4>- David Banks-Broome, Thales Crawley</h4>
				</div>
				<div class="col-md-4">
					<div class="card m-2">
						<div class="card-body container">
							<p>“On personal level I would like to recommend you and your team, as you did not only organize the whole team , but you impressed me by the way you personally welcomed each and every visitors, supported us the participants, made lots of small but important things that showed how much you care about our success.”</p>
						</div>
					</div>
					<h4>- Mr Amos Nevo, V.P. Business Development, Foamotive</h4>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="py-5" style="background: #2671bc">
		<div class="container">
			<h2 class="section-heading text-center text-white">For a full information pack please contact</h2>
			<div class="heading-break"></div>
			<h3 class="text-center text-white">John Smith of Dream Marketing International Ltd on</h3>
			<div class="row" style="margin-top: 25px">
				<div class="col-md-6">
					<div class="card m-2">
						<div class="card-body container">
							<h3 class="text-center"><i class="fa fa-phone fa-lg"></i> +44 (0)1234 567890</h3>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card m-2">
						<div class="card-body container">
							<h3 class="text-center"><i class="fa fa-envelope-o fa-lg"></i> john@example.com</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();