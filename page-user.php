<?php
if ( !is_user_logged_in() ) {
	auth_redirect();
}
get_header();
?>
<div class="container pagecontent"> 
<?php
global $current_user;
get_currentuserinfo(); ?>
<h2>Welkom, <?php echo($current_user->display_name); ?>!</h2>
<img src="http://asac.alpenclub.nl/wp-content/uploads/2017/11/151197079846616.jpg" alt="Climbing cover" width="900"> 
<?php
echo get_avatar( $current_user->user_email, 150 );
	
echo '<h3>Algemene gegevens</h3>';
echo '<p>Gebruikersnaam: ' . $current_user->user_login . "</p>";
echo '<p>Emailadres: ' . $current_user->user_email . "</p>";
echo '<p>Geboortedatum: ' . get_user_meta($current_user->ID,'geb_datum',true) . '</p>';


echo '<h3>Klim gegevens</h3>';
echo '</p>Klimstatus: ' . get_user_meta($current_user->ID,'klimstatus',true) .  '</p>';
echo '</p>NKBV nummer: ' . get_user_meta($current_user->ID,'nkbv_nummer',true) .  ' </p>';
echo '</p>verzekering: ' . (get_user_meta($current_user->ID,'bergsportverzekering',true) == 0 ? 'nee' : 'ja') .  ' </p>';

echo '<h3>Studie gegevens</h3>';
	
echo '</p>Studie: ' . get_user_meta($current_user->ID,'studie',true) .  ' </p>';
echo '</p>Studentnummer: ' . get_user_meta($current_user->ID,'studentnummer',true) .  ' </p>';
echo '</p>Instelling: ' . get_user_meta($current_user->ID,'instelling',true) .  ' </p>';
	
echo '<h3>Contact gegevens</h3>';
echo '</p>Plaatsnaam: ' . get_user_meta($current_user->ID,'plaats',true) .  ' </p>';
echo '</p>Straatnaam: ' . get_user_meta($current_user->ID,'straat',true) .  ' </p>';
echo '</p>Huisnummer: ' . get_user_meta($current_user->ID,'huisnr',true) . ' ' . get_user_meta($current_user->ID,'huisnr_toev',true) .  ' </p>';
	
echo '</p>Postcode: ' . get_user_meta($current_user->ID,'postcode',true) .  ' </p>';
	
echo '</p>Noodnummer 1: ' . get_user_meta($current_user->ID,'noodtelefoonnummer',true) .  ' </p>';
echo '</p>Noodnummer 2: ' . get_user_meta($current_user->ID,'noodnummer_2',true) .  ' </p>';
echo '</p>Noodadres: ' . get_user_meta($current_user->ID,'noodcontact',true) .  ' </p>';
	

echo '<h3>Financiele gegevens</h3>';

echo '</p>Rekeningnummer: ' . get_user_meta($current_user->ID,'iban_nummer',true) .  ' </p>';



?>
</div>
<?php
get_footer();
?>
