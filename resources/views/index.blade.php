<!doctype html>
<html lang="en">
<head>
    @vite("public/scss/index.scss")
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('imgs/icon.png')}}">
    <title>Rostyslaw</title>
</head>
<body>
<div class="nav">
    <div class="name">
        Rostyslav Humeniuk
    </div>
    <div class="items">
        <a href="{{route('index')}}" class="item home">Home</a>
        <a href="#projects" class="item home">My projects</a>
        <a class="item about">About me</a>
        <a class="item contact">Contact</a>
    </div>
</div>
<div class="main">
    <div class="container">
        <h1>My Portfolio</h1>
        <div class="containerAboutMe">
            <div class="aboutMe"></div>
            <span class="blinking-cursor"></span></div>
    </div>
</div>
<div class="projects">
    <h1 id="projects">My Projects</h1>
    <div class="container">
        <div class="project project-1">
            <div class="image">
                <img alt="photo" src="{{asset('imgs/myphoto.jpg')}}">
            </div>
            <div class="aboutProject">
                <h2>Project 1</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eй commodo consequat. Duis aute irure dolor in reprehendent in voluptate velit</span>
            </div>
        </div>
        <div class="project project-2">
            <div class="image">
                <img alt="photo" src="{{asset('imgs/myphoto.jpg')}}">
            </div>
            <div class="aboutProject">
                <h2>Project 2</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eй commodo consequat. Duis aute irure dolor in reprehendent in voluptate velit</span>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
