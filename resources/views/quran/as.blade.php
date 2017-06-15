@extends('layout.app')
<?php
    $ars = [
        'ا' => 'a',
        'ب' => 'b',
        'ت' => 't',
        'ث' => 'ts',
        'ج' => 'j',
        'ح' => 'H',
        'خ' => 'kh',
        'د' => 'd',
        'ذ' => 'dz',
        'ر' => 'r',
        'ز' => 'z',
        'س' => 'sh',
        'ش' => 'sy',
        'ص' => 's',
        'ض' => 'D',
        'ط' => 'T',
        'ظ' => 'dZ',
        'ع' => '\'a',
        'غ' => 'gh',
        'ف' => 'f',
        'ق' => 'q',
        'ك' => 'k',
        'ل' => 'l',
        'م' => 'm',
        'ن' => 'n',
        'ه' => 'h',
        'و' => 'w',
        'ي' => 'y',
    ];
?>

@section('style')
    <style>
        table {
            font-size: 24px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <tr>
                    @foreach ($ars as $k => $v)
                        <td>
                            {{ $k }}
                            <hr>
                            {{ $v }}
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
