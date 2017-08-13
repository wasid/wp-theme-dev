<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wordpress_theme_dev
 */
 
 // Custom Fields
	$pre_launch_price   = get_post_meta(12, pre_launch_price, true);
    $launch_price       = get_post_meta(12, launch_price, true);
    $final_price        = get_post_meta(12, final_price, true);
    $course_url         = get_post_meta(12, cource_url, true);
    $button_text        = get_post_meta(12, button_text, true);
 
?>

    <!-- Hero -->
    <section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo"></img>
                    </div>
                    <!--col-->
                    <div class="col-sm-7 hero-text">
                        <h1><?php bloginfo('name'); ?></h1>
                        <p class="lead">
                            <?php bloginfo('description'); ?>
                        </p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends Soon!</small></h4>
                                <span><?php echo $pre_launch_price; ?></span>
                            </div>
                            <div class="price">
                                <h4>Launch Price <small>Coming Soon!</small></h4>
                                <span><?php echo $launch_price; ?></span>
                            </div>
                            <div class="price">
                                <h4>Final Price <small>Coming Soon!</small></h4>
                                <span><?php echo $final_price; ?></span>
                            </div>
                        </div>
                        <!--price-timeline-->
                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                    </div>
                    <!--col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </article>
        <!--dend article-->
    </section>

