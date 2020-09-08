		<?php get_header();
		if(is_home()){
			echo("<div id=\"contentcontainer\" class=\"container\">");
		}
		else
			echo("<div class=\"container pagecontent\">");
		?>
        
        	<?php
			if(is_home())
			{
            	echo("<h1>Nieuws</h1><br>");
				echo("<div id=\"news\">");
			}
			  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			  //pagination fixes prior to loop
			  $temp =  $query;
				$query = new WP_Query( array( 
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'ASC' 
			  ) );	 
			

			 //set our query's pagination to $paged
			 if(is_home()){
				
			 $query -> query('post_type=post&posts_per_page='. get_option('posts_per_page') . '&paged='.$paged);}

			if (have_posts() ) : while ( have_posts() ) : the_post();
					
					if(is_home()) {
						echo(sprintf("<a href=\"%s\"><h2 class=\"title\">",get_the_permalink()));
						the_title();
						echo("</h2></a><hr>");
						//echo(sprintf("<p class=\"news\">Door %s;<br>%s</p>",get_the_author(),get_the_date()));
					}
					echo("<article>");
					the_content();	
					echo("</article>");
					
				
			endwhile; else: ?>
 			
            </div>
            <div class="container pagecontent">
            	<p>Geen berichten gevonden</p>
            </div>
			<?php endif; 
			if(is_home()){				
				echo('<div id="prevnext"><h2 class="alignleft">');previous_posts_link('Nieuwere berichten', $query->max_num_pages);echo('</h2>');
    			echo('<h2 class="alignright">');next_posts_link('Oudere berichten', $query->max_num_pages);echo('</h2>');
            	echo("</div></div>");}

		?>
        </div>
        

		<?php if (is_home() && function_exists('dynamic_sidebar') && dynamic_sidebar('homepage-widget1'))
			if(is_home()){
			echo("<div id=\"contentcontainer\" class=\"container\"><h2>Partners</h2><div class='sponsered'><img src=\"https://asac.nl/wp-content/uploads/2019/01/logo-usc.png\" alt=\"Logo usc\" height='100px'><p>USC</p></div><div class='sponsered'><a href=\"http://studentensport.amsterdam/\"><img src=\"https://asac.nl/wp-content/uploads/2019/01/SSA_logo_zonder_tekst.png\" alt=\"SSA logo\" height='125px'></a><p>SSA</p></div><div class='sponsered'><img src=\"https://trk3l3zyz1kmti31ipkw1djr-wpengine.netdna-ssl.com/wp-content/plugins/mountain-network/assets/dist/img/MN_logo_2015-2.svg\" alt=\"Logo MN\" height=\"100px\"><p>MN Amsterdam</p></div></div>");
		}
?>

        <?php get_footer(); ?>


