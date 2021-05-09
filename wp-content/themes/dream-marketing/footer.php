<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mainlogo.png" style="width: 200px"></img>
          <small class="d-block mb-3 text-muted">© 2021. All Rights Reserved.</small>
        </div>
        <div class="col-6 col-md">
          <h5>Quick Links</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
		<h5>Quick Links</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
		<h5>Quick Links</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
		<h5>Quick Links</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
            <li><a class="text-muted" href="#">Some Link Here</a></li>
          </ul>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>

