<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5979283116:AAGPDRWm4bq_UHmmq0obUvaE9Oe_5AbUE5g";

//Сюда вставляем chat_id
$chat_id = "-868447520";

//Определяем переменные для передачи данных из нашей формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$range = $_POST['range'];

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone,
        'Количество человек:' => $range
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }

?>