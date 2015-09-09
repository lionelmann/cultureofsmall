<?php 

/** 
* Template Name: Search
* @example: <?php get_search_form() ?>
* Dependency: searchform.php
*/ 

?>

<?php get_header() ?>

<main>
  
  <script>
    (function() {
      var cx = '011462022890732872651:qy50o7mjgyk';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
          '//www.google.com/cse/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>
  <gcse:searchresults-only noResultsString="Sorry, we coudn't find any posts containing &#8216;<?php echo$_REQUEST["q"]; ?>&#8217;."</gcse:searchresults-only>
  
</main>

<?php get_footer() ?>