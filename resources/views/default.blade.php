<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/styles.css">
	</head>
	<body>
		<h1><a href="{{ url('/') }}">Skype BBS</a></h1>
		<p>アクティブユーザー： 10256人</p>
        <div class="menu">
            <ul>
                <li><a href="">投稿</a></li>
                <li><a href="">検索</a></li>
            </ul>
        </div>
        @yield('content')
</html> 