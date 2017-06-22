@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Latin</th>
                        <th># of aya</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suras as $sura)
                    <tr>
                        <td>{{ $sura->id }}</td>
                        <td
                            dir="rtl"
                            lang="ar"
                            style="
                                font-family: qalammajeed;
                                font-size: 24px;
                            "
                        >{{ $sura->ar }}</td>
                        <td>{{ $sura->translation() }}</td>
                        <td>{{ count($sura->ayas) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
