<?php namespace x\block__url;

function block() {} // Reserved function

foreach ([
    'clean',
    'current',
    'd',
    'ground',
    'hash',
    'host',
    'i',
    'path',
    'port',
    'protocol',
    'query',
    'root'
] as $v) {
    \Block::set('url.' . $v, $url->{$v}, 10);
}

\Block::set('url', $url, 10);