<?php get_header(); ?>

	<div class="col-sm-6 col-sm-offset-1">

		<?php
		$quotesList = get_posts([
			'posts_per_page' => -1,
			'post_type' => 'quotes'
		]);

		$index = array_rand($quotesList, 1);

		$custom_fields = get_post_custom($quotesList[$index]->ID);

		wp_reset_postdata();
		?>

		<div class="random-quotes">
			<h3><?= $custom_fields['quotes'][0] ?></h3>
			<p>
				<?php if(!empty($custom_fields['source'][0])) { ?>
				<a href="<?= $custom_fields['source'][0] ?>" <?php if($custom_fields['source'][0] !== '#') { ?>target="_blank"<?php } ?>>
					<?php } ?>
					<?= $custom_fields['author'][0] ?>
					<?php if(!empty($custom_fields['source'][0])) { ?>
				</a>
			<?php } ?>
			</p>
			<a href="javascript:void(0);" class="button refresh">refresh</a>
			<a href="<?= get_permalink($quotesList[$index]->ID) ?>" class="button open-link">detail</a>
		</div>

		<div class="col-sm-12 list-title">
			<h2><?php _e( 'Tag: ', 'html5blank' ); echo single_tag_title('', false); ?></h2>
		</div>
		<div class="blog-list row">
			<?php get_template_part('loop'); ?>
		</div>
		<?php get_template_part('pagination'); ?>
	</div>

<?php get_footer(); ?>