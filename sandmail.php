<?php
    if($_POST['captcha'] != "qGphJD"){
        header('location: index.php');
        exit();
    }

    if($_POST['subject'] == 1){
        $subject = 'Вопрос по уроку';
    }
    else if($_POST['subject'] == 2){
        $subject = 'Личный вопрос';
    }
    else if($_POST['subject'] == 3){
        $subject = 'Благодарность';
    }
    else{
        $subject = 'Вопрос по уроку';
    }

    $to = "nikita_plotnikov_2004@bk.ru";
    $from = trim($_POST['email']);

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    $headers = "From: $from" . "\r\n" . 
    "Reply-To: $from" . "\r\n" . 
    "X-Mailer: PHP/" . phpversion();

    if(mail($to,$subject,$message,$headers)){
        echo "Письмо отправлено";
    }
    else {
        echo "Ошибка отправки";
    }
?>