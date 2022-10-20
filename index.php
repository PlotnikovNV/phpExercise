<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Плотников Никита, ИСиП-20-302</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action="sandmail.php" method="POST">
        <select name="subject">
            <option disabled selected>Тема письма</option>
            <option value="1">Вопрос по уроку</option>
            <option value="2">Личный вопрос</option>
            <option value="3">Благодарность</option>
        </select>
        <input type="email" name="email" placeholder="Введите ваш Email" maxlength="50" required>
        <textarea name="message" placeholder="Введите сообщение" maxlength="50" required></textarea>
        <img src="captcha1.jpg" height="50px" width="100px" alt="">
        <input type="text" name="captcha" placeholder="Введите капчу" maxlength="7" required>
        <input type="submit" value="Отправить письмо">
    </form>
</body>
</html>