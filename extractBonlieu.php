<?php

function extractStock()
{
  for ($u = 4536; $u < 4538; $u++) {
    $url = "http://www.forumsirius.fr/orion/bonlieu.phtml?seance=" . $u;
    $input = file_get_contents($url);
    $content [] = $input;
  }
  return $content;
}
$list = extractStock();
print_r ($list); 
// $doc = new DOMDocument();

// @$doc->loadHTML($input);
// $xpath = new DOMXPath($doc);
// $domExemple = $xpath->query('//td[@class="scPrix"]');


// foreach ($domExemple as $exemple) {
//   $result = $exemple->nodeValue;
//   echo $u . " " . $result . "\n";
//   break;
// }
