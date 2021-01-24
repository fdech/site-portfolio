<?php

$message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
$message .= "Почта: {$_POST['email']}<br>"; // добавляем телефон в текст
$message .= "Сообщение: {$_POST['message']}"; // добавляем телефон в текст

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'altx21'; // логин от вашей почты
$mail->Password = 'IA3OEys2rtu_'; // пароль от почтового ящика
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'altx21@mail.ru';
$mail->FromName = 'Андрей';
$mail->addAddress('altxfdech@gmail.com', 'Александр');
$mail->isHTML(true);
$mail->Subject = 'Заказ обратного звонка';
$mail->Body = $message;

if( $mail->send() ){
	echo '<p style="color: green;">Ваше сообщение отправлено</p>';
}else{
	echo '<p style="color: red;">Ошибка!</p>';
}