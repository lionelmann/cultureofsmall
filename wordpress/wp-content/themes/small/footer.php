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

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

<script>
    (function($){
        $('#Container').mixItUp();
        $('.anchor').click(function(e) {
            e.preventDefault();
        });
    })(jQuery);
</script>

<?php wp_footer();?>

</body>
</html>