<?php
$user_phone = htmlspecialchars($_POST['userphone']);



$token = "6268264603:AAGH_24CdDCFcLKvPhgoyDYe9J3wjmMqX0M";
$chat_id = "-976604684";

$formData = array(
	"Телефон: " => $user_phone,
);



foreach($formData as $key => $value) {
	$text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
	echo "Success";
} else {
	echo "Error";
}

?>