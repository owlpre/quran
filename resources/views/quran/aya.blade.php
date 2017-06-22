@extends('layout.app')

@section('style')
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
        .title {
            overflow: auto;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="title">
                <h1>
                    <!--
                    {{ $ayas->first()->sura->translation() }}
                    -->
                    &nbsp;
                    <span
                        class="pull-right"
                        dir="rtl"
                        lang="ar"
                        style="
                            font-family: qalammajeed;
                            font-size: 48px;
                        "
                    >{!! clean($ayas->first()->sura->ar) !!}</span>
                </h1>
                <hr>
            </div>
            @foreach ($ayas as $aya)
                <div
                    dir="rtl"
                    lang="ar"
                    style="
                        font-family: qalammajeed;
                        font-size: 48px;
                    "
                >{!! clean($aya->text) !!}</div>
                <hr>
                <div>{{ $aya->terjemahan }}</div>
                <hr>
                <div>{{ $aya->jalalayn }}</div>
                <hr>
                <div
                    dir="rtl"
                    lang="ar"
                >
                    @foreach ($aya->words as $word)
                        <div
                            style="
                                display: inline-block;
                                border-left: 1px solid #ddd;
                            "
                        >
                            <span
                                dir="rtl"
                                lang="ar"
                                style="
                                    display: inline-block;
                                    font-family: qalammajeed;
                                    font-size: 48px;
                                "
                            >
                                {{ $word->ar }}
                            </span>
                            <hr>
                            {{ $word->latin() }}
                            <hr>
                            {{ $word->tr }}
                        </div>
                    @endforeach
                </div>
                <hr>
            @endforeach
            <nav aria-label="Page navigation">
                <ul class="pager">
                    <li>
                        {!! $aya->prev() !!}
                    </li>
                    <li>
                        {!! $aya->next() !!}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection 
