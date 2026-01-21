@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header')
<ul></ul>
<li class="header__nav">
    <a href="/login" class="header__nav-a">login</a>
</li>
@endsection

@section('content')
<div class="contact">
    <div class="title">
        <h2 class="title-h">Register</h2>
    </div>

    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__goup-title-span">お名前</span>
            </div>
            <div class="form__error">
                //
            </div>
            <div class="form__group-input">
                <input type="text" class="form__group-input-item" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__goup-title-span">メールアドレス</span>
            </div>
            <div class="form__error">
                //
            </div>
            <div class="form__group-input">
                <input type="email" class="form__group-input-item" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
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
                <input type="password" class="form__group-input-item" name="password" placeholder="例:coachtech1106">
            </div>
        </div>

        <div class="form">
            <div class="form__group-title">
                <span class="form__group-title-span">確認用パスワード</span>
            </div>
            <div class="form__error">
                //
            </div>
            <div class="form__group-input">
                <input type="password" class="form__group-input-item" placeholder="例:coachtech1106">
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection