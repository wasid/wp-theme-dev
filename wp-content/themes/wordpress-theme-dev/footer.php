<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_theme_dev
 */

?>

<?php wp_footer(); ?>
    
<!-- Sign up -->
    <section id="signup" data-type="background" data-speed="4">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                    <p><a href="#" class="btn btn-block btn-lg btn-success">Yes, Sign me up!</a></p>
                </div>
            </div>
        </div>
        
    </section>
    
<!-- Footer -->
    <footer>
        <div class="container">
            <div class="col-sm-3">
                <p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></img></a></p>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li><a href="">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="signup-link"><a href="">Sign Up Now!</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <p class="pull-right">&copy; 2017 Wasid Hossain</p>
            </div>
        </div>
    </footer>
    
<!--Modal-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
          </div>
          <div class="modal-body">
            <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best selling course, <em>for free!</em>&hellip;</p>
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label for="subscribe-name" class="sr-only">Your first name</label>
                    <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name"/>
                </div>
                <div class="form-group">
                    <label for="subscribe-email" class="sr-only">Your email</label>
                    <input type="email" class="form-control" id="subscribe-email" placeholder="Your email"/>
                </div>
                <input type="submit" class="btn btn-danger" value="Subscribe!"/>
            </form>
            <hr>
            <p><small>By providing your email you consent to receiving occational promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe att anytime.</small></p>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!--jQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
    <!--bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
