<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$info = $_POST['information'];
$city = $_POST['city'];

$file = 'number-callback.txt';
$current = file_get_contents($file);

file_put_contents($file, $current + 1);


function filterQueryVar($name){
    return trim(urldecode(htmlspecialchars($name)));
}
$to = "alex777anders@gmail.com, alexinger+je56vnzlsi7tcc9wl9ph@boards.trello.com";
$subject = "Forms orders vanna  - " . $current;
$message = '
<div style="border: 4px double brown; padding: 20px 30px; background: #f9f0a2; font-family: monospace; font-size: 14px;">
<h1 style="color: brown; text-align: center; font-family: cursive;">Заявка на реставрацию или вкладыш с сайта vanna.biz.ua!</h1>
<hr style="margin-bottom: 40px;">
<div style="display: flex;"><h3 style="margin-right: 10px;">Имя: </h3><p style="margin-top: 19px;">'. filterQueryVar($name) .'</p></div>
<div style="display: flex;"><h3 style="margin-right: 10px;">Телефон: </h3><p style="margin-top: 19px;">'. filterQueryVar($phone) .'</p></div>
<div style="display: flex;"><h3 style="margin-right: 10px;">Город: </h3><p style="margin-top: 19px;">'. filterQueryVar($city) .'</p></div>
<div style="display: flex;"><h3 style="margin-right: 10px;">E-mail: </h3><p style="margin-top: 19px;">'. filterQueryVar($email) .'</p></div>
<div style="display: flex;"><h3 style="margin-right: 10px;">Дополнительная информация: </h3><p style="margin-top: 19px;">'. filterQueryVar($info) .'</p></div>
</div>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ЗАЯВКА №". $current ." <vanna.biz.ua@gmail.com>\r\n";

mail($to, $subject, $message, $headers);

header("Location:/");