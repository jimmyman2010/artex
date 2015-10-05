<!-- sidebar -->
<aside class="sidebar sidebar-left" role="complementary">
    <a class="left-menu-inner" href="<?= home_url() ?>"></a>
    <a class="close-sidebar" href="javascript:;"></a>
    <div class="site-brief">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</div>
    <div class="sidebar-widget">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-left')) ?>
    </div>
    <p class="copyright">C 2015. All rights reserved.</p>
</aside>
<!-- /sidebar -->