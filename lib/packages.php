<?php
declare(strict_types=1);

const PACKAGE_DATA_FILE = __DIR__ . '/../data/packages.json';

function defaultPackages(): array
{
    return [
        ['id' => 'pkg-12x6x2-5', 'size' => '12 x 6 x 2½', 'image' => 'assets/images/package-12x6x2-5.png?v=2', 'price' => 'Negotiable', 'active' => true],
        ['id' => 'pkg-12x6x4', 'size' => '12 x 6 x 4', 'image' => 'assets/images/package-12x6x4.png?v=2', 'price' => 'Negotiable', 'active' => true],
        ['id' => 'pkg-12x6x5', 'size' => '12 x 6 x 5', 'image' => 'assets/images/package-12x6x5.png', 'price' => 'Negotiable', 'active' => true],
    ];
}

function loadPackages(): array
{
    if (!is_file(PACKAGE_DATA_FILE)) {
        return defaultPackages();
    }

    $packages = json_decode((string) file_get_contents(PACKAGE_DATA_FILE), true);
    return is_array($packages) ? $packages : defaultPackages();
}

function savePackages(array $packages): bool
{
    $directory = dirname(PACKAGE_DATA_FILE);
    if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
        return false;
    }

    $json = json_encode(array_values($packages), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    return $json !== false && file_put_contents(PACKAGE_DATA_FILE, $json . PHP_EOL, LOCK_EX) !== false;
}
