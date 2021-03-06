<footer>
    <div class="inner">
        <div class="content">
            <?php dynamic_sidebar('footer'); ?>
        </div>
        <div class="content">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false, 'items_wrap' => '<ul class="footer-menu">%3$s</ul>') ); ?>
        </div>
        <div class="content">
            <p>
                <a href="https://www.facebook.com/cultureofsmall" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="https://twitter.com/cultureofsmall" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href="<?php bloginfo('rss2_url'); ?>"><i class="fa fa-rss-square fa-2x"></i></a>
                <a href="https://instagram.com/cultureofsmall" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
            </p>
        </div>
    </div>
</footer>

<!-- Copyright-->
<section class="copyright">
    <div class="inner">  
        <small><i class="fa fa-envelope"></i> <a href="mailto:info@cultureofsmall.com">info@cultureofsmall.com</a></small>
        <small>&#169; Copyright <?php echo date('Y')?> Culture of Small &#8226; <a href="<?php bloginfo( 'url' ); ?>/terms-of-use/">Terms of use</a> &#8226; <a href="<?php bloginfo( 'url' ); ?>/privacy-policy/">Privacy</a></small>
    </div>
</section>
<?php echo $population; ?>
<?php wp_footer();?>

<script>
;(function($, jVette) {
    jVette && jVette({
        slide: { 
            duration: 350, 
            easing: 'easeInOutQuad' 
        }
    });

    $('#jvette').on('mouseenter', 'a', function()
    {
        $(this).addClass('hover');

    }).on('mouseleave', 'a', function()
    {
        $(this).delay(250).removeClass('hover');
    });

})(window.jQuery, window.jVette);
</script>

</body>
</html>