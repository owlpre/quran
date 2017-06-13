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
                    <div class="form-group">
                        {{ Form::text('sura', '', [
                            'class' => 'question form-control',
                            'placeholder' => 'Number of Sura',
                            'data-answer' => count($suras),
                            'autocomplete' => 'off',
                            'spellcheck' => 'false',
                        ]) }}
                    </div>
                    <div class="form-group">
                        {{ Form::text('aya', '', [
                            'class' => 'question form-control',
                            'placeholder' => 'Number of Aya',
                            'data-answer' => $aya_count,
                            'autocomplete' => 'off',
                            'spellcheck' => 'false',
                        ]) }}
                    </div>
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
                            <div class="action-hidden" style="display: none;">
                                {{ $sura->id }}
                            </div>
                            <div class="action-hidden">
                                {{ Html::image($sura->image()) }}
                            </div>
                            <div class="action-hidden" style="display: none;">
                                <div class="form-group">
                                    {{ Form::text('name', '', [
                                        'class' => 'question form-control',
                                        'placeholder' => 'Sura Name',
                                        'data-answer' => $sura->name,
                                        'autocomplete' => 'off',
                                        'spellcheck' => 'false',
                                    ]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('arti', '', [
                                        'class' => 'question form-control',
                                        'placeholder' => 'Sura Arti',
                                        'data-answer' => $sura->arti,
                                        'autocomplete' => 'off',
                                        'spellcheck' => 'false',
                                    ]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('number', '', [
                                        'class' => 'question form-control',
                                        'placeholder' => 'Number of Aya',
                                        'data-answer' => $sura->ayas()->count(),
                                        'autocomplete' => 'off',
                                        'spellcheck' => 'false',
                                    ]) }}
                                </div>
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
        <button class="btn btn-default btn-action">
            <span class="glyphicon glyphicon-asterisk"></span>
        </button>
        <button class="btn btn-default btn-check">
            <span class="glyphicon glyphicon-ok"></span>
        </button>
        <button class="btn btn-default btn-reset">
            <span class="glyphicon glyphicon-erase"></span>
        </button>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            function checkAnswers() {
                var next = false;
                $(".question").each(function () {
                    var el = $(this);
                    if (next == true) {
                        el.focus();
                        next = 0;
                    }
                    var answer = el.val();
                    var trueAnswer = el.data('answer');
                    var group = el.closest('.form-group');
                    if (answer != '') {
                        if (answer == trueAnswer) {
                            group.removeClass("has-error");
                            group.addClass("has-success");
                            if ($(this).is(":focus") && next == false) {
                                next = true;
                            }
                        } else {
                            group.removeClass("has-success");
                            group.addClass("has-error");
                        }
                    } else {
                        group.removeClass("has-success");
                        group.removeClass("has-error");
                    }
                });
            };

            $("#main-menu .btn-action").click(function () {
                $(".action-hidden").toggle();
            });
            $("#main-menu .btn-check").click(function () {
                checkAnswers();
            });
            $("#main-menu .btn-reset").click(function () {
                $(".question").val('');
            });
            $(".question").keypress(function (e) {
                if (e.which == 13) {
                    checkAnswers();
                }
            });
        });
    </script>
@endsection
