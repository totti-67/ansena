{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '管理者home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>管理者home画面</h2>
            </div>
        </div>
    </div>
@endsection