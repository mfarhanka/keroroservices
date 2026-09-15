# SEO setup

Set `KAUNDAR_SITE_URL` to the final public URL (without a trailing slash), or replace the empty default in `lib/seo.php`. Include the subdirectory if deployed beneath one. Use the preferred HTTPS hostname. No domain is inferred from incoming requests.

On Apache/cPanel you can set the environment variable in `.htaccess`, for example:

```apache
SetEnv KAUNDAR_SITE_URL https://your-domain.example
```

Replace the example with your actual domain before using it. This activates the canonical URL, absolute social preview image URLs, business URLs and sitemap. Until configured, URL-specific metadata is omitted and the sitemap responds with HTTP 503 rather than publishing an incorrect URL.

Apache `mod_rewrite` maps `/robots.txt` and `/sitemap.xml` to the PHP endpoints. If rewriting is unavailable, configure equivalent server routes; the sitemap is also available at `/sitemap.php`. For a subdirectory deployment, merge the generated robots rules and sitemap declaration into the host's root `/robots.txt`, since crawlers only use the root robots file.

After deployment, verify the public page's canonical URL and image URL, load `/robots.txt` and `/sitemap.xml`, and submit the sitemap URL in Google Search Console. Redirect alternate hostnames and HTTP to the preferred HTTPS URL through the hosting control panel.

The public page includes search metadata, Open Graph and Twitter cards, and LocalBusiness JSON-LD based on the visible company details. Admin responses send `X-Robots-Tag: noindex, nofollow, noarchive`; the admin path remains crawlable so search engines can see that directive. Robots directives do not provide access control.
