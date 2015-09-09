<?php 

/** 
* Template Name: Search
* @example: <?php get_search_form() ?>
* Dependency: searchform.php
*/ 

?>

<?php get_header() ?>

<main>
  <article>
  <script>
    (function() {
      var cx = '012883476298758501389:gdx0drwv2wo';
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
  </article>
</main>

<?php get_footer() ?>