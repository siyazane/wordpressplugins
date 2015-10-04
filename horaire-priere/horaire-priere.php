
<?php

/*
Plugin Name: horaire-priere
Description: afficher l'horaire de priere au maroc par ville
Version: 1.0
Author: Yassine EL HAMRI
License: none
*/
function wptuts_scripts_basic()
{
    // Register the script like this for a plugin:
    wp_register_script( 'script1', plugins_url( 'script1.js', __FILE__ ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'script1', get_template_directory_uri() . 'script1.js' );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'script1' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );



class horaire_priere extends WP_Widget{
  function __construct(){
  parent::__construct(fale, $name=__('Horaire de priere'));

  }
  function form(){
  
  }
  function update(){
  
  
  }
  
  function widget($args,$instance){

  ?>
     


<h3 class='widgettitle'>Horaire de Priere</h3>
<p>
<label for="ville">Ville : </label>
	<select id="ville" name="ville">
<option value="Feguig">	Feguig</option>
<option value="Oujda">	Oujda</option>
<option value="Bouârfa">	Bouâarfa</option>
<option value="Jrada">	Jrada</option>
<option value="Berkane">	Berkane</option>
<option value="Taourirt">	Taourirt</option>
<option value="Nador">	Nador</option>
<option value="Melilla">	Melilla</option>
<option value="Bouânane">	Bouânane</option>
<option value="Guersif">	Guersif</option>
<option value="Aknoul">	Aknoul</option>
<option value="Alhoceima">	Alhoceima</option>
<option value="Missour">	Missour</option>
<option value="Taza">	Taza</option>
<option value="Bourd">	Bourd</option>
<option value="Arfoud">	Arfoud</option>
<option value="Rissani">	Rissani</option>
<option value="Oued Amlil">	Oued Amlil</option>
<option value="Tehla">	Tehla</option>
<option value="Errachidia">	Errachidia</option>
<option value="Rich">	Rich</option>
<option value="Menzal%20beni%20yazgha">	Menzal beni yazgha</option>
<option value="Taounat">	Taounat</option>
<option value="Tissa">	Tissa</option>
<option value="Boulemane">	Boulemane</option>
<option value="Midelet">	Midelet</option>
<option value="Sefrou">	Sefrou</option>
<option value="Guelmima">	Guelmima</option>
<option value="Fes">	Fes</option>
<option value="Imouzar Kandar">	Imouzar Kandar</option>
<option value="Tinjdad">	Tinjdad</option>
<option value="Ifrane">	Ifrane</option>
<option value="Moulay Yaâcoub">	Moulay Yaâgoub</option>
<option value="Azrou">	Azrou</option>
<option value="Chefchaouan">	Chefchaouan</option>
<option value="Sebta">	Sebta</option>
<option value="Tetouan">	Tetouan</option>
<option value="Hajb">	Hajb</option>
<option value="Zerhoune">	Zerhoune</option>
<option value="Meknes">	Meknes</option>
<option value="Ouazane">	Ouazane</option>
<option value="Khénifra">	Khénifra</option>
<option value="Sidi kacém">	Sidi kacém</option>
<option value="Tizi ousli">	Tizi ousli</option>
<option value="Tanger">	Tanger</option>
<option value="Zagoura">	Zagoura</option>
<option value="Ksar El-Kébir">	Laksar lakbire</option>
<option value="Arbaoua">	Arbaoua</option>
<option value="Sidi Slimane">	Sidi Slimane</option>
<option value="Souk Elarbaa Du Gharb">	Souq Arbiâ Gharb</option>
<option value="Assila">	Assila</option>
<option value="Khémisset">	Khémissat</option>
<option value="Kelâat M'Gouna">	Kalâa Megouna </option>
<option value="Araich">	Araich</option>
<option value="Moulay Bouazza">	Moulay Bouâaza</option>
<option value="Kesbat Tadla">	Kesbat Tadla</option>
<option value="Sidi yahya lgharb">	Sidi yahya lgharb</option>
<option value="Tiflet">	Tiflet</option>
<option value="Beni Mellal">	Beni Mellal</option>
<option value="Meskoura">	Meskoura</option>
<option value="Oued Zam">	Oued Zam</option>
<option value="Azilal">	Azilal</option>
<option value="Oued zam">	Oued zam</option>
<option value="Kénitra">	Kénitra</option>
<option value="Remani">	Remani</option>
<option value="Rabat Salé" selected="selected">	Rabat Salé</option>
<option value="Khouribga">	Khouribga</option>
<option value="Ouerzazat">	Ouerzazat</option>
<option value="Demnat">	Demnat</option>
<option value="Ben slimane">	Ben slimane</option>
<option value="Bouznika">	Bouznika</option>
<option value="El Gara">	Lgara</option>
<option value="Mohammedia">	Mohammedia</option>
<option value="kelâat Esraghna">	kelâat Esraghna</option>
<option value="Berrchid">	Berrchid</option>
<option value="Settat">	Settat</option>
<option value=" Casablanca">	Casablanca</option>
<option value="Talouine">	Talouine</option>
<option value="Benguerir">	Bengrire</option>
<option value="Tata">	Tata</option>
<option value="Merrakech">	Marrakech</option>
<option value="Akka">	Akka</option>
<option value="Azemour">	Azemour</option>
<option value="Aghram">	Aghram</option>
<option value="Eljadida">	Eljadida</option>
<option value="Youssoufia">	Youssoufia</option>
<option value="Taroudent">	Taroudent</option>
<option value="Tafraout">	Tafraout</option>
<option value="Safi">	Safi</option>
<option value="Zag">	Zag</option>
<option value="Assa">	Assa</option>
<option value="Agadir">	Agadir</option>
<option value="Tiznit">	Tiznit</option>
<option value="Essaouira">	Essaouira</option>
<option value="Gelmim">	Gelmim</option>
<option value="Sidi Ifni">	Sidi Ifni</option>
<option value="Tantan">	Tantan</option>
<option value="Smara">	Smara</option>
<option value="Terfaya">Terfaya</option>
<option value="Laayoune">Laayoune</option>
<option value="Boujdour">Boujdour</option>
<option value="Dakhla">Dakhla</option>
<option value="Lagouira">Lagouira</option>
	</select>
</p>

  <div id="model">
  <?php
	echo '</div>';
	}
}
add_action('widgets_init',function(){
register_widget('horaire_priere');
});
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );
function prefix_add_my_stylesheet() {
    wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
}
?>