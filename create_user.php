<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$user = \App\Models\User::create([
    'name' => 'Demo User',
    'email' => 'demo@test.com',
    'email_verified_at' => now(),
    'password' => bcrypt('password123')
]);

echo "Usuario creado: demo@test.com / password123" . PHP_EOL;
