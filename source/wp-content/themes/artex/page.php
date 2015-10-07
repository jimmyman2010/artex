<?php get_header(); ?>

<div class="col-sm-6 col-sm-offset-1">

	<?php the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
		<div class="body-content">
			<?php the_content(); // Dynamic Content ?>
		</div>

	</article>
	<!-- /article -->

</div>

<?php get_footer(); ?>
