<?php

for ($u = 4536; $u < 4560; $u++) {
    $url = "http://www.forumsirius.fr/orion/bonlieu.phtml?seance=".$u;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $raw = curl_exec($ch);
    curl_close($ch);

    $html = new DOMDocument();
    @$html->loadHTML($raw);
    $xpath = new DOMXPath($html);
    $domExemple = $xpath->query('//td[@class="scPrix"]');

  
    foreach ($domExemple as $exemple) {
         $result = $exemple->nodeValue;
         echo $u." ".$result."\n";
    break;
    }
}
