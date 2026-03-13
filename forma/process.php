<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session if needed (for future improvements)
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = isset($_POST['login']) ? trim($_POST['login']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $passcheck = isset($_POST['passCheck']) ? $_POST['passCheck'] : '';
    $remember = isset($_POST['remember']);

    $errors = [];

    if (empty($login)) {
        $errors[] = "Логин не может быть пустым";
    } elseif (strlen($login) < 3) {
        $errors[] = "Логин должен содержать минимум 3 символа";
    } elseif (strlen($login) > 20) {
        $errors[] = "Логин не должен превышать 20 символов";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $login)) {
        $errors[] = "Логин может содержать только буквы, цифры и символ подчёркивания";
    }

    if (empty($password)) {
        $errors[] = "Пароль не может быть пустым";
    } elseif (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать минимум 6 символов";
    }

    if (empty($passcheck)) {
        $errors[] = "Подтверждение пароля не может быть пустым";
    } elseif ($password !== $passcheck) {
        $errors[] = "Пароли не совпадают";
    }

    if (!empty($errors)) {
        $error_string = urlencode(implode(";", $errors));
        header("Location: index.php?error=" . $error_string);
        exit();
    }

    $valid_login = "student";
    $valid_password = "password123";

    if ($login === $valid_login && $password === $valid_password) {
        $success_message = "Добро пожаловать, " . htmlspecialchars($login) . "!";

        if ($remember) {
            $success_message .= " Вы будете запомнены на этом устройстве.";
        }

        header("Location: index.php?success=" . urlencode($success_message));
        exit();
    } else {
        $errors[] = "Неверный логин или пароль";
        $error_string = urlencode(implode(";", $errors));
        header("Location: index.php?error=" . $error_string);
        exit();
    }
} else {
    $error_string = urlencode("Неверный метод запроса");
    header("Location: index.php?error=" . $error_string);
    exit();
}
?>