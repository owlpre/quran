@extends('layout.app')

@section('style')
    <style>
        @font-face {
            font-family: 'qalammajeed';
            src: url({{ asset(
                '/font/qalammajeed.ttf'
            ) }});
        }
        .content > .content{
            padding-left: 24px;
        }
        .content .content .content{
            padding-left: 36px;
        }
        .content .content .content{
            padding-left: 48px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 content">
                @include('quran.tree.index')
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $(".toggle").click(function () {
                var el = $(this);
                el.next().toggle();
            });
        });
    </script>
@endsection
