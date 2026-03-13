<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        Имя: <input name="name"><br>
        Номер:<input name="num"><br>
        Email:<input name="email"><br>
        Телефон:<input name="phone"><br>
        <button type="sumbit" value="Зарегистрировать">Зарегистрировать</button>
    </form>

<?php
if($_POST) {
    $name = $_POST['name'];
    $num = $_POST['num'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $line = "$name:$num:$email:$phone\n";
    file_put_contents('users.txt', $line, FILE_APPEND);
    echo 'Зарегистрировано';
}
?>
<?php
if($_POST){
    $num = $_POST['num'];
    if (file_exists('users.txt')) {
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
} else {
    echo "Создай users.txt с данными!";
    exit;
}
    foreach($users as $line){
        $data = explode(':', $line);
        if($data[1] === $num){
            $_SESSION['user'] = $data[0];
            header('Location: ok.php');
            exit;
        }
    }
    echo 'Не найдено';
}
?>
</body>
</html>