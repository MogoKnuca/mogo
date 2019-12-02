<?php

/* https://api.telegram.org/bot930735200:AAEmk3mEFBJtyfDz07RaDDW5XQX16C14EsI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "930735200:AAEmk3mEFBJtyfDz07RaDDW5XQX16C14EsI";
$chat_id = "-395082135";
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
  header("location: thank-you.html");
} else {
  echo "Error";
}
?>