<?php get_header(); ?>

<div class="col-sm-6 col-sm-offset-1">

	<?php the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>

		<div class="information">
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<?php the_post_thumbnail('small'); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<?php the_title('<h1>', '</h1>', true) ?>
			<!-- post details -->
			<ul class="meta-info">
				<li>
					<i class="fa fa-calendar-o"></i>
					<span class="date"><?php the_time('j F Y'); ?></span>
				</li>
				<li>
					<i class="fa fa-book"></i>
					<?php the_category(', '); // Separated by commas ?>
				</li>
				<?php if(has_tag()) { ?>
					<li>
						<i class="fa fa-tags"></i>
						<?php the_tags( '', ', ', ''); // Separated by commas with a line break at the end ?>
					</li>
				<?php } ?>
			</ul>
			<!-- /post details -->
			<div class="intro">
				<?php the_excerpt() ?>
			</div>
		</div>
		<div class="body-content">
			<?php the_content(); // Dynamic Content ?>
		</div>
		<div class="information bottom">
			<!-- post details -->
			<ul class="meta-info">
				<li>
					<i class="fa fa-calendar-o"></i>
					<span class="date"><?php the_time('j F Y'); ?></span>
				</li>
				<li>
					<i class="fa fa-book"></i>
					<?php the_category(', '); // Separated by commas ?>
				</li>
				<?php if(has_tag()) { ?>
				<li>
					<i class="fa fa-tags"></i>
					<?php the_tags( '', ', ', ''); // Separated by commas with a line break at the end ?>
				</li>
				<?php } ?>
			</ul>
			<!-- /post details -->
		</div>

	</article>
	<!-- /article -->

</div>

<?php get_footer(); ?>
