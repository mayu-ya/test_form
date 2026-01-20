@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Confirm</h2>
    </div>

    <form action="" class="form">
        <table class="table" border="1">
            <tr class="table-row">
                <th class="table-title">お名前</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="full_name" value="{{ $contact['last_name'] }}{{ $contact['first_name'] }}">
                    <input type="text" class="table-content__input" name="first_name" value="">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">性別</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="gender" value="{{ $contact['gender'] }}">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">メールアドレス</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">電話番号</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="tel_full" value="{{ $contact['tel[0]'] }}{{ $contact['tel[1]'] }}{{ $contact['tel[2]'] }}">
                    <input type="text" class="table-content__input" name="tel[1]" value="サンプルテキスト">
                    <input type="text" class="table-content__input" name="tel[2]" value="サンプルテキスト">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">住所</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="address" value="{{ $contact['address'] }}">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">建物名</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="building" value="{{ $contact['building'] }}">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">お問い合わせの種類</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="content" value="サンプルテキスト">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">お問い合わせ内容</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="detail" value="{{ $contact['detail'] }}">
                </td>
            </tr>
        </table>
    
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <button class="form__button-correct" type="submit">修正</button>
        </div>
    </form>
</div>
@endsection