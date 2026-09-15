<?php
declare(strict_types=1);
require __DIR__ . '/lib/seo.php';

if ($seoSiteUrl === '') {
    http_response_code(503);
    header('Content-Type: text/plain; charset=UTF-8');
    header('X-Robots-Tag: noindex');
    echo 'Set KAUNDAR_SITE_URL to enable the sitemap.';
    exit;
}

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= htmlspecialchars($seoSiteUrl . '/', ENT_XML1 | ENT_QUOTES, 'UTF-8') ?></loc>
    </url>
</urlset>
