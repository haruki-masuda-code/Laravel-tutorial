<?php
$pdo = new PDO(
    'mysql:host=db;dbname=app;charset=utf8mb4',
    'root',
    'pass',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);