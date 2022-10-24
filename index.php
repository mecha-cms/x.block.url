<?php namespace x;

function block__url(string $content, array $data = []) {
    if (0 === \strpos($data[0], 'url.')) {
        return (string) ($GLOBALS['url']->{\substr($data[0], 4)} ?? "");
    }
    if ('url' === $data[0]) {
        return (string) ($GLOBALS['url'] ?? "");
    }
    return "";
}

\Hook::set('block', __NAMESPACE__ . "\\block__url", 0);