<?php

declare(strict_types=1);
require __DIR__ . '/data.php';

/**
 * Order by date
 *
 * @param [array] $a
 * @param [array] $b
 * @return int
 */
function compare(array $a, array $b): int
{
    return strtotime($b['date']) - strtotime($a['date']);
}

/**
 * Gets authors name by comparing author id and post id
 *
 * @param [int] $authorName
 * @param [array] $authors
 * @return string
 */
function getAuthorName(int $authorName, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorName) {
            $fullName = $author['name'];
        }
    }
    return $fullName;
}
