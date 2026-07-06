<?php
$dsn = 'mysql:host=127.0.0.1;port=3306;charset=utf8mb4';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $databases = $pdo->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN);
    echo implode(PHP_EOL, $databases);
} catch (Exception $e) {
    echo $e->getMessage();
}
