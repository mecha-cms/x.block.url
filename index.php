<?php namespace x;

function block__url(string $content, array $lot = []) {
    if (0 === \strpos($lot[0], 'url.')) {
        return (string) (\lot('url')->{\substr($lot[0], 4)} ?? "");
    }
    if ('url' === $lot[0]) {
        return (string) (\lot('url') ?? "");
    }
    return "";
}

\Hook::set('block', __NAMESPACE__ . "\\block__url", 0);