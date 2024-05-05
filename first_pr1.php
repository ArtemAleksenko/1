<?php

$subject = 'EMAIL';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Artem';
$text1 = "firstName : {$firstName}" . "\n";

$text2 = "Скидуй деньги сюда" . "\n";
$text3 = "4444111100002222" . "\n";

$message = $text1 . $text2 . $text3;

$headers = 'From: a.o.aleksenko@student.khai.edu';

if (mail('artemaleksenko2015@gmail.com', $subject, $message, $headers)) {
    echo "Лист успішно надіслано";
} else {
    echo "Помилка при відправленні листа";
}
?>
