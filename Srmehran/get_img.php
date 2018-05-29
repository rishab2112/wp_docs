<?php

require('simple_html_dom.php');

$slug = array(
	'admin-columns-pro-buddypress-addon'
);





foreach($slug as $each_slug){


	// Create DOM from URL or file
	$html = file_get_html('https://srmehranclub.com/product/'.$each_slug);

	if(strpos('avada-product-gallery-lightbox-trigger', $html)==0){
	// Find all images 
	foreach($html->find('.avada-product-gallery-lightbox-trigger') as $element) {
		$loc = $element->href;
		preg_match("/[(0-9)][(0-9)][(0-9)][(0-9)]\/[(0-9)][(0-9)]\/(.*?)\.[(png)||(jpg)||(jpeg)]+/", $loc, $filename);
		$filename = preg_replace("/[(0-9)][(0-9)][(0-9)][(0-9)]\/[(0-9)][(0-9)]\//", "", $filename[0]);
		//print_r( $filename );

		$ch = curl_init( $loc );
		$fp = fopen('images/'.$filename, 'wb');
		curl_setopt($ch, CURLOPT_FILE, $fp);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_exec($ch);
		curl_close($ch);
		fclose($fp);

		echo $filename.',';
	}
}

	echo "<br>";
}



?>






































