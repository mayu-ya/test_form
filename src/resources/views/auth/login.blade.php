@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<nav class="header">
    <form action="">
        <button class="header__button">register</button>
    </form>
</nav>
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Login</h2>
    </div>

    <form class="form">
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__goup-title-span">メールアドレス</span>
            </div>
            <div class="form__error">
                //
            </div>
            <div class="form__group-input">
                <input type="email" class="form__group-unput-item" name="email" placeholder="例:test@example.com" value="">
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
                <input type="password" class="form__group-unput-item" name="password" placeholder="例:coachtech1106" value="">
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit">ログイン</button>
        </div>

    </form>
</div>
@endsection