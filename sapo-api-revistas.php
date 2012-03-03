<?php 
$sapo_url = 'http://services.sapo.pt/News/NewsStand/Magazine';

$xml = simplexml_load_file($sapo_url) or die("feed not loading");

for ($i=0; $i<sizeof($xml->bj_editionsgroup->bj_related_image); $i++){
echo '<img src="' . $xml->bj_editionsgroup->bj_related_image[$i]->image_url . '" />';
}

/**
echo "<pre>";
var_dump($xml);
echo "</pre>";
/**/
?>