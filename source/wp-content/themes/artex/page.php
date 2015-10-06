<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div class="col-sm-6 col-sm-offset-1">

	<?php the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('body-content'); ?>>

		<?php the_content(); // Dynamic Content ?>

	</article>
	<!-- /article -->

</div>
<?php get_sidebar('right'); ?>

<?php get_footer(); ?>
