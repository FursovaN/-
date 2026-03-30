<?php
require_once 'functions.php';

// Очищаем сессию
session_destroy();

// Удаляем Cookie "Запомнить меня"
setcookie('remember_login', '', time() - 3600, '/');
setcookie('remember_token', '', time() - 3600, '/');

// Перенаправляем на главную
header('Location: index.php');
exit();

?>
