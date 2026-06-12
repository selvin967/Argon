<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\SparePart;

foreach (SparePart::all() as $part) {
    echo sprintf("%s: %s | %s | %s | %s\n", $part->id, $part->part_name, $part->brand, $part->unit_price, $part->status);
}
