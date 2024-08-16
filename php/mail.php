<?php
    //получаем данные с элементов формы
    $nameform = $_POST['nameform'];
    $phoneform = $_POST['phoneform'];
    $date = $_POST['date'];

    // обработаем полученные данные


    $nameform = htmlspecialchars($nameform); //преобразование символов в сущности (мнемоники)
    $phoneform = htmlspecialchars($phoneform);
    $date = htmlspecialchars($date);

    $nameform = urldecode($nameform); // декодирование URL
    $phoneform = urldecode($phoneform);
    $date = urldecode($date);


    $nameform = trim($nameform);  // удаление пробельных символов с обоих сторон
    $phoneform = trim($phoneform);
    $date = trim($date);


    // отправляем данные на почту
    if (mail("omarov_tour@mail.ru",
    "Новая заявка с сайта OmarovTour",
    "Имя: ".$nameform."\n".
    "Телефон: ".$phoneform."\n".
    "Желаемая дата: ".$date."\n",
    "From: no-reply@mydomain.ru \r\n")
    ){
        echo ('Письмо успешно отправлено!');
    }

    else {
        echo ('Есть ошибки! Проверьте данные ...');
    }

?>