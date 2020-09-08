<?php
/*
Template Name: Archives
*/
get_header(); 
?>
<h2>Aankomende weekenden</h2>
<?php while ( have_posts() ) : the_post();  ?>
<div class="container pagecontent">   
<a href="<?php the_permalink() ?>"><?php the_title() ?></a>

</div>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
