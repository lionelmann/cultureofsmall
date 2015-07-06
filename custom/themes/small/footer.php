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
            <i class="fa fa-facebook-square fa-2x"></i>
            <i class="fa fa-twitter-square fa-2x"></i>
            <i class="fa fa-rss-square fa-2x"></i></p>
        </div>
    </div>
</footer>

<!-- Copyright-->
<section class="copyright">
    <div class="inner">
        <small>&#169; Copyright <?php echo date('Y')?> Small</small>  
    </div>
</section>

<?php wp_footer();?>

<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

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


(function($){
    $('#container').mixItUp();
    $('.anchor').click(function(e) {
        e.preventDefault();
    });
})(jQuery);
</script>

</body>
</html>