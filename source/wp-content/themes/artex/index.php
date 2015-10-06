<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div class="col-sm-6 col-sm-offset-1">

<?php
$quotesList = get_posts([
    'posts_per_page' => 10000,
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
            <a href="<?= $custom_fields['source'][0] ?>">
        <?php } ?>
            <?= $custom_fields['author'][0] ?>
        <?php if(!empty($custom_fields['source'][0])) { ?>
            </a>
        <?php } ?>
    </p>
    <a href="javascript:void(0);" class="button refresh">refresh</a>
    <a href="<?= get_permalink($quotesList[$index]->ID) ?>" class="button open-link">detail</a>
</div>
<?php
$postList = get_posts([
    'posts_per_page' => 10000
]);
$index = array_rand($postList, 1);
setup_postdata( $postList[$index] );
?>
<div class="random-post">
    <?= get_the_post_thumbnail($postList[$index]->ID, 'large') ?>
    <h3><a href="<?= get_permalink($postList[$index]->ID) ?>">
        <?= get_the_title($postList[$index]->ID); ?>
    </a></h3>
    <p><?php the_excerpt(); ?></p>
    <a class="view-article" href="<?= get_permalink($postList[$index]->ID) ?>"">Read more</a>
</div>
<?php
wp_reset_postdata();
?>
</div>
<?php get_sidebar('right'); ?>

<?php get_footer(); ?>
