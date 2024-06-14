<!doctype html>
<html lang="en">
<head>
    @vite("public/scss/index.scss")
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('imgs/icon.png')}}">
    <title>Portfolio</title>
</head>
<body>
<div class="main-info">
    <div class="nav">
        <div class="home"><a href="{{route("index")}}">Home</a></div>
        <div class="projects"><a>Projects</a></div>
        <div class="reviews"><a>Reviews</a></div>
        <div class="getintouch"><a>Get In Touch</a></div>
    </div>
    <div class="main">
        <div class="left-side">
            <h1>Rostyslav Humeniuk</h1>
            <span class="about-me">
                Intro text: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </span>
            <button class="start">Let's get started</button>
        </div>
        <div class="right-side">
            <div class="photo">
                <img src="{{asset('imgs/icon.png')}}" alt="my-photo">
            </div>
        </div>
    </div>
</div>
<div class="my-projects">
    <div class="header">
        <h1>My Projects</h1>
        <span>Full stack web developer</span>
    </div>
    <div class="projects">
        <div class="project">
            <div class="left-side">
                <h2 class="project-name">Prom</h2>
                <span class="info">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna.
                </span>
                <button class="link">
                    <a>
                        View
                    </a>
                </button>
            </div>
            <div class="photo">
                <img src="{{asset('imgs/myphoto.jpg')}}" alt="project-photo">
            </div>
        </div>
        <div class="project">
            <div class="photo">
                <img src="{{asset('imgs/myphoto.jpg')}}" alt="project-photo">
            </div>
            <div class="left-side">
                <h2 class="project-name">Sanatate</h2>
                <span class="info">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna.
                </span>
                <button class="link">
                    <a>
                        View
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
