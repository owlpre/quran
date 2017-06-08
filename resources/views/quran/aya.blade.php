<style>
@font-face {
    font-family: 'qalammajeed';
    src: url({{ asset(
        '/font/qalammajeed.ttf'
    ) }});
}
</style>
<div
    style="
        font-family: qalammajeed;
        text-align: right;
        font-size: 48px;
    "
>
    {{ $aya->text }}
</div>
