<?php

declare(strict_types=1);

if (defined('SITE_BASE')) {
    return;
}

/**
 * Web path from server document root to this project (no trailing slash).
 * Computed from DOCUMENT_ROOT vs project folder so assets work in:
 * - htdocs/isc-website, PHP built-in server cwd, or vhost pointed at project root.
 */
function isc_project_web_base(): string
{
    $doc = $_SERVER['DOCUMENT_ROOT'] ?? '';
    if ($doc === '') {
        return '';
    }

    $docNorm = str_replace('\\', '/', rtrim((string) realpath($doc) ?: $doc, '/'));
    $projectNorm = str_replace('\\', '/', dirname(__DIR__)); // includes/ -> project root
    $projectReal = realpath($projectNorm);
    if ($projectReal !== false) {
        $projectNorm = str_replace('\\', '/', $projectReal);
    }

    if ($docNorm === '' || $projectNorm === '') {
        return '';
    }

    $docLen = strlen($docNorm);
    $prefixOk = PHP_OS_FAMILY === 'Windows'
        ? (stripos($projectNorm, $docNorm) === 0)
        : (strncmp($projectNorm, $docNorm, $docLen) === 0);

    if (!$prefixOk) {
        return '';
    }

    $rel = substr($projectNorm, $docLen);
    $rel = str_replace('\\', '/', $rel);

    return $rel === '' || $rel === '/' ? '' : rtrim($rel, '/');
}

define('SITE_BASE', isc_project_web_base());

if (!function_exists('site_url')) {
    function site_url(string $path = ''): string
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');
        $base = SITE_BASE;

        if ($path === '') {
            return $base === '' ? '/' : $base;
        }

        if ($base === '') {
            return '/' . $path;
        }

        return $base . '/' . $path;
    }
}

if (!function_exists('site_href')) {
    function site_href(string $path = ''): string
    {
        return htmlspecialchars(site_url($path), ENT_QUOTES, 'UTF-8');
    }
}
