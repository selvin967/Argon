<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

$email = 'selvinarana1@gmail.com';
$password = 'selvin9999';

$user = User::where('email', $email)->first();
if (! $user) {
    echo "NO_USER\n";
    exit(0);
}

$user->password = Hash::make($password);
$user->save();

echo "UPDATED:" . $user->id . "\n";
