@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<div>
    <form action="/logout" method="post">
        @csrf
        <button class="header__button">logout</button>
    </form>
</div>
    
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Admin</h2>
    </div>
    
    <div class="search">
        <form class="form__search" action="/search" method="get">
            @csrf
            <div class="form__search-item">
                <input class="form__search-name" type="search" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ old('keyword') }}">
                <select class="form__search-gender" name="gender">
                    <option value="">性別</option>
                    <option value="3">全部</option>
                    <option value="0">男性</option>
                    <option value="1">女性</option>
                    <option value="2">その他</option>
                </select>
                <select class="form__search-content" name="category_id">
                    <option value="">お問い合わせの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category->content }}</option>
                    @endforeach
                </select>
                <input class="form__search-date" type="date" name="date">
            </div>
            <div class="search__button">
                <button class="search__button-submit" tyup="submit">検索</button>
            </div>
        </form>
        <form action="" class="reset__button">
            <button class="reset__button-submit">リセット</button>
        </form>
    </div>

    <div class="export">
        <form action="" class="form__export">
            <button class="form__export-button">エクスポート</button>
        </form>
        {{ $contacts->links('vendor.pagination.custom-links') }}
    </div>
    
    <div class="table-content">
        <table class="table">
            <tr class="table-row">
                <th class="table-title">
                    <span class="table-span">お名前</span>
                    <span class="table-span">性別</span>
                    <span class="table-span">メールアドレス</span>
                    <span class="table-span">お問い合わせの種類</span>
                </th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="table-row">
                <td class="table__item">
                    <form class="form">
                        <div class="form__item">
                            <input type="text" class="form__item-input" name="name" value="{{ $contact['last_name'] }}  {{ $contact['first_name'] }}" readonly>
                            @php
                            $gendertext = [1 => '男性', 2 => '女性', 3=>'その他'][$contact['gender']];
                            @endphp
                            <input type="text" class="form__item-input" name="gender" value="{{ $gendertext }}" readonly>
                            <input type="text" class="form__item-input" name="email" value="{{ $contact['email'] }}" readonly>
                            <input type="text" class="form__item-input" name="category_id"  value="{{ $contact->category->content }}" readonly>
                        </div>
                        <div class="form__button">
                            <button class="form__button-detail" popovertarget="my-popover" popovertargetaction="show">
                                詳細
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<button popovertarget="test">テスト</button>
<div id="test" popover>表示されました！</div>

@endsection