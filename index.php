<?php

	// Получаем содержимое в строку $contents 
	// $filename = 'test.txt';
	// $handle = fopen($filename, 'r');
	// $json = fread($handle, filesize($filename));
	// fclose($handle);

	$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=472045&APPID=f294621f6c60daf25b20b3127d170dc2&units=metric');

	$arr_api = json_decode($json, true);

	// echo $json;
	// echo '<br>';
	// echo '<pre>';
	// print_r($arr_api);
	// echo '</pre>';

	echo '<h1>Погода в Воронеже</h1>';

	$temp_site = '<img src = "http://petropavlovskkamchatskiy.bezformata.ru/content/image249025097.jpg">';
	echo $temp_site;
	echo '   : '.'<strong>'.$arr_api['main']['temp'].' C</strong>';
	echo '<br>';

	$wind_site = '<img src = "http://photos1.blogger.com/blogger/32/643/400/aovento.jpg">';
	echo $wind_site;
	echo '   : '.'<strong>'.$arr_api['wind']['speed'].' м/c</strong>';
	echo '<br>';

	$press_site = '<img src = "https://ds01.infourok.ru/uploads/ex/0119/00003bb0-2352a4d8/5/310/img15.jpg">';
	echo $press_site;
	echo '   : '.'<strong>'.$arr_api['main']['pressure'].' мм.рт.ст.</strong>';

?>
