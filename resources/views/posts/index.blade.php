<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app() ->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <body class="anitaliased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            <div class="grid grid-cols-2 gap-4 content-evenly">
            @foreach($posts as $post)
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray">
                    <div class="flex justify-center items-center gap-4">
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        <p class='body'>/{{$post->body}}</p>
                    </div>
                    <div>都道府県：{{$post->prefecture->name}}</div>
                    <div>{{$post->category->name}}</div>
                    <div>活動場所：{{$post->place}}</div>
                <!-- 以下を追記 -->
                <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{$post->id}})">delete</button>
                </form>
            </div>
            @endforeach
            </div>
        </div>
        <div class="paginate">
            {{$posts ->links()}}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
    </x-app-layout>
</html>