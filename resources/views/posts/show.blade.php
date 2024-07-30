<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_','-',app() ->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
    </head>
    <x-app-layout>
        <body class="min-h-screen bg-white dark:bg-black dark:text-white">
            <div class="bg-red-400 dark:bg-lime-500 h-screen">
            <h1 class="title">
                {{ $post ->title}}　
            </h1>
            <div class='sontent'>
                <div class='content_post'>
                    <h3>本文</h3>
                    <p class='body'>{{$post->body}}</p>
                </div>
                <div>
                    <img src="{{$post ->image_url}}" alt="画像が読み込めません。">
                </div>
            </div>
            <div class="footer">
                <a href = "/index">戻る</a>
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
            <button onclick="toggleDarkMode()">テーマ切り替え</button>
            </div>
        </body>
        <script>
            function toggleDarkMode() {
                // htmlタグにdarkクラスが含まれているかどうか
                if (document.documentElement.classList.contains('dark')) {
                // darkクラスが含まれているならライトモードに変更
                document.documentElement.classList.remove('dark')
                localStorage.theme = 'light'
                } else {
                // darkクラスが含まれていないならダークモードに変更
                document.documentElement.classList.add('dark')
                localStorage.theme = 'dark'
                }
            }
        </script>
    </x-app-layout>
</html>