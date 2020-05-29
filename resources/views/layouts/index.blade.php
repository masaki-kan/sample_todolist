<!DOCTYPE html>
<html>
    <head>
        <meta charaset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todolist</title>
        <link rel="stylesheet" href="{{ secure_asset('/css/index.css') }}" type="text/css" />
        <link rel="stylesheet" href="" type="text/css" />
    </head>
    <body>
        <header>
            <div id="head-top">
            <div class="header-top">
                <p><a href="/">Todolist</a></p>
            </div>
            @auth
            <div class="auth_name">
                <p>ようこそ{{ Auth::user()->name }}さん</p>
            </div>
            <div class="header-topnav" id="header-topnav">
                <ul>
                    <li><a href="/lists/add">リスト追加</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        ログアウト
                        </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                    </li>
                </ul>
            </div>
            @endauth
            </div>
        </header>
        <main>
            @yield('contents')
        </main>
        <footer>
            
        </footer>
    </body>
</html>