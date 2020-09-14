<?php  
$fio1 = $_POST['fio1'];
$tel1 = $_POST['tel1'];
$email1 = $_POST['email1'];

$fio1 = htmlspecialchars($fio1);
$tel1 = htmlspecialchars($tel1);
$email1 = htmlspecialchars($email1);

$fio1 = urldecode($fio1);
$tel1 = urldecode($tel1);
$email1 = urldecode($email1);

$fio1 = trim($fio1);
$tel1 = trim($tel1);
$email1 = trim($email1);

//echo $fio1;
//echo "<br>";
//echo $tel1;

if (mail("madrsd@yandex.ru", "Фото мебели", "ФИО:".$fio1.". Телефон: ".$tel1.". Почта: ".$email1 ,"From: madrsd@yandex.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>

?>
