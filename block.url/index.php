<?php

function fn_block_url($content) {
    $state = Extend::state('block', 'union');
    $o = $state[1][0][0]; // `[[`
    $url = new URL;
    if (strpos($content, $o . 'url.') !== false) {
        foreach (array_keys($url) as $v) {
            $content = Block::replace('url.' . $v, $url->{$v}, $content);
        }
    }
    return Block::replace('url', $url . "", $content);
}

Block::set('url', 'fn_block_url', 10);