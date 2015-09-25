<?php

$recepient = "support@olimpmmm.ru";
$sitename = "olimpmmm.ru";

$client_name = trim($_GET["client_name"]);
$client_email = trim($_GET["client_email"]);
$client_comment = trim($_GET["client_comment"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $client_name<br>\r\nEmail: $client_email<br>\r\nСообщение: $client_comment<br>\r\n";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $client_name <$client_email>\r\n";

mail($recepient, $pagetitle, $message, $headers);