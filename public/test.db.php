<?php

declare(strict_types=1);

header('Content-Type: text/plain; charset=utf-8');

try {
    $pdo = require dirname(__DIR__) . '/config/database.php';

    $database = $pdo->query('SELECT DATABASE()')->fetchColumn();

    $tableCount = $pdo->query(
        'SELECT COUNT(*)
         FROM information_schema.tables
         WHERE table_schema = DATABASE()'
    )->fetchColumn();

    $roles = $pdo->query(
        'SELECT name FROM roles ORDER BY id'
    )->fetchAll(PDO::FETCH_COLUMN);

    echo "Database connection successful!\n";
    echo "Database: {$database}\n";
    echo "Tables found: {$tableCount}\n";
    echo "Roles: " . implode(', ', $roles) . "\n";

} catch (Throwable $e) {
    error_log($e->__toString());

    http_response_code(500);

    echo "Connection failed. Check your MySQL service, credentials, ";
    echo "and PHP PDO MySQL extension.\n";
}
