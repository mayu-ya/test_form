@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<nav class="header">
    <form action="">
        <button class="header__button">logout</button>
    </form>
</nav>
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h2 class="title-h">Admin</h2>
    </div>
    
    <div class="search">
        <form action="" class="form__search">
            <div class="form__search-item">
                <input type="search" name="name" placeholder="名前やメールアドレスを入力してください">
                <select name="gender">
                    <option value="">性別</option>
                </select>
                <select name="content">
                    <option value="">お問い合わせの種類</option>
                </select>
                <input type="date" name="date">
                <div class="search__button">
                    <button class="search__button-submit" tyup="submit">検索</button>
                </div>
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
    </div>
    
    <div class="table-content">
        <table class="table">
            <tr class="table-row">
                <th class="table-title">
                    <span class="table-span">お名前</span>
                    <span class="table-span">性別</span>
                    <span class="table-span">メールアドレス</span>
                    <span class="table-span">お問い合わせン種類</span>
                </th>
            </tr>
            <tr class="table-row">
                <td class="table__item">
                    <form class="form">
                        <div class="form__item">
                            <div class="form__item-name">
                                <input type="text" class="form__item-input">
                            </div>
                            <div class="form_item-gender">
                                <input type="text" class="form__item-input">
                            </div>
                            <div class="form_item-email">
                                <input type="text" class="form__item-input">
                            </div>
                            <div class="form_item-content">
                                <input type="text" class="form__item-input">
                            </div>
                        </div>
                        <div class="form__button">
                            <button class="form__button-detail">詳細</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection