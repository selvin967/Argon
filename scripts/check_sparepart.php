<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\SparePart;

$id = 2;
$sparePart = SparePart::find($id);
if (! $sparePart) {
    echo "NO_SPARE\n";
    exit(0);
}

echo json_encode($sparePart->toArray(), JSON_PRETTY_PRINT);
