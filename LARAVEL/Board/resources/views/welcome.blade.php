<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Board</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
                    <h1 class="home"><a href="/list">List</a></h1>
                </div>
                <div>
                    <h1><a href="/">Chat</a></h1>
                </div>
                <div class="user">
                    <button>회원가입</button>
                    <button>로그인</button>
                </div>
            </div>

            <div class="content">
                <h2>List Page</h2>
                <div class="card" style="width: 80%;">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
