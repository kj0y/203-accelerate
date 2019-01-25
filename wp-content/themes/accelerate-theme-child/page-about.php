<?php
/**
 * The template for displaying the about page
 * 
 * This is the template that displays the about page.
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */ 

get_header(); ?>

	<?php while ( have_posts() ) : the_post();
		$size = "full";
		$header_image = get_field('header_image');
		$header_text = get_field('header_text');
		$intro_header = get_field('intro_header');
		$intro = get_field('intro');
		$service_1 = get_field('service_1');
		$service_1_detail = get_field('service_1_detail');
		$image_1 = get_field('image_1');
		$service_2 = get_field('service_2');
		$service_2_detail = get_field('service_2_detail');
		$image_2 = get_field('image_2');
		$service_3 = get_field('service_3');
		$service_3_detail = get_field('service_3_detail');
		$image_3 = get_field('image_3');
		$service_4 = get_field('service_4');
		$service_4_detail = get_field('service_4_detail');
		$image_4 = get_field('image_4'); ?>	

	<div class="header-image">
		<?php if($header_image) {
			echo wp_get_attachment_image( $header_image, $size );
		} ?>
	</div><!-- main-content -->

	<div id="about" class="site-content">

	<article class="services">
		<h4 class="intro-header"><?php echo $intro_header; ?></h4>
		<p class="intro"><?php echo $intro; ?></p>

		<div class="services-offered">
			<div class="service-item">
				<div class="left-image">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1 );
					} ?>
				</div>
				<div class="right-text">
				<h2 class="service-title">
					<?php if($service_1) {
						echo $service_1;
					} ?></h2><br>
					<?php if($service_1_detail) {
						echo $service_1_detail;
					} ?>
				</div>
			</div>
			<div class="service-item">
				<div class="left-text">
					<h2 class="service-title"><?php if($service_2) {
						echo $service_2;
					} ?></h2><br>
					<?php if($service_2_detail) {
						echo $service_2_detail;
					} ?>
				</div>
				<div class="right-image">
					<?php if($image_2) {
						echo wp_get_attachment_image( $image_2 );
					} ?>
				</div>
			</div>
			<div class="service-item">
				<div class="left-image">
					<?php if($image_3) {
					echo wp_get_attachment_image( $image_3 );
					} ?>
				</div>
				<div class="right-text">
					<h2 class="service-title"><?php if($service_3) {
						echo $service_3;
					} ?></h2><br>
					<?php if($service_3_detail) {
						echo $service_3_detail;
					} ?>
				</div>
			</div>
			<div id="bottom-div" class="service-item">
				<div class="left-text">
					<h2 class="service-title"><?php if($service_4) {
						echo $service_4;
					} ?></h2><br>
					<?php if($service_4_detail) {
						echo $service_4_detail;
					} ?>
				</div>
				<div class="right-image">
					<?php if($image_4) {
						echo wp_get_attachment_image( $image_4 );
					} ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</article>
</div><!-- main-content -->

</div><!-- #primary -->

<nav id="navigation" class="container">
	<div class="services-center"><h1 class="closing-line">Interested in working with us?</h1><a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></div>
</nav>

<?php get_footer(); ?>