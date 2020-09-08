      </div>
        <footer>
        	<div id="footer-top">
        		<div class="container">
                    <div class="one-third">
                        <h2>Klimavonden</h2>
                        <hr />
                        <p><b>Maandag</b> Mountain Network</p>
                        <p><b>Woensdag</b> USC Science Park</p>
                        <p><b>Donderdag</b> Monk Amsterdam</p>
                        <p><b>Vrijdag</b> Klimhal centraal</p>
                    </div>
                    <div class="one-third">
                        <h2>Opleidingen</h2>
                        <hr />
                        <p>Behalve veel klimmen in de hal, rots, Alpen organiseert de ASAC allerlei cursussen, opleidingen en trainingen. Alle opleidingsactiviteiten worden georganiseerd door de opleidingscommissie. </p>
                        <a href="/opleidingen/">Meer informatie</a>
                    </div>
                    <div class="one-third">
                        <h2>Klimweekenden</h2>
                        <hr />
                        <p>De ASAC gaat regelmatig op klimweekend in het buitenland. Normaal gesproken van vrijdag tot zondag. Meer over klimweekenden en het inschrijven kan je vinden op de website.</p>
                        <a href="/weekendinfo/algemene-informatie/">Meer informatie</a>
                    </div>
                </div>
        	</div>
            <div id="footer-bottom">
            	<div id="contact" class="container">
                    <p><b>Contact:</b> </p>
                    <div class="contactline">
                    <img src="<?php echo(get_template_directory_uri()) ?>/images/info.png" alt="info" width="15" height="15" />
                    <p>Amsterdamse Studenten Alpen Club</p>
                    </div>
                    <div class="contactline">
                    <img src="<?php echo(get_template_directory_uri()) ?>/images/home.png" alt="home" />
                    <p>Science Park 305, 1098 XH, Amsterdam</p>
                    </div>
                    <div class="contactline">
                    <img src="<?php echo(get_template_directory_uri()) ?>/images/mail.png" alt="mail" />
                    <p><b>Email</b> <a href="/vereniging/bestuur/">Bestuurspagina</a></p>
                    </div>
                    <div class="contactline">
                    <img src="<?php echo(get_template_directory_uri()) ?>/images/unscribe.png" alt="unscribe" />
                    <p><a href="/opzeggen">Opzeggen</a></p>
                    </div>
            	</div>
            </div>
        </footer>

<?php wp_footer(); ?> 
		<script>
				jQuery("#hamburger-icon").click(function(){
					jQuery(".menu").slideToggle();
				});


				jQuery(".menu > li > a").attr("href", "#")
				jQuery(".menu > li").click(function(){
					jQuery(".sub-menu", this).slideToggle();
				});
			
			
		</script>
    </body>

</html>
