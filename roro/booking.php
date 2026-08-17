<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./#hero', true, 303);
    exit;
}

$location = trim((string)($_POST['location'] ?? ''));
$package = trim((string)($_POST['package'] ?? ''));
$service = trim((string)($_POST['service'] ?? ''));

$allowedLocations = [
    'Kuala Lumpur',
    'Jalan Ipoh',
    'Dengkil',
    'Cyberjaya',
    'Putrajaya',
    'Sepang / Salak Tinggi',
    'Puchong',
    'Bangi / Kajang',
    'Sungai Buloh',
    'Rawang',
    'Nilai',
    'Shah Alam',
    'Subang Jaya',
    'Banting',
    'Other area in Kuala Lumpur / Selangor',
];

$allowedPackages = [
    '12 x 6 x 2½ CY Bin',
    '12 x 6 x 4 CY Bin',
    '12 x 6 x 5 CY Bin',
    'Other / Not sure',
];

$allowedServices = [
    'Wastage',
    'Sewerage',
    'Liquid Disposal',
    'Recycle Items',
    'Transport & Heavy Goods',
    'Cutting Trees & Disposal',
    'Clear Debris & Disposal',
];

if (
    !in_array($location, $allowedLocations, true) ||
    !in_array($package, $allowedPackages, true) ||
    !in_array($service, $allowedServices, true)
) {
    header('Location: ./?booking=invalid#hero', true, 303);
    exit;
}

$message = "Hello Kaundar Enterprise!\n\n"
    . "Location: {$location}\n"
    . "Package: {$package}\n"
    . "Service: {$service}\n\n"
    . 'I would like to request availability and a quotation.';

header('Location: https://wa.me/60162835680?text=' . rawurlencode($message), true, 303);
exit;
