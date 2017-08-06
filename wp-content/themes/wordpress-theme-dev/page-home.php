<?php
/*
    Template Name: Home Page
*/
    $pre_launch_price   = get_post_meta(12, pre_launch_price, true);
    $launch_price       = get_post_meta(12, launch_price, true);
    $final_price        = get_post_meta(12, final_price, true);
    $cource_url         = get_post_meta(12, cource_url, true);
    $button_text        = get_post_meta(12, button_text, true);
    $optin_text         = get_post_meta(12, optin_text, true);
    $optin_button_text  = get_post_meta(12, optin_button_text, true);

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
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-boost.png" att="Chart">
                <h2>How You Can Boots Your Income</h2>
            </div>
            <p class="lead">
                Whether you're a freelance designer, entrepreneur, employee for a company, code hobbyist, or looking for a new career — this course gives you an immensely valuable skill that will enable you to either:
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Make money on the side</h3>
                    <p>So you can save up for that Hawaiian vacation you’ve been wanting, help pay off your debt, your car, your mortgage, or simply just to have bonus cash laying around
                    </p>
                </div>
                <div class="col-sm-6">
                    <h3>Create a full-time income</h3>
                    <p>
                       WordPress developers have options. Many developers make a generous living off of creating custom WordPress themes and selling them on websites like ThemeForest. Freelance designers and developers can also take on WordPress projects and make an extra $1,000 - $5,000+ per month.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- who benefits -->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" att="Chart">
                <h2>How You Can Boots Your Income</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3>Graphic & Web Designers</h3>
                    <p>Graphic designers are extremely talented, but ask them to code their designs and they’ll freeze up! This leaves them with no other choice but to hire a web developer. Any professional graphic designers knows web developers can be expensive.
                    </p>
                    <p>If you’re a designer, learning to code your own WordPress websites can change your business entirely! Now, not only are you a great designer, but you’re a skillful developer, too! This puts you in a position to <strong>make an extra $1,000 – $5,000 per project.</strong>
                    </p>
                    
                    <h3>Entrepreneurs</h3>
                    <p>Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the cut-throat world of the Startup company, it’s a necessity to have a world-class website. However, world-class websites come with a large price tag.
                    </p>
                    <p>If you can learn how to build a high-quality startup website by yourself, then you’ve just saved yourself a lot of cash, <strong>tens of thousands of dollars in many cases.</strong>
                    </p>
                    
                    <h3>Employees</h3>
                    <p>Any company knows the education & training of their employees is key to a thriving team.
                    </p>
                    <p>Depending on the type of company you work for, if you understand how to code, and can develop CMS driven websites, that gives you <strong>negotiating power for a better position, or a higher salary.</strong>
                    </p>
                    
                    <h3>Code Hobbyists</h3>
                    <p>Any company knows the education & training of their employees is key to a thriving team.
                    </p>
                    <p>It’s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their arsenal of tools to play with — you can even <strong>sell WordPress themes and plugins for cash!</strong> The possibilities are truly endless.
                    </p>
                    
                    <h3>People Looking for a New Career</h3>
                    <p>Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to work almost anywhere in the world? Becoming a Web Developer might be the answer for you.
                    </p>
                    <p><strong>Web developers are paid well, anywhere from $33,000 to more than $105,000 per year.</strong> They get to work at amazing companies that are changing the world, or they enjoy the ability to start their own companies, become location-independent and work from home, from coffee shops, in an airplane, on the beach, or wherever they want!
                    </p>
                    
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
