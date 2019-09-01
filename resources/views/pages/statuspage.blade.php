<?php //var_dump($statusData) ?>
@extends('layouts.master')

@section('content')
<div class="main">
    <div class="breadcrumbs">
        <div class="cont">
            <a href="/">Главная</a>&#8194;/&#8194;<span>Статус заказа № {{ $statusData['id'] }}</span>
        </div>
    </div>
	<newstatus :statusdata="{{ $statusData }}"></newstatus>
</div>


{{-- 4387356198 --}}
@endsection