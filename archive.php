<?php
/*
Template Name: Archives
*/
get_header(); 
?>
<div class="container pagecontent">  
<h2>Hoe geef ik me op?</h2>

<p>Je kan je voor een weekend opgeven door hier het inschrijfformulier in te vullen. Voor je je opgeeft dien je wel op de hoogte te zijn van het weekendreglement, dat je op kan opvragen bij het bestuur. Een belangrijke regel hieruit is dat je je uiterlijk een week van te voren moet afmelden, omdat je anders voor (een deel van) de kosten opdraait. Zodra je je op hebt gegeven krijg je hiervan een bevestiging. Je hoort vervolgens uiterlijk een week van tevoren of je definitief mee kan.</p>

<h2>Overzicht weekenden</h2>

<p>Het totaaloverzicht van alle klimweekenden die door de ASAC georganiseerd gaan worden.</p>

<table>
	<tr>
    	<th>Naam</th>
    	<th>Locatie</th>
    	<th>Datum</th>
        <th>Inschrijving</th>
        <th>Aanmeldingen</th>
    </tr>
   
<?php while ( have_posts() ) : the_post();  ?>
<tr>
<td><a href="<?php the_permalink() ?>"><?php the_title() ?></a></td>
<td>
<?php 
// Display the location
$location = the_terms(get_the_ID(),'locaties');
echo("</td><td>");
// Display  date
$date_array = get_post_meta(get_the_ID(),'datum');
foreach($date_array as $date) {
    echo($date);
}
echo("</td><td>");
$date_array = get_post_meta(get_the_ID(),'inschrijving');
foreach($date_array as $date) {
    echo($date);
}

?>
</td></tr>
<?php endwhile; // end of the loop. ?>
</table>
</div>
<?php get_footer(); ?>
