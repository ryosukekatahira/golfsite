<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/usr/layouts/header.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
    </head>
    <body>
        <header>
            <div style="display: flex;">
                <div class="mainLogo">
                    <h3 class="noto-serif-jp">片平ゴルフ練習場</h3>
                </div>
                <div class="hederBtn" style="display: flex; gap: 15px;">
                    <button type="button" class="btn btn-primary noto-serif-jp"><a href="{{ route('usr.index') }}">打席予約</a></button>
                    <button type="button" class="btn btn-secondary noto-serif-jp"><a href="{{ route('usr.index') }}">ホーム</a></button>
                </div>
            </div>
            <div class="headerList noto-serif-jp">
                <ul class="headerListUl">
                    <li><a href="{{ route('usr.index') }}">お知らせ</a></li>
                    <li><a href="{{ route('usr.index') }}">アクセス</a></li>
                    <li><a href="{{ route('usr.index') }}">施設案内</a></li>
                    <li><a href="{{ route('usr.index') }}">利用料金</a></li>
                    <li><a href="{{ route('usr.index') }}">お問い合わせ</a></li>
                </ul>
            </div>
        </header>
    </body>
</html>