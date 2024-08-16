<?php
    //получаем данные с элементов формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $range = $_POST['range'];

    // обработаем полученные данные


    $name = htmlspecialchars($name); //преобразование символов в сущности (мнемоники)
    $phone = htmlspecialchars($phone);
    $range = htmlspecialchars($range);

    $name = urldecode($name); // декодирование URL
    $phone = urldecode($phone);
    $range = urldecode($range);


    $name = trim($name);  // удаление пробельных символов с обоих сторон
    $phone = trim($phone);
    $range = trim($range);


    // отправляем данные на почту
    if (mail("omarov_tour@mail.ru",
    "Новая заявка с сайта OmarovTour",
    "Имя: ".$name."\n".
    "Телефон: ".$phone."\n".
    "Количество человек: ".$range."\n",
    "From: no-reply@mydomain.ru \r\n")
    ){
        echo ('Письмо успешно отправлено!');
    }

    else {
        echo ('Есть ошибки! Проверьте данные ...');
    }

?>