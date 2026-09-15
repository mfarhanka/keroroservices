<?php
declare(strict_types=1);

// Set this to the public HTTPS URL, including any deployment subdirectory.
// An environment variable can override it without changing this file.
$seoSiteUrl = rtrim((string) (getenv('KAUNDAR_SITE_URL') ?: ''), '/');
if (!filter_var($seoSiteUrl, FILTER_VALIDATE_URL)
    || !in_array(parse_url($seoSiteUrl, PHP_URL_SCHEME), ['http', 'https'], true)
    || parse_url($seoSiteUrl, PHP_URL_QUERY) !== null
    || parse_url($seoSiteUrl, PHP_URL_FRAGMENT) !== null) {
    $seoSiteUrl = '';
}

$seoTitle = $pageTitle ?? 'RORO Bin & Waste Services in KL & Selangor | Kaundar Enterprise';
$seoDescription = 'Kaundar Enterprise offers RORO bins, waste collection, recycling, debris clearing and transport in Kuala Lumpur and Selangor. Request a quotation.';
$seoImagePath = '/assets/images/project-17-01.jpg';
$seoBusiness = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => 'Kaundar Enterprise',
    'description' => $seoDescription,
    'foundingDate' => '1994',
    'telephone' => '+60162835680',
    'email' => 'kaundarenterprise@gmail.com',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'No. 2-3-4, Menara KLH, Jalan Kasipillay, Off Jalan Ipoh, Batu 2½',
        'addressLocality' => 'Kuala Lumpur',
        'postalCode' => '51200',
        'addressCountry' => 'MY',
    ],
    'areaServed' => ['Kuala Lumpur', 'Selangor'],
    'sameAs' => ['https://www.instagram.com/kaundarenterprise/', 'https://t.me/kaundarenterprise'],
];
if ($seoSiteUrl !== '') {
    $seoBusiness['@id'] = $seoSiteUrl . '/#business';
    $seoBusiness['url'] = $seoSiteUrl . '/';
    $seoBusiness['image'] = $seoSiteUrl . $seoImagePath;
    $seoBusiness['logo'] = $seoSiteUrl . '/assets/images/brand/ke-logo.png';
}
