<?php
/*
    Template Name: Home Page
*/
    // Custom Fields 
    $pre_launch_price   = get_post_meta(12, pre_launch_price, true);
    $launch_price       = get_post_meta(12, launch_price, true);
    $final_price        = get_post_meta(12, final_price, true);
    $cource_url         = get_post_meta(12, cource_url, true);
    $button_text        = get_post_meta(12, button_text, true);
    $optin_text         = get_post_meta(12, optin_text, true);
    $optin_button_text  = get_post_meta(12, optin_button_text, true);
    
    // Advanced Custom Fields - Boost your income section
    
    $income_feature_image       = get_field('income_feature_image');
    $income_section_title       = get_field('income_section_title');
    $income_section_description = get_field('income_section_description');
    $reason_1_title             = get_field('reason_1_title');
    $reason_1_description       = get_field('reason_1_description');
    $reason_2_title             = get_field('reason_2_title');
    $reason_2_description       = get_field('reason_2_description');
    
    // Advanced Custom Fields - Who should yake this course section
    
    $who_feature_image       = get_field('who_feature_image');
    $who_section_title       = get_field('who_section_title');
    $who_section_body        = get_field('who_section_body');

get_header(); ?>

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
                        <p><a class="btn btn-lg btn-danger" href="<?php echo $cource_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                    </div>
                    <!--col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </article>
        <!--dend article-->
    </section>
    
    <!-- Opt in section -->
    <section id="optin">

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text; ?></p>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-success btn-ld btn-block" data-toggle="modal" data-target="#myModal">
                        <?php echo $optin_button_text; ?>
                    </button>
                </div>
            </div>
        </div>

    </section>
    
    <!-- Boots your income -->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">
                
                <?php if( !empty($income_feature_image) ) : ?>
                    
                    <img src="<?php echo $income_feature_image['url']; ?>" att="<?php echo $income_feature_image['alt']; ?>">
                
                <?php endif; ?>
                
                <h2><?php echo $income_section_title; ?></h2>
            </div>
            <p class="lead">
                <?php echo $income_section_description; ?>
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_description; ?></p>
                </div>
                <div class="col-sm-6">
                    <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_description; ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- who benefits -->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <?php if( !empty($who_feature_image) ) : ?>
                    
                    <img src="<?php echo $who_feature_image['url']; ?>" att="<?php echo $who_feature_image['alt']; ?>">
                
                <?php endif; ?>
                
                <h2><?php echo $who_section_title; ?></h2>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $who_section_body; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Course features -->
    <section id="course-features">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" att="Chart">
                <h2>Course Features</h2>
            </div> 
            <div class="row">
                <div class="col-sm-2">
                    <i class="fa fa-youtube-play fa-3x"></i>
                    <h4>Lifetime access to 80+ lectures</h4>
                </div>
                <div class="col-sm-2">
                    <i class="fa fa-eye fa-3x"></i>
                    <h4>10+ hours of HD video content</h4>
                </div>
                <div class="col-sm-2 fa-3x">
                    <i class="fa fa-calendar"></i>
                    <h4>30-day money back guarantee</h4>
                </div>
                <div class="col-sm-2">
                    <i class="fa fa-users fa-3x"></i>
                    <h4>Access to a community of like-minded students</h4>
                </div>
                <div class="col-sm-2">
                    <i class="fa fa-user fa-3x"></i>
                    <h4>Direct access to the instructor</h4>
                </div>
                <div class="col-sm-2">
                    <i class="fa fa-mobile fa-4x"></i>
                    <h4>Accessible content on your mobile devices</h4>
                </div>
                
            </div>
        </div> 
    </section>
    
    <!-- Projects Features -->
    <section id="project-features">
        <div class="container">
            <h2>Final Project Features</h2>
            <p class="lead">
                Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website you are going to build? You're looking at it! The website you're using right now is the website you will have built entirely by yourself, by the end of this course.
            </p>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design"></img>
                    <h3>Sexy & Modern Design</h3>
                    <p>
                        You get to work with a modern, professional quality design & layout.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code"></img>
                    <h3>Quality HTML5 & CSS3</h3>
                    <p>
                       You’ll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="CMS"></img>
                    <h3>Easy-to-use CMS</h3>
                    <p>
                        Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.
                    </p>
                </div>
            </div>
        </div>
        
    </section>
    
    <!-- Video Featurette -->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Watch The introduction</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/oTRZYnYQlmo" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Instructor -->
    <section id ="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Your instructor <small>Wasid Hossain</small></h2>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                        
                    </div>
                    <p class="lead">
                            A highly skilled professional, Wasid Hossain is a passionate and experienced web designer, developer, blogger and digital entrepreneur.
                        </p>
                    <p>Hailing from North Of The Wall (Yellowknife, Canada), Wasid made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>

                    <p>Wasid's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big & small, across the Americas.</p>
                    
                    <p>Wasid builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
                    <hr>
                    <h3>The Number's <small>They Don't Lie!</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41,000+ <span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    1,000+ <span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    10+ <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials -->
    <section id="kudos">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What people Saying about Wasid</h2>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                        </div>
                        <div class="col-sm-8">
                                <blockquote>These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you’re slamming out lines of code. I’ve taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.

                                    <cite>&mdash; Brennan, graduate of all of Wasid’s courses</cite>
                                </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
                        </div>
                        <div class="col-sm-8">
                                <blockquote>These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you’re slamming out lines of code. I’ve taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.

                                    <cite>&mdash; Ernest, graduate of all of Wasid’s courses</cite>
                                </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                        </div>
                        <div class="col-sm-8">
                                <blockquote>These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you’re slamming out lines of code. I’ve taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.

                                    <cite>&mdash; Ben, graduate of all of Wasid’s courses</cite>
                                </blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="AJ">
                        </div>
                        <div class="col-sm-8">
                                <blockquote>These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you’re slamming out lines of code. I’ve taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.

                                    <cite>&mdash; AJ, graduate of all of Wasid’s courses</cite>
                                </blockquote>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>

<?php

get_footer();
