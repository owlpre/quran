@extends('layout.app')

@section('style')
    <style>
        @font-face {
            font-family: 'qalammajeed';
            src: url({{ asset(
                '/font/qalammajeed.ttf'
            ) }});
        }
        .sura {
            height: 150px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                {{ Html::image('/img/quranalkarim.png') }}
                <br>
                <span class="btn btn-info">
                    <span class="badge">{{ count($suras) }}</span>
                    Suras
                </span>
                <span class="btn btn-default">
                    <span class="badge">{{ $aya_count }}</span>
                    Ayas
                </span>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
                @foreach ($suras as $sura)
                    <div class="sura text-center col-sm-6 col-md-4 col-lg-3">
                        {{ Html::image($sura->image()) }}
                        <br>
                        {{ $sura->name }} <span class="badge">{{ $sura->ayas()->count() }}</span>
                        <br>
                        {{ $sura->arti }}
                    </div>
                @endforeach
        </div>
    </div>
@endsection
