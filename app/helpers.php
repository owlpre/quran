<?php

if (!function_exists('clean')) {
    function clean($text) {
        $search = [
            'ۙ',
        ];
        $replace = [
            '',
        ];
        $text = str_replace($search, $replace, $text);
        return $text;
    }
}
