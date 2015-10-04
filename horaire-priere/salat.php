<?php  
class Salat {

    protected $year;
    protected $month;
    protected $day;
    public $zone=0;
	public $long;//=-8.008889;
    public $lat;//=31.63;
    protected $elevation = 0;
    protected $AB2 = -0.833333;
    protected $AG2 = -17;
    protected $AJ2 = -19;
    protected $school = 'hanafi'; 
    protected $view="suni";
    function getPrayTime($lang,$lat,$d,$m,$y) {
        $prayTime = array();
		$this->long=$lang;
		$this->lat=$lat;
		$this->year = $y;
        $this->month = $m;
        $this->day = $d;
		//echo '</br> lg '.$this->long;
		//echo '</br> lt '.$this->lat;
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
		
        $Fajr = $AK / 24;
        $Fajr_h = (int)($Fajr * 24 * 60 / 60);
        $Fajr_m = sprintf("%02d", ($Fajr * 24 * 60) % 60);
        $prayTime[0] = "$Fajr_h:$Fajr_m";

        return $prayTime;
		
    }
}
      $ville="marrakech";
    if(isset($_POST['ville']))
    {
        $ville=$_POST['ville'];
    }
  $url = 'http://maps.google.com/maps/api/geocode/json?address='.$ville.'&sensor=false&region=morocco';
$url = str_replace(' ', '%20', $url);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
$response_a = json_decode($response);
	$longitude = $response_a->results[0]->geometry->location->lng;
	$latitude = $response_a->results[0]->geometry->location->lat;
	$annee_encours=date('Y');
	$mois_encours= date('n');
	$i = date("d");
	$Salat=new Salat();
	$times=$Salat->getPrayTime($longitude,$latitude,$i,$mois_encours,$annee_encours);
		 
     echo '<table width="96%" border="0" cellpadding="5" cellspacing="1" align="center" bgcolor="#999999">';
	 echo '<tr bgcolor="#880000" align="center" style="color:#ffffff">
		   <td align="center">Asoubh</td>
		   <td align="center">Addouhr</td>
		   <td align="center">AL Asr</td>
		   <td align="center">AL Maghrib</td>
		   <td align="center">AL Ichaa</td>
		   </tr>';
				$date_tableau=mktime("0","0","0",$mois_encours,$i,$annee_encours);
		$date_actuelle=mktime("0","0","0",date('n'),date('d'),date('Y'));
		$bg="#ffffff";
		// Coloration du jour en cours
		if($date_tableau==$date_actuelle) $bg="#e0e0e0";
		    echo '<tr bgcolor="'.$bg.'">
				  <td align="center">'.$times[0].'</td>
				  <td align="center">'.$times[2].'</td>
				  <td align="center">'.$times[3].'</td>
				  <td align="center">'.$times[4].'</td>
				  <td align="center">'.$times[5].'</td>
				</tr>';
	echo'</table>';