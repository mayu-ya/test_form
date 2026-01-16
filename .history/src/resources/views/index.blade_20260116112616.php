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
            <div class="form__input">
                <input type="radio" class="form__input-text" name="gender">男性
                <input type="radio" class="form__input-text" name="gender">女性
                <input type="radio" class="form__input-text" name="gender">その他
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">メールアドレス</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__input">
                <input type="emai" class="form__input-text" name="emai" placeholder="例:test@example.com">
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">電話番号</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__input">
                <input type="tel" class="form__input-text" name="tel" placeholder="080">
                <div class="form__input-tel">-</div>
                <input type="tel" class="form__input-text" name="tel" placeholder="1234">
                <div class="form__input-tel">-</div>
                <input type="tel" class="form__input-text" name="tel" placeholder="5678">
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">住所</span>
                <span class="form__required">※</span
            </div>
            <div class="form__input">
                <input type="text" class="form__input-text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">建物名</span>
            </div>
            <div class="form__input">
                <input type="text" class="form__input-text" name="building" placeholder="千駄ヶ谷マンション101">
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">お問い合わせの種類</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__select">
                <select name="content" class="form__select-item" placeholder="選択してください">
                    <option value=""></option>
                </select>
            </div>
            <div class="form__error">
                //
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">お問い合わせ内容</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__input">
                <textarea name="detail" class="form__input-textarea" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
                //
            </div>
        </div>
        <div class="form__group-button">
            <button class="form__group-button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection