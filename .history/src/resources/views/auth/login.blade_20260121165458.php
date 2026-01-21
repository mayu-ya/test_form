@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<ul>
    <li class="header__nav">
        <a href="/register" class="header__nav-a">register</a>
    </li>
</ul>
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Login</h2>
    </div>

    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__item">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__goup-title-span">メールアドレス</span>
                </div>
                <div class="form__error">
                    //
                </div>
                <div class="form__group-input">
                    <input type="email" class="form__group-unput-item" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__goup-title-span">パスワード</span>
                </div>
                <div class="form__error">
                    //
                </div>
                <div class="form__group-input">
                    <input type="password" class="form__group-unput-item" name="password" placeholder="例:coachtech1106">
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit">ログイン</button>
            </div>
        </div>
    </form>
</div>
@endsection