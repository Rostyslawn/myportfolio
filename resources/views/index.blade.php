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
        <div class="projects"><a href="#projects">Projects</a></div>
        <div class="get-in-touch-link"><a href="#get-in-touch">Get In Touch</a></div>
    </div>
    <div class="main">
        <div class="left-side">
            <h1>Rostyslav Humeniuk</h1>
            <span class="about-me">
                Intro text: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </span>
            <button class="start"><a href="#get-in-touch">Let's get started</a></button>
        </div>
        <div class="right-side">
            <div class="photo">
                <img src="{{asset('imgs/icon.png')}}" alt="my-photo">
            </div>
        </div>
    </div>
    <div class="worked-with">
        <h2>Worked with:</h2>
        <div class="items">
            <div class="item node-js">Node.js</div>
            <div class="item laravel">Laravel</div>
            <div class="item mysql">Mysql</div>
        </div>
    </div>
</div>
<div class="my-projects">
    <div class="header">
        <h1>My Projects</h1>
        <span>Full stack web developer</span>
    </div>
    <div class="projects">
        <div id="projects" class="project">
            <div class="photo">
                <img src="{{asset('imgs/myphoto.jpg')}}" alt="project-photo">
            </div>
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
        <div class="project">
            <div class="photo">
                <img src="{{asset('imgs/myphoto.jpg')}}" alt="project-photo">
            </div>
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
<div id="get-in-touch" class="get-in-touch">
    <div class="header">
        <h1>Get in touch</h1>
        <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </span>
    </div>
    <div class="inputs">
        <div class="email input">
            <label>
                <span>Email</span>
                <input type="email" placeholder="Please enter your email">
            </label>
        </div>
        <div class="message input">
            <label>
                <span>Message</span>
{{--                <input type="text" placeholder="Enter your message">--}}
            <textarea placeholder="Enter your message"></textarea>
            </label>
        </div>
        <button class="submit">Submit</button>
    </div>
</div>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
