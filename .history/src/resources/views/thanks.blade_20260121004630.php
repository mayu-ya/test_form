@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content-back">Thank you</div>
    <div class="content__group">
        <div class="content-thanks">お問い合わせありがとうございました</div>
        <div class="content__link">
            <a class="contact__link-a" href="/">HOME</a>
        </div>
    </div>
</div>
@endsection