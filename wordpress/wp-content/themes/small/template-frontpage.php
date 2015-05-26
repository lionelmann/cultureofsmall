<?php 
/*
 * Template Name: MixUp
 */
get_header();?>

<section class="hero">
    <h1>Beautiful Image</h1>
</section>

<section class="filters">
    <ul>
    <li class="filter" data-filter="all"><a class="anchor" href="#">Show All</a></li>
    <li class="filter" data-filter=".category-1"><a class="anchor" href="#">Category 1</a></li>
    <li class="filter" data-filter=".category-2"><a class="anchor" href="#">Category 2</a></li>
    <li class="filter" data-filter=".category-3"><a class="anchor" href="#">Category 3</a></li>
    <li class="filter" data-filter=".category-4"><a class="anchor" href="#">Category 4</a></li>
    <li class="sort" data-sort="default"><a class="anchor" href="#">Default</a></li>
    <li class="sort" data-sort="myorder:asc"><a class="anchor" href="#">Ascending</a></li>
    <li class="sort" data-sort="myorder:desc"><a class="anchor" href="#">Descending</a></li>
    <li class="sort" data-sort="random"><a class="anchor" href="#">Random</a></li>
    </ul>
</section>

<div class="wrapper">
    <article>
        <div id="Container">
            <div class="mix category-1" data-myorder="1" style="background: rgba(41, 64, 93, 1)">1</div>
            <div class="mix category-2" data-myorder="2" style="background: rgba(155, 28, 45, 1);">2</div>
            <div class="mix category-1" data-myorder="3" style="background: rgba(41, 64, 93, 1)">1</div>
            <div class="mix category-2" data-myorder="4" style="background: rgba(155, 28, 45, 1);">2</div>
            <div class="mix category-1" data-myorder="5" style="background: rgba(41, 64, 93, 1)">1</div>
            <div class="mix category-2" data-myorder="6" style="background: rgba(155, 28, 45, 1);">2</div>
            <div class="mix category-3" data-myorder="7" style="background: rgba(126, 174, 222, 1)">3</div>
            <div class="mix category-4" data-myorder="8" style="background: rgba(215, 221, 223, 1)">4</div>
            <div class="mix category-3" data-myorder="9" style="background: rgba(126, 174, 222, 1)">3</div>          
        </div>
    <article>
</div>

<?php get_footer();?>