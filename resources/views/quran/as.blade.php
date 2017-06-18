@extends('layout.app')
<?php

    foreach ($suras as $k => $v) {
        try {
            dump((new \App\Translator($k)));
        } catch (\Exception $e) {
            dump($e);
        }
    }
?>

@section('style')
    <style>
        table {
            font-size: 24px;
        }
        @font-face {
            font-family: 'qalammajeed';
            src: url({{ asset(
                '/font/qalammajeed.ttf'
            ) }});
        }
    </style>
@endsection
