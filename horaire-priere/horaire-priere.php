
<?php

/*
Plugin Name: horaire-priere
Plugin URI: http://www.bigart-marrakech.com
Description: afficher l'horaire de priere au maroc par ville
Version: 1.0
Author: Yassine EL HAMRI
Author URI: http://www.bigart-marrakech.com
License: none
*/
/*   define( 'HP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
	define( 'HP_PLUGIN_NAME', trim( dirname( HP_PLUGIN_BASENAME ), '/' ) );

define( 'HP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
require_once HP_PLUGIN_DIR . '/style.css';
require_once HP_PLUGIN_DIR . '/script.php'; */
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
	 
	 
	 
	 
	 /* function getPrayTime($lang,$lat,$d,$m,$y) {
        $prayTime = array();
		$this->long=$lang;
		$this->lat=$lat;
		$this->year = $y;
        $this->month = $m;
        $this->day = $d;
		echo '</br> lg '.$this->long;
		echo '</br> lt '.$this->lat;
        // نحسب اليوم الجوليانى
        $d = ((367 * $this->year) - (floor((7 / 4) * ($this->year + floor(
            ($this->month + 9) / 12)))) + floor(275 * ($this->month / 9)) +
            $this->day - 730531.5);
			//echo '<br> year '.$this->year;

        // نحسب طول الشمس الوسطى
        $L = ((280.461 + 0.9856474 * $d) % 360) + ((280.461 + 0.9856474 * $d) -
            (int)(280.461 + 0.9856474 * $d));

        // ثم نحسب حصة الشمس الوسطى
        $M = ((357.528 + 0.9856003 * $d) % 360) + ((357.528 + 0.9856003 * $d) -
            (int)(357.528 + 0.9856003 * $d));

        // ثم نحسب طول الشمس البروجى
        $lambda = $L + 1.915 * sin($M * pi() / 180) + 0.02 * sin(2 * $M * pi()
            / 180);

        // ثم نحسب ميل دائرة البروج
        $obl = 23.439 - 0.0000004 * $d;

        // ثم نحسب المطلع المستقيم
        $alpha = atan(cos($obl * pi() / 180) * tan($lambda * pi() / 180)) * 180
            / pi();
        $alpha = $alpha - (360 * floor($alpha / 360));

        // ثم نعدل المطلع المستقيم
        $alpha = $alpha + 90 * ((int)($lambda / 90) - (int)($alpha / 90));

        // نحسب الزمن النجمى بالدرجات الزاوية
        $ST = ((100.46 + 0.985647352 * $d) % 360) + ((100.46 + 0.985647352 * $d)
            - (int)(100.46 + 0.985647352 * $d));

        // ثم نحسب ميل الشمس الزاوى
        $Dec = asin(sin($obl * pi() / 180) * sin($lambda * pi() / 180)) * 180 /
            pi();

        // نحسب زوال الشمس الوسطى
        if ($alpha > $ST) {
            $noon = (($alpha - $ST) % 360) + (($alpha - $ST) - (int)($alpha -
                $ST));
				//echo '</br> n1 '.$noon;
        } else {
            $noon = (($ST - $alpha) % 360) - (($ST - $alpha) - (int)($ST -
                $alpha));
				//echo '</br> n2 '.$noon;
        }

        // ثم الزوالى العالمى
        @$un_noon = $noon - $this->long;
	//echo '</br> long '.$this->long;

        // ثم الزوال المحلى
        @$local_noon = $un_noon / 15+$this->zone;
		//echo '<br> zone '.$this->zone;
		//echo '</br> un '.$un_noon.'</br>';
        // وقت صلاة الظهر
        $Dhuhr = $local_noon / 24;
        $Dhuhr_h = (int)($Dhuhr * 24 * 60 / 60);
        $Dhuhr_m = sprintf("%02d", ($Dhuhr * 24 * 60+6) % 60);
        $prayTime[2] = "$Dhuhr_h:$Dhuhr_m";

        if ($this->school == 'Shafi') {
            // نحسب إرتفاع الشمس لوقت صلاة العصر حسب المذهب الشافعي
            $U = atan(2+tan(($this->lat - $Dec) * pi() / 180)) * 180 / pi();
            // ثم نحسب قوس الدائر أى الوقت المتبقى من وقت الظهر حتى صلاة العصر حسب المذهب الشافعي
            $W = acos((sin((90-$U) * pi() / 180) - sin($Dec * pi() / 180) * sin
                ($this->lat * pi() / 180)) / (cos($Dec * pi() / 180) * cos
                ($this->lat * pi() / 180))) * 180 / pi() / 15;

            // وقت صلاة العصر حسب المذهب الشافعي
            $Z = $local_noon + $W;
            $SAsr = $Z / 24;
            $SAsr_h = (int)($SAsr * 24 * 60 / 60);
            $SAsr_m = sprintf("%02d", ($SAsr * 24 * 60) % 60);
            $prayTime[3] = "$SAsr_h:$SAsr_m";
        } else {
            // نحسب إرتفاع الشمس لوقت صلاة العصر حسب المذهب الحنفي
            $T = atan(1+tan(($this->lat - $Dec) * pi() / 180)) * 180 / pi();

            // ثم نحسب قوس الدائر أى الوقت المتبقى من وقت الظهر حتى صلاة العصر حسب المذهب الحنفي
            $V = acos((sin((90-$T) * pi() / 180) - sin($Dec * pi() / 180) * sin
                ($this->lat * pi() / 180)) / (cos($Dec * pi() / 180) * cos
                ($this->lat * pi() / 180))) * 180 / pi() / 15;

            // وقت صلاة العصر حسب المذهب الحنفي
            $X = $local_noon + $V;
            $HAsr = $Dhuhr + $V / 24;
            $HAsr_h = (int)($HAsr * 24 * 60 / 60);
            $HAsr_m = sprintf("%02d", ($HAsr * 24 * 60) % 60);
            $prayTime[3] = "$HAsr_h:$HAsr_m";
        }

        // نحسب نصف قوس النهار
        $AB = acos((SIN($this->AB2 * pi() / 180) - sin($Dec * pi() / 180) * sin
            ($this->lat * pi() / 180)) / (cos($Dec * pi() / 180) * cos($this
            ->lat * pi() / 180))) * 180 / pi();

        // وقت الشروق
        $AC = $local_noon - $AB / 15;
        $Sunrise = $AC / 24;
        $Sunrise_h = (int)($Sunrise * 24 * 60 / 60);
        $Sunrise_m = sprintf("%02d", ($Sunrise * 24 * 60) % 60);
        $prayTime[1] = "$Sunrise_h:$Sunrise_m";

        // وقت الغروب
        $AE = $local_noon + $AB / 15;
        $Sunset = $AE / 24;
        $Sunset_h = (int)($Sunset * 24 * 60 / 60);
        $Sunset_m = sprintf("%02d", ($Sunset * 24 * 60+6) % 60);
        $prayTime[4] = "$Sunset_h:$Sunset_m";

        // نحسب فضل الدائر وهو الوقت المتبقى من وقت صلاة الظهر إلى وقت العشاء
        $AG = acos((sin($this->AG2 * pi() / 180) - sin($Dec * pi() / 180) * sin
            ($this->lat * pi() / 180)) / (cos($Dec * pi() / 180) * cos($this
            ->lat * pi() / 180))) * 180 / pi();

        // وقت صلاة العشاء
        $AH = $local_noon + ($AG / 15);
        $Isha = $AH / 24;
        $Isha_h = (int)($Isha * 24 * 60 / 60);
        $Isha_m = sprintf("%02d", ($Isha * 24 * 60) % 60);
        $prayTime[5] = "$Isha_h:$Isha_m";

        // نحسب فضل دائر الفجر وهو الوقت المتبقى من وقت صلاة الفجر حتى وقت صلاة الظهر
        $AJ = acos((sin($this->AJ2 * pi() / 180) - sin($Dec * pi() / 180) * sin
            ($this->lat * pi() / 180)) / (cos($Dec * pi() / 180) * cos($this
            ->lat * pi() / 180))) * 180 / pi();

        // وقت صلاة الفجر
		//echo 'ln '.$local_noon.'</br>';
		//echo 'aj '.$AJ.'</br>';
        $AK = $local_noon - $AJ / 15;
		//echo 'ak '.$AK.'</br>';
		
        $Fajr = $AK / 24;
        $Fajr_h = (int)($Fajr * 24 * 60 / 60);
        $Fajr_m = sprintf("%02d", ($Fajr * 24 * 60) % 60);
        $prayTime[0] = "$Fajr_h:$Fajr_m";

        return $prayTime;
		
    }
 */
}
add_action('widgets_init',function(){
register_widget('horaire_priere');
});
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );
function prefix_add_my_stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
}
?>