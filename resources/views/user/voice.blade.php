{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'お客様の声')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お客様の声画面</h2>
            </div>
        </div>
    </div>
@endsection