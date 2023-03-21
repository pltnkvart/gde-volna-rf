<?php
include 'properties.php';
$txt = '';

$name = ($_POST['name']);
$coordinates = ($_POST['coordinates']);
$type = ($_POST['type']);
$complexity = ($_POST['complexity']);
$direction_wind = ($_POST['direction_wind']);
$direction_svell = ($_POST['direction_svell']);
$direction_wave = ($_POST['direction_wave']);
$bottom = ($_POST['bottom']);
$best_season = ($_POST['best_season']);
$entrance_coast = ($_POST['entrance_coast']);
$danger = ($_POST['danger']);
$infrastructure = ($_POST['infrastructure']);
$distance = ($_POST['distance']);
$easy_to_find = ($_POST['easy_to_find']);
$add_information = ($_POST['add_information']);
$name_person = ($_POST['name_person']);
$contacts_person = ($_POST['contacts_person']);


$arr = array(
  	'Название спота:' => $name,
	'Координаты:' => $coordinates,
	'Тип:' => $type,
	'Сложность:' => $complexity,
	'Направление ветра:' => $direction_wind,
	'Направление свелла:' => $direction_svell,
	'Направление волны:' => $direction_wave,
	'Дно:' => $bottom,
	'Лучший сезон:' => $best_season,
	'Подъезд к берегу:' => $entrance_coast,
	'Опасности:' => $danger,
	'Инфраструктура:' => $infrastructure,
	'Расстояние' => $distance,
	'Легко найти?'=> $easy_to_find,
	'Доп. информация:' => $add_information,
	'Имя:' => $name_person,
	'Контакты:' => $contacts_person,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../success.html');
} else {
  echo "Error";
}

function sendFileTelegram($fileTempName) {

  
	$urlSite = "https://api.telegram.org/bot{$token}/sendDocument";
  
	$document = new CURLFile(realpath($fileTempName));
  
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $urlSite);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ["chat_id" => $chat_id, "document" => $document]);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$out = curl_exec($ch);
	curl_close($ch);
  }
  
sendFileTelegram($_FILES["fileImg"]["tmp_name"]);


?>