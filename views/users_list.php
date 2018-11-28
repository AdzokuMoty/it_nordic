<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Список пользователей</h1>

    <?php
    foreach ($users as $user) {
        echo '<h6>'.$user['login']. '</h6>';
        echo '<a href="user_profile.php?id='.$user['user_id'].'">Ссылка на профиль</a>';
    }
    
    ?>

</body>
</html>





