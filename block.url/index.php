<?php namespace _\lot\x\block;

function url() {} // Reserved function

foreach ([
    'clean',
    'current',
    'directory',
    'ground',
    'hash',
    'host',
    'i',
    'path',
    'port',
    'protocol',
    'query',
    'root',
    'scheme'
] as $v) {
    \Block::set('url.' . $v, $url->{$v}, 10);
}

\Block::set('url', $url, 10);