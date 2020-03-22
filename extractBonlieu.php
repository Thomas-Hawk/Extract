<?php

function extractStock()
{
    for ($u = 4560; $u < 4563; $u++) {
        $url = "http://www.forumsirius.fr/orion/bonlieu.phtml?seance=" . $u;
        $input = file_get_contents($url);
        $content[] = $input;
    }
    return $content;
}
// $list = extractStock();
// print_r($list);


function extractDoc($docList)
{
    foreach ($docList as $extract) {
        $doc = new DOMDocument();
        @$doc->loadHTML($extract);
        $xpath = new DOMXPath($doc);
        $domExemple0 = $xpath->query('//span[@class="nomSpec"]');
        $domExemple1 = $xpath->query('//span[@class="dateSC"]');
        $domExemple2 = $xpath->query('//td[@class="scPrix"]');
        $dom0 = $domExemple0->item(0)->textContent;
        $dom1 = $domExemple1->item(0)->textContent;
        $dom2 = $domExemple2->item(0)->textContent;
        echo $dom0 . "\n" . $dom1  . "\n" . $dom2. "\n\n";
        // foreach ($domExemple as $exemple) {
        //     $result = $exemple->nodeValue;
        //     echo    $result . "\n";

        // }
    }
}

$test = extractStock();
extractDoc($test);

// echo date('d m Y ');

// $result = checkdate(13, 03, 2020);

// if( $result == true )
// {
//     echo 'la date est valide';
// }
// else
// {
//     echo 'la date n\'est pas valide';
// }
