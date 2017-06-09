<style>
@font-face {
    font-family: 'qalammajeed';
    src: url({{ asset(
        '/font/qalammajeed.ttf'
    ) }});
}
</style>
<div
>
    @foreach ($ayas as $aya)
    <div
        style="
            font-family: qalammajeed;
            text-align: right;
            font-size: 48px;
        "
    >
    {{ $aya->text }}
    </div>
    @endforeach
    @foreach ($terjemahan as $i)
    <div>
    {{ $i->text }}
    </div>
    @endforeach
    <hr>
    @foreach ($jalalayn as $i)
    <div>
    {{ $i->text }}
    </div>
    @endforeach
    <hr>
    @foreach ($latin as $i)
    <div>
    {!! $i->text !!}
    </div>
    @endforeach
    @foreach ($kata as $i)
    <div>
    <span
        style="
            font-family: qalammajeed;
            text-align: right;
            font-size: 48px;
        "
    >
    {!! $i->ar !!}
    </span>
    {!! $i->tr !!}
    </div>
    @endforeach
</div>
