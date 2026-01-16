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
                <input type="search" name="name">
                <select name="gender"></select>
                <select name="content"></select>
                <input type="date">
                <div class="search__button">
                    <button class="search__button-submit" type="submit">検索</button>
                </div>
            </div>
        </form>
        <form action="" class="reset__button">
            <button class="reset__button-submit">リセット</button>
        </form>
    </div>
    
    <form action="" class="form__table"></form>
</div>
@endsection