<?php
?>
<style>
@font-face {
    font-family: 'qalammajeed';
    src: url({{ asset(
        '/font/qalammajeed.ttf'
    ) }});
}
</style>
<h1>ID: {{ $aya->id }}</h1>
<div
    style="
        font-family: qalammajeed;
        text-align: right;
        font-size: 48px;
    "
>{!! $aya->text !!}</div>
<div
    style="
        font-family: qalammajeed;
        text-align: right;
        font-size: 48px;
    "
>{!! clean($aya->text) !!}</div>
<h1>revisions</h1>
@foreach ($aya->texts as $text)
<hr>
<div
    style="
        font-family: qalammajeed;
        text-align: right;
        font-size: 48px;
    "
>{!! $text->text !!}</div>
@endforeach
