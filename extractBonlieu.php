<?php

for ($u = 1838; $u < 1850; $u++) {
    $url = "http://www.forumsirius.fr/orion/bonlieu.phtml?spec=".$u;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $raw = curl_exec($ch);
    curl_close($ch);

    $html = new DOMDocument();
    @$html->loadHTML($raw);
    $xpath = new DOMXPath($html);
    $domExemple = $xpath->query('//td[@class="spLoc"]');

    $i = 1;
    foreach ($domExemple as $exemple) {
         $result = $exemple->nodeValue;
         echo $result."\n";
    }
}
