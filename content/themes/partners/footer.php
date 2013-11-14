<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Partners
 */
?>

		</div><!-- .inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner">
			<div class="site-info">
				<?php do_action( 'partners_credits' ); ?>
				<p>&copy 2013 ThisIsKC, All Rights Reserved</p>
			</div><!-- .site-info -->
		</div><!-- .inner -->	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>