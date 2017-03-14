<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Health_Access2017
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div id="copyright" class="container">
		<div class="footer-left s_span_6">
			<?php dynamic_sidebar('footer-left'); ?>
		</div>
		<div class="footer-right s_span_6">
			<?php dynamic_sidebar('footer-right'); ?>
		<div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>