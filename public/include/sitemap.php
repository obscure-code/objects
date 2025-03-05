<?php

/** @var array $data */

declare(strict_types=1);

/** @var array $chapters */
$chapters = $data['chapters'];

header('Content-type: application/xhtml+xml');

echo '<?xml version="1.0" encoding="UTF-8"?>';

?>

<urlset
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns="https://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xhtml="https://www.w3.org/TR/xhtml11/xhtml11_schema.html">

    <url>
        <loc>https://objects-book.ru/</loc>
    </url>
    <url>
        <loc>https://objects-book.ru/chapters</loc>
    </url>
    <?php foreach ($chapters as $chapter => $title) { ?>
        <url>
            <loc>https://objects-book.ru/chapter/<?= $chapter ?></loc>
        </url>
    <?php } ?>
    <?php foreach ($chapters as $chapter => $title) { ?>
        https://objects-book.ru/chapter/<?= $chapter ?>
    <?php } ?>
</urlset>
