<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$file = "users.json";

if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

$users = json_decode(file_get_contents($file), true);

foreach ($users as $user) {
    if ($user["email"] === $data["email"]) {
        echo json_encode([
            "status" => "error",
            "message" => "Email sudah terdaftar!"
        ]);
        exit;
    }
}

$users[] = $data;

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

echo json_encode([
    "status" => "success",
    "message" => "Registrasi berhasil!"
]);