<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=tesis', 'laravel', 'laravel');
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}