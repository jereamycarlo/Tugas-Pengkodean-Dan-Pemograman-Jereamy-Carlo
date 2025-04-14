<?php
include 'db.php';

header('Content-Type: application/json');

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $quantity = $data['quantity'];

    $stmt = $pdo->prepare("INSERT INTO inventory (