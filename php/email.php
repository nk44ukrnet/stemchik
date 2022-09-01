<?php
if(isset($_POST['fullname'])
&& isset($_POST['phone'])
&& isset($_POST['email'])
) {
    $fullName = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: Stemchyk <noreply@stemchik.com>';
    $to = 'i.artemchuk@ies.org.ua, y.semivolos@ies.org.ua'; //'i.artemchuk@ies.org.ua, y.semivolos@ies.org.ua';  //tsvynakhidnyk@gmail.com, v.kovtun@ies.org.ua

    $body = "
		<b>Ім'я: </b> $fullName <br>
		<b>Телефон: </b> $phone <br>
		<b>Email: </b> $email <br>";

    $title = 'Заявка з сайту стемчик';

    mail($to, $title, $body, implode("\r\n", $headers));
}
