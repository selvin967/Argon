<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Services: " . \App\Models\Service::count() . PHP_EOL;
echo "Spare Parts: " . \App\Models\SparePart::count() . PHP_EOL;

// Mostrar algunos servicios
echo "\nPrimeros 3 servicios:" . PHP_EOL;
\App\Models\Service::limit(3)->get()->each(function($service) {
    echo "- " . $service->service_name . " (" . $service->service_category . ")" . PHP_EOL;
});

// Mostrar algunos repuestos
echo "\nPrimeros 3 repuestos:" . PHP_EOL;
\App\Models\SparePart::limit(3)->get()->each(function($part) {
    echo "- " . $part->part_name . " - $" . $part->unit_price . PHP_EOL;
});
