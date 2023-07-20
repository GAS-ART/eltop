<?php
$raw = file_get_contents('php://input');
	$data = json_decode($raw, true);
if ($data['google_key'] === '26ahAmim'){
	//print_r($data);
	$name 	 = sanitizeString($data['user_column_data']['0']['string_value']);
	$phone 	 = sanitizeString($data['user_column_data']['1']['string_value']);
	$service = sanitizeString($data['user_column_data']['2']['string_value']);
	$hook 	 = "Полное имя" . ": " . $name . "\n\n" . "Телефон"  . ": " . $phone . "\n\n" ."Вид услуги: " . $service . "\n\n";
	mail('temoha1386@gmail.com', 'ЗАЯВКА С ФОРМЫ ГУГЛ', $hook);
}

function sanitizeString($var)
{
  if (get_magic_quotes_gpc())
   $var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	$var = urldecode($var);
	$var = trim($var);
	return $var;
}

/*$fh = fopen("webhook.txt", 'w') or die("Сбой открытия файла");
fwrite($fh, "$hook") or die("Сбой записи в файл");
fclose($fh);*/

//$hook = "Полное имя" . ": " . $data['user_column_data']['1']['string_value'] . "   " . "Телефон"  . ": " . $data['user_column_data']['0']['string_value'];

?>