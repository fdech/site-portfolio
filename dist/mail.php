<?php

$message = "Имя: {$_POST['name']}<br>"; 
$message .= "Почта: {$_POST['email']}<br>"; 
$message .= "Сообщение: {$_POST['message']}"; 

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
$mail->FromName = 'Portfolio';
$mail->addAddress('altxfdech@gmail.com', 'Александр');
$mail->isHTML(true);
$mail->Subject = 'Обратная связь';
$mail->Body = $message;

if( $mail->send() ){
	echo '<p style="color: green;">Ваше сообщение успешно отправлено</p>';
}else{
	echo '<p style="color: red;">Ошибка!</p>';
}