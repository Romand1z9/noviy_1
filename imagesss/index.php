
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LP_</title>
	<body>
		<?php $yml_file = simplexml_load_file("4.yml"); 
		$array_formats = array('.jpg', '.jpeg', '.png');?>
		<?php foreach ($yml_file->shop->offers->offer as $offer) {
				$product_name = $offer->name;
				echo '<p>'.$offer->name.'</p>';
				$i=0;
	        	foreach ($offer->picture as $image) {
	        		$i++;
	        		echo '<p>'.$i.' - '.$image.'</p>';
	        		$image_format;
	        		foreach ($array_formats as $format) {
	        			if (stripos($image, $format) !==  false) {
	        				$image_format = $format;
	        			}
	        		}
	        		//echo $image_format;
	        		//copy($image, 'img/'.mb_convert_encoding($product_name, "Windows-1251").'_'.$i.$image_format);
				}
				break; 
		}?>
	</body>
</html>