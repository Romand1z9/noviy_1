		<?php 
		/*set_time_limit(1200);
		$yml_file = simplexml_load_file("4.yml"); 
		$array_formats = array('.jpg', '.jpeg', '.png');?>
		<?php foreach ($yml_file->shop->offers->offer as $offer) {
				$product_name = $offer->name;
				//echo '<p>'.$offer->name.'</p>';
				$i=0;
	        	foreach ($offer->picture as $image) {
	        		$i++;
	        		//echo '<p>'.$i.' - '.$image.'</p>';
	        		$image_format;
	        		foreach ($array_formats as $format) {
	        			if (stripos($image, $format) !==  false) {
	        				$image_format = $format;
	        			}
	        		}
	        		//echo $image_format;
	        		$path  = 'img/'.mb_convert_encoding($product_name, "Windows-1251").'_'.$i.$image_format;
	        		if (!file_exists($path)) {
	        			copy($image, $path);
	        		}
				}
				//break; 
		}*/?>