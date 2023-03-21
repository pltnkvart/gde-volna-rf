<?php

include 'properties.php';

$txt = '';

$text = ($_POST['msg']);
$name_person = ($_POST['name_person']);
$contacts_person = ($_POST['contacts_person']);


$arr = array(
  	'Описание к фото:' => $text,
	'Имя:' => $name_person,
	'Контакты:' => $contacts_person,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


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
  
foreach($_FILES as $file) {
  sendFileTelegram($file['tmp_name']);
}

if ($sendToTelegram) {
  header('Location: ../index.html');
} else {
  echo "Error";
}

?>