<?php  
      $ville="marrakech";
    if(isset($_POST['ville']))
    {
        $ville=$_POST['ville'];
    }
  $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$ville.',ma&units=metric&lang=fr';
$url = str_replace(' ', '%20', $url);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
$response_a = json_decode($response);
    if($response_a->cod==='404'){
        $temp=0;
        $icon='01n';
        $des='Ville introuvable';
    }else{
        $temp = $response_a->main->temp;
        $icon = $response_a->weather[0]->icon;
        $des =$response_a->weather[0]->description;
    }
    
?>
<div id="meteo">
    <span class="icon"><?='<img src="http://openweathermap.org/img/w/'.$icon.'.png" >';?></span>
    <div>
        <span class="temp"><?=intval($temp);?></span>
        <span class="des"><?=$des;?></span>
    </div>
</div>