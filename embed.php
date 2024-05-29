<?php
function convertYoutube($yazi){
preg_match('/https([:\/]+)www.youtube.com([\/])embed[(\/)]([A-Za-z0-9]+)*/', $yazi, $matches);



$a = preg_replace('/https([:\/]+)www.youtube.com([\/])embed[(\/)]([A-Za-z0-9]+)*/', '<iframe src="'.$matches[0].'"></iframe>', $yazi);
return $a;
}




echo convertYoutube(" ...article with embed link in it... ");

?>
