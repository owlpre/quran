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
    @foreach ($ayas as $aya)
    <div>
    {{ $aya->text }}
    </div>
    @endforeach
    <div>
        مِنْ شَرِّ الْوَسْوَاسِ الْخَـنَّاسِ
    </div>
</div>
