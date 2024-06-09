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
        <div class="item home">Home</div>
        <div class="item about">About me</div>
        <div class="item contact">Contact</div>
    </div>
</div>
<div class="main">
    <div class="container">
        <h1>My Portfolio</h1>
        <div class="containerAboutMe"><div class="aboutMe"></div><span class="blinking-cursor"></span></div>
    </div>
</div>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
