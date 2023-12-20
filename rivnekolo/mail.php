<?php
// Кому отправляем
$to = 'dmytroivanovichn@gmail.com';

// Тема письма
$subject = 'Rivnekolo website!';
   
// Загружаем только ядро WordPress
define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );


 //Тело письма
 $body = '<h1>Rivnekolo website!</h1>';
 $body = '<h2>Форма зворотьного зв’язку!</h2>';


$yourName = trim(!empty($_POST['yourName']));
if($yourName) {
    $body.='<p><strong>Ваше ім’я:</strong> '.$_POST['yourName'].'</p>';
}

$yourEmail = trim(!empty($_POST['yourEmail']));
if($yourEmail) {
    $body.='<p><strong>Пошта:</strong> '.$_POST['yourEmail'].'</p>';
}

$yourPhone = trim(!empty($_POST['yourPhone']));
if($yourPhone) {
    $body.='<p><strong>Номер телефону:</strong> '.$_POST['yourPhone'].'</p>';
}

$yourMessage = trim(!empty($_POST['yourMessage']));
if($yourMessage) {
    $body.='<p><strong>Повідомлення:</strong> '.$_POST['yourMessage'].'</p>';
}

$amount = trim(!empty($_POST['amount']));
if($amount) {
    $body.='<p><strong>Кількість:</strong> '.$_POST['amount'].'</p>';
}


// Отправляем письмо
$sent_message = wp_mail( $to, $subject, $body );

$message = '';

if ( $sent_message ) {
    // Если сообщение успешно отправилось
    // echo 'Всё чётко настроил, бро!';
    $message = 'Data sent!';
} else {
    // Ошибки при отправке
    // echo 'Где-то ты лоханулся знатно!';
    $message = 'Error';
}

//Ответ
$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>