<?php

/* https://api.telegram.org/bot566782887:AAGXLrF_CBqhU_DydGlgLa_YO6ML60BEY4o/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "566782887:AAGXLrF_CBqhU_DydGlgLa_YO6ML60BEY4o
";
echo($name);
$chat_id = "-306558173";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo 'ok';
} else {
  echo "Error";
}
?>