<footer>
    <div class="inner">
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque porta elit a pharetra.</p>
        </div>
        <div class="content">
        <p>Submit your stories</p>
        <form>
            <input type="text" name="email" placeholder="Email">
            </form>    
        </div>
        <div class="content">
            <p>
            <i class="fa fa-facebook-square fa-3x"></i>
            <i class="fa fa-twitter-square fa-3x"></i>
            <i class="fa fa-rss-square fa-3x"></i></p>
        </div>
    </div>
</footer>

<!-- Copyright-->
<section class="copyright">
    <div class="inner">
        <small>&#169; Copyright <?php echo date('Y')?> E.R.A. Architects Inc.</small>  
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