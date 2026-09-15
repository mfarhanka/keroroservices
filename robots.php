<?php
declare(strict_types=1);
require __DIR__ . '/lib/seo.php';
header('Content-Type: text/plain; charset=UTF-8');

// Robots rules are relative to the host root, even for subdirectory installs.
$basePath = $seoSiteUrl !== '' ? (string) parse_url($seoSiteUrl, PHP_URL_PATH) : '';
echo "User-agent: *\n";
echo 'Disallow: ' . $basePath . "/data/\n";
echo 'Disallow: ' . $basePath . "/lib/\n";
// Allow admin crawling so crawlers can read its noindex response header.
if ($seoSiteUrl !== '') {
    echo "\nSitemap: " . $seoSiteUrl . "/sitemap.xml\n";
}
