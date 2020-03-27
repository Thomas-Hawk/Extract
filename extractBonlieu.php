<?php

function extractStock()
{
    for ($u = 4590; $u < 4599; $u++) {
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
    $doc = new DOMDocument();
    $elements = array('//span[@class="nomSpec"]', '//span[@class="dateSC"]', '//td[@class="scPrix"]', '//td[@class="nomActiv"]');

    foreach ($docList as $extract) {
        @$doc->loadHTML($extract);
        $xpath = new DOMXPath($doc);
        foreach ($elements as $element) {
            $i = 0;
            $domExemple0 = $xpath->query($element);
            $dom = $domExemple0->item(0)->textContent;
            $array[] = $dom . $i;
            $i++;
        }
        // $domExemple0 = $xpath->query('//span[@class="nomSpec"]');
        // $domExemple1 = $xpath->query('//span[@class="dateSC"]');
        // $domExemple2 = $xpath->query('//td[@class="scPrix"]');
        // $domExemple3 = $xpath->query('//td[@class="nomActiv"]');
        // $dom0 = $domExemple0->item(0)->textContent;
        // $dom1 = $domExemple1->item(0)->textContent;
        // $dom2 = $domExemple2->item(0)->textContent;
        // $dom3 = $domExemple3->item(0)->textContent;
        // echo $dom0 . "\n" . $dom1  . "\n" . $dom2 . "\n\n";
        // $array = array($dom0, $dom1, $dom2, $dom3);
    }
    // return $array;
    print ( $array);
    print_r($array);
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
