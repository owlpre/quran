<style>
@font-face {
    font-family: 'qalammajeed';
    src: url({{ asset(
        '/font/qalammajeed.ttf'
    ) }});
}
</style>
<div
    dir="rtl"
    lang="ar"
    style="
        font-family: qalammajeed;
        font-size: 48px;
    "
>{!! $aya->text !!}</div>
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
