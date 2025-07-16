<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <title>Welcome</title>


        <style>
        body{

            background-image: url('https://i.pinimg.com/736x/bb/bd/32/bbbd324f2f8daa00a86dc1f2f60ccac6.jpg');
            background-size: cover;
        }
        .navbar {
            overflow: hidden;
            background-color: transparent;
            position: fixed; /* Set the navbar to fixed position */
            top: 0; /* Position the navbar at the top of the page */
            right: 0;
            width: 100%; /* Full width */
        }

        /* Links inside the navbar */
        .navbar a {
        
        float: right;
        display: block;
        text-align: center;
        padding: 20px 40px;
        text-decoration: none;
        color: black;
        }

        /* Change background on mouse-over */
        .navbar a:hover {
        background: #ddd;
        color: white;
        }

        .navbar h1 {
            float: left;
            left : 10%;
            margin-top: 0;
            padding-top: 10px;
            width: 50px;
            height: 50px;
            margin-left: 20px;
        }
        /* Main content */
        .maincontent {
            padding: 16px;
            margin-top: 30px;
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 10px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .maincontent h2 {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-size: 52px;
            font-weight: 600;
            text-transform: uppercase;
            span {
                display: inline-block;
                opacity: 0;
                transform: translateY(20px) rotate(90deg);
                transform-origin: left;
                animation: in 1.5s forwards;
                @for $i from 1 to 8 {
                &:nth-child(#{$i}) { 
                        animation-delay: $i * 0.1s;
                    }
                }
            }
        }

        @keyframes in {
        0% { 
                opacity: 0;
                transform: translateY(50px) rotate(90deg);
            }
            100% { 
                opacity: 1;
                transform: translateY(0) rotate(0);
            }
        }
        .maincontent p {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 60%;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            line-height: 1.5;
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        </style>
    </head>

    <body>

        <div class="navbar">
        <h1>M</h1>

        @if (Route::has('login'))
                            <navbar class="pt-20">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>


                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </navbar>
                        @endif

        </div>
        <div class="maincontent">
            <h2 class="mt-20">
                <span>W</span>
                <span>E</span>
                <span>L</span>
                <span>C</span>
                <span>O</span>
                <span>M</span>
                <span>E</span>
            </h2>
            <p>Mentik is Menfes STIKOM. This website provides services for voicing complaints, confessions, and announcements. Inspired by the social media page Twitter.
            College students, lecturers, employees can express their thoughts on Mentik.</p>
        </div>
        <footer class="footer footer-center bg-base-300 text-base-content p-4">
            <aside>
                <p>Copyright © 2024 - All right reserved by KKR</p>
            </aside>
        </footer>
    </body>
</html>
<title>Welcome</title>


