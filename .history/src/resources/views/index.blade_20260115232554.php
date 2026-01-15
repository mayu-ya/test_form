@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="contact">
        <h2 class="contact-title">Contact</h2>
    </div>

    <form class="form">
        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">お名前</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__input">
                <input type="text" class="form__input-text" name="name" placeholder="例:山田">
                <input type="text" class="form__input-text" name="name" placeholder="例:太郎">
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">性別</span>
                <span class="form__required">※</span>
            </div>
        </div>
        <div class="form__group"></div>
        <div class="form__group"></div>
        <div class="form__group"></div>
        <div class="form__group"></div>
        <div class="form__group"></div>
        <div class="form__group"></div>
    </form>
</div>
@endsection