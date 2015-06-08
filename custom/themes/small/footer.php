<footer>
    <div class="inner">
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque porta elit a pharetra.</p>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque porta elit a pharetra.</p>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque porta elit a pharetra.</p>
        </div>
    </div>
</footer>

<!-- Copyright-->
<section class="copyright">
    <div class="inner">
        <small>Copyright &#169; <?php echo date('Y')?></small>    
    </div>
</section>

<?php wp_footer();?>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
</script>

<script>
    (function($){
        $('#container').mixItUp();
        $('.anchor').click(function(e) {
            e.preventDefault();
        });
    })(jQuery);
</script>

</body>
</html>