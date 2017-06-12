@extends('layout.app')

@section('style')
    <style>
        @font-face {
            font-family: 'qalammajeed';
            src: url({{ asset(
                '/font/qalammajeed.ttf'
            ) }});
        }
        .form-control {
            display: inline-block;
            width: auto;
        }
        .sura-wrapper {
            padding: 8px;
        }
        .sura {
            padding: 8px;
            border: 1px solid #cecece;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                {{ Html::image('/img/quranalkarim.png') }}
                <br>
                <div class="action-hidden" style="display: none;">
                    {{ Form::text('sura', '', [
                        'class' => 'question form-control',
                        'placeholder' => 'Number of Sura',
                        'data-answer' => count($suras),
                    ]) }}
                    {{ Form::text('aya', '', [
                        'class' => 'question form-control',
                        'placeholder' => 'Number of Aya',
                        'data-answer' => $aya_count,
                    ]) }}
                </div>
                <div class="action-hidden">
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
    </div>
    <hr>
    <div class="container">
        <div class="row">
                @foreach ($suras as $sura)
                    <div class="sura-wrapper text-center col-sm-6 col-md-4 col-lg-3">
                        <div class="sura">
                            {{ Html::image($sura->image()) }}
                            <div class="action-hidden" style="display: none;">
                                {{ Form::text('name', '', [
                                    'class' => 'question form-control',
                                    'placeholder' => 'Sura Name',
                                    'data-answer' => $sura->name,
                                ]) }}
                                {{ Form::text('arti', '', [
                                    'class' => 'question form-control',
                                    'placeholder' => 'Sura Arti',
                                    'data-answer' => $sura->arti,
                                ]) }}
                                {{ Form::text('number', '', [
                                    'class' => 'question form-control',
                                    'placeholder' => 'Number of Aya',
                                    'data-answer' => $sura->ayas()->count(),
                                ]) }}
                            </div>
                            <div class="action-hidden">
                                <br>
                                {{ $sura->name }} <span class="badge">{{ $sura->ayas()->count() }}</span>
                                <br>
                                {{ $sura->arti }}
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div id="main-menu" style="position: fixed;top: 0px;padding: 8px;">
        <button class="btn btn-default">
            <span class="glyphicon glyphicon-asterisk"></span>
        </button>
        <button class="btn btn-default">
            <span class="glyphicon glyphicon-ok"></span>
        </button>
        <button class="btn btn-default">
            <span class="glyphicon glyphicon-erase"></span>
        </button>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $("#main-menu .glyphicon.glyphicon-asterisk").click(function () {
                $(".action-hidden").toggle();
            });
            $("#main-menu .glyphicon.glyphicon-ok").click(function () {
                $(".question").each(function () {
                    var el = $(this);
                    var answer = el.val();
                    var trueAnswer = el.data('answer');
                    if (answer != trueAnswer) {
                        el.val('');
                    }
                });
            });
            $("#main-menu .glyphicon.glyphicon-erase").click(function () {
                $(".question").val('');
            });
        });
    </script>
@endsection
