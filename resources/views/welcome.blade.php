<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StreamPlay</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Google Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Fredoka";
            }

            body {
                overflow-y: scroll;
            }

            header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                position: fixed;
                height: 55px;
                width: 100%;
                background-color: white;
                box-shadow: 0px 0.5px 10px rgba(117, 117, 117, 0.2);
                z-index: 99;
            }

            #logo {
                height: 100%;
                width: 250px;
                background-color: white;
                font-size: 30px;
                font-weight: bold;
                letter-spacing: 2px;
                line-height: 55px;
                text-align: center;
                user-select: none;
            }

            #logo-1 {
                color: #70cdda;
            }

            #logo-2 {
                color: #f7ab6e;
            }

            #search-bar {
                display: flex;
                height: 70%;
                width: 500px;
            }

            #search-input {
                height: 100%;
                width: 100%;
                padding: 0 35px 0 10px;
                border: 1px solid #757575;
                border-radius: 10px;
                font-size: 15px;
            }

            #symbol-icon {
                position: relative;
                right: 32px;
                top: 6px;
                color: #757575;
            }

            #nav-bar {
                display: flex;
                align-items: center;
                gap: 20px;
                height: 100%;
                width: 300px;
            }

            .nav-bar-item {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 5px;
                height: 45px;
                width: 120px;
                border-radius: 10px;
                font-size: 15px;
                color: #757575;
                text-decoration: none;
                user-select: none;
                transition: all 0.25s;
            }

            .nav-bar-item:hover {
                color: #757575;
                background-color: rgba(112, 205, 218, 0.4);
            }

            .nav-bar-item:active {
                color: #ffffff;
                background-color: #70cdda;
                transition: none;
            }

            .icon-font {
                font-size: 35px;
            }

            #menu-sidebar {
                justify-content: center;
                position: fixed;
                top: 55px;
                height: 100%;
                width: 240px;
                overflow-y: scroll;
                z-index: 98;
            }

            .side-navbar {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 5px;
                width: 100%;
                margin: 20px 0px;
            }

            .side-navbar-item {
                display: flex;
                align-items: center;
                justify-content: start;
                gap: 10px;
                height: 40px;
                width: 200px;
                padding-left: 10px;
                border-radius: 10px;
                font-size: 15px;
                color: #757575;
                text-decoration: none;
                user-select: none;
                transition: all 0.25s;
            }

            .side-navbar-item:hover {
                color: #757575;
                background-color: rgba(247, 171, 110, 0.4);
            }

            .side-navbar-item:active {
                color: #ffffff;
                background-color: #f7ab6e;
                transition: none;
            }

            .sub-item:hover {
                color: #757575;
                background-color: rgba(112, 205, 218, 0.4);
            }

            .sub-item:active {
                color: #ffffff;
                background-color: #70cdda;
                transition: none;
            }

            main {
                display: flex;
                flex-direction: column;
                align-items: center;
                position: absolute;
                top: 55px;
                left: 240px;
                height: 2000px;
                width: calc(100% - 240px);
            }

            main section {
                height: 440px;
                width: 100%;
                padding: 20px 30px;
            }

            h4 {
                font-size: 25px;
            }

            #categories {
                display: flex;
                gap: 5px;
                margin: 20px 0px;
                overflow: hidden;
            }

            .category {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: start;
                height: 340px;
                width: 160px;
                padding: 10px 10px 0px 10px;
                border-radius: 10px;
                color: #ffffff;
                text-decoration: none;
                transition: all 0.25s;
            }

            .category:hover {
                color: #70cdda;
                background-color: #ffffff;
            }

            .category-img {
                border: 5px solid #ffffff;
                border-radius: 10px;
                overflow: hidden;
            }

            .category h6 {
                margin: 10px auto;
                font-size: 17px;
                font-weight: 700;
                letter-spacing: 2px;
                text-align: center;
            }

            .category p {
                margin: 10px auto;
                font-size: 14px;
                text-align: center;
            }

            #upload-container {
                display: flex;
                position: fixed;
                top: 10%;
                left: 7.5%;
                height: 80%;
                width: 85%;
                border-radius: 10px;
                overflow: hidden;
                z-index: 100;
                transform: scale(0);
                transition: 0.25s ease;
            }

            #upload-container.active-popup {
                transform: scale(1);
            }

            #video-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-evenly;
                height: 100%;
                width: 70%;
                padding: 10px 20px;
            }

            #video-mask {
                height: 80%;
                width: 100%;
                border-radius: 10px;
                overflow: hidden;
            }

            
            #video-section video {
                height: 100%;
                width: 100%;
            }

            #video-interactions {
                display: flex;
                justify-content: space-between;
                width: 100%;
                margin-top: 10px;
            }

            .video-interaction-section {
                display: flex;
                align-items: center;
                gap: 10px;
                height: 100%;
                width: 240px;
            }

            .video-interaction {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                height: 125%;
                width: 120px;
                border: 1px solid #ffffff;
                border-radius: 10px;
                font-size: 15px;
                color: #ffffff;
                text-decoration: none;
                user-select: none;
                transition: all 0.25s;
            }

            .video-interaction:hover {
                color: #ffffff;
                background-color: rgba(255, 255, 255, 0.4);
            }

            .video-interaction:active {
                color: #f7ab6e;
                background-color: #ffffff;
                transition: none;
            }

            #comment-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-evenly;
                height: 100%;
                width: 30%;
                padding: 0px 10px;
            }

            #title-and-close-button {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
            }

            #close-button {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 40px;
                width: 40px;
                border-radius: 10px;
                cursor: pointer;
                user-select: none;
                transition: all 0.25s;
            }

            #close-button:hover {
                color: #ffffff;
                background-color: rgba(255, 255, 255, 0.4);
            }

            #close-button:active {
                color: #70cdda;
                background-color: #ffffff;
                transition: none;
            }

            #comments {
                height: 80%;
                width: 100%;
                border-radius: 10px;
                background-color: red;
            }

            .green-section {
                color: #ffffff;
                background-color: #70cdda;
            }
            .orange-section {
                color: #ffffff;
                background-color: #f7ab6e;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
        <header>
            <div id="logo">
                <span id="logo-1">Stream</span><span id="logo-2">Play</span>
            </div>
            <div id="search-bar">
                <input type="search" id="search-input" name="search-bar" placeholder="What do you want to watch?">
                <span id="symbol-icon" class="material-symbols-outlined">search</span>
            </div>
            <nav id="nav-bar">
                <a id="upload-button" href="#" class="nav-bar-item">
                    <span class="material-symbols-outlined icon-font">add_box</span><span>Upload</span>
                </a>
                <a href="#" class="nav-bar-item">
                    <span class="material-symbols-outlined icon-font">video_library</span><span>Playlist</span>
                </a>
            </nav>
        </header>

        <section id="upload-container">
            <div id="video-section" class="orange-section">
                <h4>Video Title</h4>
                <div id="video-mask">
                    <video controls>
                        <source src="" type="video/mp4">
                        <source src="" type="video/ogg">
                    Your browser does not support the video format.
                    </video>
                </div>
                <div id="video-interactions">
                    <div class="video-interaction-section">
                        <a href="#" class="video-interaction">
                            <span class="material-symbols-outlined">thumb_up</span><span>Like</span>
                        </a>
                        <a href="#" class="video-interaction">
                            <span class="material-symbols-outlined">thumb_down</span><span>Dislike</span>
                        </a>
                    </div>
                    <div class="video-interaction-section">
                        <a href="#" class="video-interaction">
                            <span class="material-symbols-outlined">share</span><span>Share</span>
                        </a>
                        <a href="#" class="video-interaction">
                            <span class="material-symbols-outlined">report</span><span>Report</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="comment-section" class="green-section">
                <div id="title-and-close-button">
                    <h4>Comments</h4>
                    <div id="close-button">
                        <span class="material-symbols-outlined icon-font">close</span>
                    </div>
                </div>
                <div id="comments"></div>
            </div>
        </section>

        <section id="menu-sidebar">
            <div class="side-navbar">
                <a href="#" class="side-navbar-item">
                    <span class="material-symbols-outlined">home</span><span>Home</span>
                </a>
                <a href="#" class="side-navbar-item">
                    <span class="material-symbols-outlined">trending_up</span><span>Trending</span>
                </a>
                <a href="#" class="side-navbar-item">
                    <span class="material-symbols-outlined">history</span><span>History</span>
                </a>
            </div>

            <hr>

            <div class="side-navbar">
                <h6 id="channel-title">Subscriptions</h6>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Ritchie Ridanko</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Farhan Fatur Rozzi</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Muhammad Rayyan</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Farhan H Ismail</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Regen Regianto</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Ritchie Ridanko</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Farhan Fatur Rozzi</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Muhammad Rayyan</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Farhan H Ismail</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Regen Regianto</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Ritchie Ridanko</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Farhan Fatur Rozzi</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Muhammad Rayyan</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Farhan H Ismail</span>
                </a>
                <a href="#" class="side-navbar-item sub-item">
                    <span class="material-symbols-outlined">account_circle</span><span>Regen Regianto</span>
                </a>
            </div>
        </section>

        <section id="team-sidebar"></section>

        <main>
            <section>
                <h4>Recently uploaded</h4>
            </section>
            <section class="green-section">
                <h4>Browse by categories</h4>
                <div id="categories">
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/7/140/225" alt="trending news">
                        </div>
                        <h6>Trending News</h6>
                        <p>The most up-to-date news curated for you</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/20/140/225" alt="education">
                        </div>
                        <h6>Education</h6>
                        <p>Problems with your college assignment?</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/133/140/225" alt="automotive">
                        </div>
                        <h6>Automotive</h6>
                        <p>New inspirations to revamp your cars</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/128/140/225" alt="travel">
                        </div>
                        <h6>Travel</h6>
                        <p>Discover the new hidden gems</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/152/140/225" alt="nature">
                        </div>
                        <h6>Nature</h6>
                        <p>Fascinating videos to cure your depression</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/26/140/225" alt="technologies">
                        </div>
                        <h6>Technologies</h6>
                        <p>New on the latest state-of-the-art tech</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/26/140/225" alt="music">
                        </div>
                        <h6>Music</h6>
                        <p>Listen to billboard top 100</p>
                    </a>
                    <a href="#" class="category">
                        <div class="category-img">
                            <img src="https://picsum.photos/id/26/140/225" alt="viral videos">
                        </div>
                        <h6>Viral</h6>
                        <p>It's time to react to viral videos</p>
                    </a>
                </div>
            </section>
            <section>
                <h4>Videos</h4>
            </section>
            <section class="orange-section">
                <h4>Watch them go live!</h4>
            </section>
        </main>

        <footer>

        </footer>

        <script>
            const container_upload = document.getElementById("upload-container");
            const button_upload = document.getElementById("upload-button");
            const button_close = document.getElementById("close-button");

            button_upload.addEventListener('click', () => {
                container_upload.classList.add('active-popup');
            });

            button_close.addEventListener('click', () => {
                container_upload.classList.remove('active-popup');
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>
</html>
