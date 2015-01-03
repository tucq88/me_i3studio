<?php
get_header();
$tempUrl = get_template_directory_uri();
?>

<div id="h" style="background-image: url('<?= get_field("header_bg") ?>')">
    <div class="logo">
        <h2><?= get_bloginfo('name') ?></h2>
    </div>
    <!--/logo-->
    <div class="container centered">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1><?= get_field('header_intro') ?></h1>
            </div>
        </div>
        <!--/row-->

        <div class="row mt">
            <?php if ( have_rows('header_primary') ) { ?>
                <?php while ( have_rows('header_primary')) { the_row(); ?>
                    <div class="col-sm-4">
                        <i class="<?= get_sub_field('primary_icon') ?>"></i>

                        <h3><?= get_sub_field('primary_title') ?></h3>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <!--/row-->
    </div>
    <!--/container-->
</div>
<!--Header-->

<div class="container ptb">
    <div class="row">
        <h2 class="centered mb"><?= get_field('story_title') ?></h2>

        <?php if ( have_rows('story_group') ) { ?>
            <?php while ( have_rows('story_group')) { the_row(); ?>
                <div class="col-md-6">
                    <?= get_sub_field('story_content') ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <!--/row-->
</div>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="<?= get_field('story_img') ?>" class="img-responsive" alt="">
        </div>
    </div>
    <!--/row-->
</div>
<!--/.container-->

<div id="g">
    <div class="container">
        <div class="row centered">
            <h2><?= get_field('work_title') ?></h2>

            <div class="col-md-8 col-md-offset-2">
                <?= get_field('work_intro') ?>
            </div>
            <!--/col-md-8-->
        </div>
        <!--/row-->
    </div>
    <!--/.container-->
    <div class="portfolio-centered mt">
        <div class="recentitems portfolio">

            <?php
                $post_objects = get_field('list_projects');
                if ($post_objects) { ?>
                    <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="portfolio-item">
                            <div class="he-wrap tpl6">
                                <img src="<?= get_field('intro_img') ?>" class="img-responsive" alt="">

                                <div class="he-view">
                                    <div class="bg a0" data-animate="fadeIn">
                                        <h3 class="a1" data-animate="fadeInDown"><?= the_title() ?></h3>
                                        <a data-rel="prettyPhoto" href="<?= get_field('intro_img') ?>" class="dmbutton a2" data-animate="fadeInUp">
                                            <i class="ion-search"></i>
                                        </a>
                                        <a href="<?php get_field('store_url') ?>" class="dmbutton a2" data-animate="fadeInUp">
                                            <i class="ion-link"></i>
                                        </a>
                                    </div>
                                    <!-- he bg -->
                                </div>
                                <!-- he view -->
                            </div>
                            <!-- he wrap -->
                        </div>

                    <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php } ?>

        </div>
        <!-- portfolio -->
    </div>
    <!-- portfolio container -->

    <div class="container mt">
        <div class="row clients centered">
            <p class="mb"><?= get_field('client_intro') ?></p>

            <?php if ( have_rows('list_clients') ) { $count = 0; ?>
                <?php while ( have_rows('list_clients')) {
                    the_row();
                    $clientUrl = get_sub_field('client_url');
                    $clientImg = get_sub_field('client_img');
                    ++$count;
                ?>
                    <div class="col-sm-2 <?= ($count == 1) ? 'col-sm-offset-1' : '' ?>">
                        <?php if ($clientUrl)  { ?><a href="<?= $clientUrl ?>"><?php } ?>
                            <img src="<?= $clientImg ?>" alt="">
                        <?php if ($clientUrl)  { ?></a><?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
        <!--/row-->
    </div>
    <!--/container-->
</div>
<!--/.G-->

<div id="sep" style="background-image: url('<?= get_field("footer_bg") ?>')">
    <div class="container">
        <div class="row centered">
            <div class="col-md-8 col-md-offset-2">
                <h1><?= get_field('footer_intro')?></h1>

                <h3 class="mb"><?= get_field('footer_content') ?></h3>
                <a class="btn btn-conf btn-clear" href="javascript:void(0)" id="request-info">Request for Information</a>

                <?php if ( have_rows('footer_contact_block') ) { ?>
                    <div class="contact-info" style="visibility: hidden;">
                        <div class="row">
                            <?php while ( have_rows('footer_contact_block')) { the_row(); ?>
                                <div class="col-sm-4">
                                    <h3><?= get_sub_field('contact_title') ?></h3>
                                    <p><?= get_sub_field('contact_info') ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/container-->
</div>
<!--/.sep-->

<?php get_footer(); ?>