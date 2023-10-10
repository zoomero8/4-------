<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $topic = $_POST['topic'];
    $file = $_POST['file'];
    $consent = isset($_POST['consent']) ? 'Да' : 'Нет';
    $source = $_POST['source'];
    

    // Перенаправление на страницу home.php для вывода ответа.
    header("Location: home.php?fio=$fio&message=$message&source=$source&file=$file");
    exit();
}
?>