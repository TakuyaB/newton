<?php get_header(); ?>
<!--<div class="news">-->
<!--    <h2>お知らせ</h2>-->
<!--    <p>2017.03.10:現在、サイトデザインを微調整しています！所々、レイアウトが崩れているかもしれませんm(_ _)m</p>-->
<!--</div>-->
<div id="contents">
    <div id="main">
        <?php get_template_part('breadcrumb'); ?>
        <?php if( is_category() ): ?>
            <h1 class="archive-title">
                <i class="fa fa-folder-open"></i>「<?php single_cat_title(); ?>」に関する記事
            </h1>
        <?php else: ?>
        <h1 class="archive-title">新着記事</h1>
        <?php endif; ?><!-- is_category()ここまで -->

        <?php get_template_part('loop'); ?>
    </div><!-- mainここまで -->
    <?php get_sidebar(); ?>
</div><!-- contentsここまで -->
</div><!-- containerここまで -->
<?php get_footer(); ?>