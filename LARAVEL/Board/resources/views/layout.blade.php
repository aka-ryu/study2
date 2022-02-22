<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Board</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ url('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="navbar">
                <div>
                    <h1 class="home"><a href="/">Home</a></h1>
                </div>
                <div>
                    <h1 class="home"><a href="/">List</a></h1>
                </div>
                <div>
                    <h1><a href="/">Chat</a></h1>
                </div>
                <div class="user">
                    <button type="button" class="btn btn-outline-success">회원가입</button>
                    <button type="button" class="btn btn-outline-success">로그인</button>
                </div>
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
