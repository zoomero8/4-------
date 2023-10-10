<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style_answer.css">
    <title>Ответ на обращение</title>
    
</head>
<body>
    <?php
    
        $fio = isset($_GET['fio']) ? $_GET['fio'] : '';
        $message = isset($_GET['message']) ? $_GET['message'] : '';
        $source = isset($_GET['source']) ? $_GET['source'] : '';
        $file = isset($_GET['file']) ? $_GET['file'] : '';

        echo "<h1>Ответ на ваше обращение:</h1>";
        echo "<p><h2>ФИО:</h2> <span>$fio</span></p>";
        echo "<p><h2>Текст обращения:</h2> <span>$message</span></p>";
        echo "<p><h2>Источник:</h2> <span>$source</span></p></h2>";
        echo "<p><h2>Вы прикрепили файл:</h2><span>$file</span></p></h2>";
    
        echo '<form action="header.html">';
        echo '<input type="submit" value="Заполнить снова">';
        echo '</form>';
    ?>
</body>
</html>
