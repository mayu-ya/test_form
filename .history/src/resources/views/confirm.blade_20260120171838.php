@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Confirm</h2>
    </div>

    <form class="form" action="/thanks" method="post">
        @csrf
        <table class="table" border="1">
            <tr class="table-row">
                <th class="table-title">お名前</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="name" value="{{ $contact['last_name'] }}  {{ $contact['first_name'] }}" readonly>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">性別</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="gender" value="{{ $contact['gender'] }}" readonly>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">メールアドレス</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">電話番号</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="tel" value="{{ $contact['tel'][0] }}{{ $contact['tel'][1] }}{{ $contact['tel'][2] }}" readonly>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">住所</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="address" value="{{ $contact['address'] }}" readonly>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">建物名</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" name="building" value="{{ $contact['building'] }}" readonly>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">お問い合わせの種類</th>
                <td class="table-content">
                    <input type="text" class="table-content__input" value="{{ $category->content ?? '' }}" readonly>
                    <input type="hidden" name="category_id" value="{{ $contact['category_id']?? '' }}">
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-title">お問い合わせ内容</th>
                <td class="table-content">
                    <p class="table-content__input" name="detail">{{ $contact['detail'] }}</p>
                </td>    
            </tr>
        </table>
    
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
    <form action="/" class="form__button-correct" method="post">
        @csrf
        <button class="form__button-correct-submit" type="submit">修正</button>
    </form>
</div>
@endsection