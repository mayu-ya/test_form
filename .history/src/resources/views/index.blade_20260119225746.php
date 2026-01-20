@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Contact</h2>
    </div>

    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">お名前</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <input type="text" class="form__input-text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}">
                <input type="text" class="form__input-text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">性別</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <label for="man">
                    <input type="radio" class="form__input-radio" name="gender" id="man" value="男性" value="{{ old('gender') }}">男性
                </label>

                <label for="woman">
                    <input type="radio" class="form__input-radio" name="gender" id="woman" value="女性" value="{{ old('gender') }}">女性
                </label>

                <label for="other">
                    <input type="radio" class="form__input-radio" name="gender" id="other" value="その他" value="{{ old('gender') }}">その他
                </label>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">メールアドレス</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <input type="emai" class="form__input-text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">電話番号</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <input type="tel" class="form__input-text" name="tel[0]" placeholder="080" value="{{ old('tel[0]') }}">
                <div class="form__input-tel">-</div>
                <input type="tel" class="form__input-text" name="tel[1]" placeholder="1234" value="{{ old('tel[1]') }}">
                <div class="form__input-tel">-</div>
                <input type="tel" class="form__input-text" name="tel[2]" placeholder="5678" value="{{ old('tel[2]') }}">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ite">
                <span class="form__item">住所</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <input type="text" class="form__input-text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">建物名</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <input type="text" class="form__input-text" name="building" placeholder="千駄ヶ谷マンション101" value="{{ old('building') }}">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">お問い合わせの種類</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__select">
                <select name="content" class="form__select-item" value="{{ old('content') }}">
                    <option value="">選択してください</option>
                </select>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-item">
                <span class="form__item">お問い合わせ内容</span>
                <span class="form__required">※</span>
            </div>
            <div class="form__error">
                エラー
            </div>
            <div class="form__input">
                <textarea name="detail" class="form__input-textarea" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
            </div>
        </div>
        
        <div class="form__group-button">
            <button class="form__group-button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection