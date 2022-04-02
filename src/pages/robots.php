<?php
header('Content-Type: text/plain');
?>
User-agent: *
Sitemap: <?= $_ENV["BASE_URL"] ?>/sitemap2.xml

User-agent: Googlebot-Image
Disallow: /images/icones/
