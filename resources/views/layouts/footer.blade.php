<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/usr/layouts/footer.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
    </head>
    <body>
        <footer>
            <div class="footer noto-serif-jp">
                <div class="footerLogo">
                    <h3>片平ゴルフ練習場</h3>
                </div>
                <div class="footerInfo">
                    <div class="footerList">
                        <div class="footerListUp">
                            <ul>
                                <li><a href="{{ route('usr.index') }}">お知らせ</a></li>
                                <li><a href="{{ route('usr.index') }}">アクセス</a></li>
                                <li><a href="{{ route('usr.index') }}">施設案内</a></li>
                                <li><a href="{{ route('usr.index') }}">利用料金</a></li>
                                <li><a href="{{ route('usr.index') }}">お問い合わせ</a></li>
                            </ul>
                        </div>
                        <div class="footerListDown">
                            <ul>
                                <li>© 2024 片平ゴルフ練習場</li>
                                <li>プライバシーポリシー</li>
                                <li>利用規約</li>
                                <li>クッキー設定</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footerTimeList">
                        <div class="leftTimeList">
                            <ul>
                                <li>平日</li>
                                <li>土日祝</li>
                                <li>電話番号</li>
                                <li>住所</li>
                            </ul>
                        </div>
                        <div class="rightTimeList">
                            <ul>
                                <li>7:30~23:00</li>
                                <li>6:00~24:00</li>
                                <li>03-0000-0000</li>
                                <li>東京都練習区練習町1-2-3</li>

                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
    </body>
</html>