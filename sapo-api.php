<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-PT">

<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 
<title>capas dos jornais</title>

</head>

<body>


<?php 
$sapo_url = 'http://services.sapo.pt/News/NewsStand/National';

$xml = simplexml_load_file($sapo_url) or die("feed not loading");

for ($i=0; $i<sizeof($xml->bj_editionsgroup->bj_related_image); $i++){
echo '<h4>' . htmlentities($xml->bj_editionsgroup->bj_related_image[$i]->name, ENT_COMPAT, 'UTF-8') . '</h4>' . "\n";
echo '<p><a href="' . htmlentities($xml->bj_editionsgroup->bj_related_image[$i]->link) . '" ><img src="' . $xml->bj_editionsgroup->bj_related_image[$i]->image_url . '" alt="' . htmlentities($xml->bj_editionsgroup->bj_related_image[$i]->name, ENT_COMPAT, 'UTF-8') . '" /></a>' . "</p>\n";
}

/**
echo "<pre>";
var_dump($xml);
echo "</pre>";
/**/
?>

</body>
</html>