<?php get_header(); ?>

<div class="col-sm-6 col-sm-offset-1">

    <?php $custom_fields = get_post_custom(get_the_ID()); ?>

    <div class="random-quotes">
        <h3><?= $custom_fields['quotes'][0] ?></h3>
        <?php if(!empty($custom_fields['source'][0])) { ?>
        <a href="<?= $custom_fields['source'][0] ?>">
            <?php } ?>
            <p><?= $custom_fields['author'][0] ?></p>
            <?php if(!empty($custom_fields['source'][0])) { ?>
        </a>
    <?php } ?>
        <a href="javascript:void(0);" class="button refresh">refresh</a>
    </div>
    <?php
    $postList = get_posts([
        'posts_per_page' => -1
    ]);
    $index = array_rand($postList, 1);
    setup_postdata( $postList[$index] );
    global $post; $post = $postList[$index];
    ?>
    <div class="random-post">
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

<?php get_footer(); ?>
