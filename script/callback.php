<?php

$phone = $_POST['callback'];

$files = 'number-callback.txt';
$currents = file_get_contents($files);

file_put_contents($files, $currents + 1);


function filterQueryVar($name){
    return trim(urldecode(htmlspecialchars($name)));
}
$to = "alex777anders@gmail.com, alexinger+je56vnzlsi7tcc9wl9ph@boards.trello.com";
$subject = "Callback orders vanna - " . $currents;
$message = '
<div style="border: 4px double brown; padding: 20px 30px; background: #f9f0a2; font-family: monospace; font-size: 14px;">
<h1 style="color: brown; text-align: center; font-family: cursive;">Обратный звонок с сайта vanna.biz.ua!</h1>
<hr style="margin-bottom: 40px;">
<div style="display: flex;"><h3 style="margin-right: 10px;">Телефон: </h3><p style="margin-top: 19px;">'. filterQueryVar($phone) .'</p></div>
</div>';

$headers  = "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: CallBack №". $currents ." <vanna.biz.ua@gmail.com>\r\n";

mail($to, $subject, $message, $headers);

// mail("vanna.biz.ua@gmail.com", "Заявка с сайта", "Phone: ".$phone ,"From: alex777anders@gmail.com \r\n");

header("Location:/");
?>