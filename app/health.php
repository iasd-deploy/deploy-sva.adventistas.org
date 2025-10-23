<?php
// Impede cache (garante que o status seja sempre atualizado)
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Type: application/json; charset=UTF-8");

// Verifica se o PHP e o servidor estão funcionando corretamente
$status = [
    "status" => "ok",
    "timestamp" => date("Y-m-d H:i:s"),
    "server_ip" => $_SERVER['SERVER_ADDR'] ?? gethostbyname(gethostname()),
    "host" => $_SERVER['SERVER_NAME'] ?? 'unknown',
    "php_version" => PHP_VERSION,
];

// Define o código HTTP
http_response_code($status["status"] === "ok" ? 200 : 500);

// Retorna JSON formatado
echo json_encode($status, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
