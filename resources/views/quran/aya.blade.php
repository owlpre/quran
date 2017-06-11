<style>
@font-face {
    font-family: 'qalammajeed';
    src: url({{ asset(
        '/font/qalammajeed.ttf'
    ) }});
}
.ar-mark {
    display: inline-block;
    width: 24px;
    margin-left: 12px;
    margin-right: -4px;
}
</style>
<div
    dir="rtl"
    lang="ar"
    style="
        font-family: qalammajeed;
        font-size: 48px;
    "
>{!! clean($aya->text) !!}</div>
{!! $aya->prev() !!}
{!! $aya->next() !!}
