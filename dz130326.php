<?php
echo "<h3>1 задание <h3>";
$password = "furaadmin11";
if (preg_match('/^(?=.*\d).{8,}$/', $password)) {
    echo 'Пароль надежный';
} else {
    echo 'Пароль должен содержать минимум 8 символов и хотя бы 1 цифру';
}
?>
<?php
echo "<h3>2 задание <h3>";
$username = "Admin";
if (preg_match("/Admin/i", $username)){
    echo "привет, Admin!";
}
?>
<?php
echo "<h3>3 задание <h3>";
$money = 1000;

function pay($balance, $amount) {
    if (preg_match('/^d+$/', $balance) && preg_match('/^d+$/', $amount)) {
        if ($balance >= $amount) {
            $balance -= $amount;
            echo "Осталось $balance денег";
        } else {
            echo "Средств недостаточно";
        }
    } else {
        echo "Неверный формат чисел";
    }
}

pay($money, 300);  // Осталось 700 денег
pay($money, 1500); // Средств недостаточно
?>