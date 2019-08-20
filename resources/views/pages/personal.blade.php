@extends('layouts.master')

@section('content')

<div class="main">
    <div class="breadcrumbs">
        <div class="cont">
            <a href="/">Главная</a>&#8194;/&#8194;<span>Сотрудничество</span>
        </div>
    </div>
    <div class="page personal">
        <div class="cont">
            <article class="article">
                <h1>Сотрудничество</h1>
                <img src="{{asset('')}}img/cooperation/1.png" class="img-fluid" alt="">
                <img src="{{asset('')}}img/cooperation/5.png" class="img-fluid" alt="">
                <img src="{{asset('')}}img/cooperation/2.png" class="img-fluid" alt="">
                <img src="{{asset('')}}img/cooperation/3.png" class="img-fluid" alt="">
                <img src="{{asset('')}}img/cooperation/4.png" class="img-fluid" alt="">
                <div class="download_file">
                    <a download=""  href="/download/serso1.pdf">Download english version</a>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
