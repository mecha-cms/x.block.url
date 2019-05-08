<?php namespace _\block;

function url() {} // Reserved function

foreach ($GLOBALS['URL'] as $k => $v) {
    \Block::set('url.' . $k, $v, 10);
}

\Block::set('url', $url . "", 10);