<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа: Форма авторизации</h1>
        <p>Студенты: Фурсова Анастасия</p>
        <p>Группа: 09.02.07-3В</p>

        <h2>Форма входа</h2>
        <div class="form-container">
            <form action="process.php" method="POST" class="auth-form">
                <div class="form-group">
                    <label for="login">Логин:</label>
                    <input type="text" name="login" id="login" required placeholder="Введите ваш логин">
                    <small class="hint">Логин должен быть от 3 до 20 символов</small>
                </div>

                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="text" name="password" id="password" required placeholder="Введите ваш пароль">
                    <small class="hint">Пароль должен быть от 6 символов</small>
                </div>

                <div class="form-group">
                    <label for="passCheck">Подтверждение пароля:</label>
                    <input type="text" name="passCheck" id="passCheck" required placeholder="Подтвердите ваш пароль">
                    <small class="hint">Пароли должны совпадать</small>
                </div>

                <div class="form-group">
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember" value="1"> Запомнить меня
                    </label>
                </div>
<div class="buttons">

    <button type="submit" class="btn">Войти</button>
    <button type="reset" class="btn btn-secondary">Очистить форму</button>
</div>
            </form>
            <?php
            if(isset($_GET['error'])) {
                $error = htmlspecialchars($_GET['error']);
                $error_messages = explode("; ", $error);
                echo '<div class="error-message">';
                echo "<h3>Обнаружены ошибки</h3>";
                echo "<ul>";
                foreach ($error_messages as $error_msg) {
                    echo "<li>" . $error_msg . "</li>";
                }

                echo "</ul>";
                echo "</div>";
            }

            if(isset($_GET['success'])) {
                $success = htmlspecialchars($_GET['success']);
                echo '<div class="success-message">';
                echo '<h3>Успешно!</h3>';
                echo '<p>' . $success . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>