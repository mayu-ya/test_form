@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content-back">Thank you</div>
    <div class="content__group">
        <div class="content-thanks">お問い合わせありがとうございました</div>
        <form class="form" action="/" method="post">
            @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit">HOME</button>
            </div>
        </form>
    </div>
</div>
@endsection