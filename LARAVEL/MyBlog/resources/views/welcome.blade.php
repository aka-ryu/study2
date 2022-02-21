<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{  url('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Ryu's Development Log</title>
    </head>
    <body>
        
        <div class="container">

            <div class="main">
                <a href="/">Ryu's Development Log</a>
            </div>

            <div class="page">
            
                <div class="left">
                    <div class="profile">
                        <img class="profile-img" src="{{ url('ryu.jpg') }}">
                        <div class="profile-introduce">
                            <div class="profile-title">
                                <h2>aka-ryu</h2>
                            </div>
                            <div class="profile-content">
                                <p>
                                    웹 개발자를 꿈꾸며<br> 
                                    공부,코딩 과정 등을<br>
                                    정리해놓는 블로그 입니다.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="menu">
                        <div class="menu-title" id="menu-title" onclick="CategoryOpenClose()">
                            카테고리 <span id="category-toggle" class="category-toggle">접기</span>
                        </div>
                        <div class="menu-content">
                            <ul id="category-content" class="category-content">
                                <li>예제1</li>
                                <li>예제1</li>
                                <li>예제1</li>
                            </ul>
                        </div>
                        <a href="/new" class="newpost">글쓰기</a>
                        <a href="/admin" class="newpost">관리</a>
                    </div>
                </div>

                <div class="content">
                    <div class="content-menu">
                        <div class="content-menu-title">
                            <strong>전체목록</strong> n개의 글
                            <span id="content-menu-list-toggle" class="content-menu-list-toggle" onclick="ListOpenClose()">목록닫기</span>
                        </div>
                        <div class="content-menu-list" id="content-menu-list">
                            <ul>
                                <li>예시</li>
                                <li>예시</li>
                                <li>예시</li>
                                <li>예시</li>
                                <li>예시</li>
                            </ul>
                            페이지네이션 처리 필요
                        </div>
                    </div>
                    <div class="content-detail">
                        <h1>제목제목제목제목제목</h1>
                        <p>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br>내용<br></p>
                    </div>
                </div>
            </div>

        <div>

        <script>
            
            function CategoryOpenClose() {
                if(document.getElementById('category-content').style.display === 'block') {
                    document.getElementById('category-content').style.display = 'none';
                    document.getElementById('category-toggle').textContent = '펼치기';
                } else {
                    document.getElementById('category-content').style.display = 'block';
                    document.getElementById('category-toggle').textContent = '접기';
                }
            }

            function ListOpenClose() {
                if(document.getElementById('content-menu-list').style.display === 'block') {
                    document.getElementById('content-menu-list').style.display = 'none';
                    document.getElementById('content-menu-list-toggle').textContent = '목록열기';
                } else {
                    document.getElementById('content-menu-list').style.display = 'block';
                    document.getElementById('content-menu-list-toggle').textContent = '목록닫기';
                }
            }
        </script>
    </body>
</html>
