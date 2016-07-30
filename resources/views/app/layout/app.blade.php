<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="js/app.js"></script>


    @section('styles')
        <link href="css/app.css" rel="stylesheet" />
        @show

</head>
<body class="{{ isset($bodyClass) ? $bodyClass : '' }}">
<navigation inline-template>
    <header>
        <div class="header">
            <a href="{{ url('/') }}">
                @if(isset($bodyClass) && $bodyClass != 'page-homepage')
                    <img class="mobile-header-img" src="images/laravel-training-logo-white.png" />
                @else
                    <img class="mobile-header-img" src="images/laravel-training-logo.png" />
                @endif
            </a>

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <div class="overlay-content">
                    <a href="{{ url('/') }}">Home.</a>
                    <a href="{{ url('who-we-are') }}">Who We Are.</a>
                    <a href="{{ url('courses') }}">Courses.</a>
                    <a href="{{ url('faq') }}">FAQs.</a>
                    <a href="{{ url('contact') }}">Contact Us.</a>
                    </ul>
                </div>
            </div>

            <span class="menu" onclick="openNav()">&#9776;</span>

            <script>
                function openNav() {
                    document.getElementById("myNav").style.height = "100%";
                }

                function closeNav() {
                    document.getElementById("myNav").style.height = "0%";
                }
            </script>


            <nav class="full-screen-nav">
                <ul>
                    <li><a href="{{ url('who-we-are') }}">Who We Are</a></li>
                    <li><a href="{{ url('courses') }}">Courses</a></li>
                    <li>
                        <a href="{{ url('/') }}">
                            @if(isset($bodyClass) && $bodyClass != 'page-homepage')
                                <img src="images/laravel-training-logo-full-white.png"/>
                            @else
                                <img src="images/laravel-training-logo-full.png"/>
                            @endif
                        </a>
                    </li>
                    <li><a href="{{ url('faq') }}">FAQs</a></li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
            </nav>

                </div>
            </div>
        </div>

        </div>
    </header>
</navigation>
<main>
    @yield('body')
</main>
<footer>
    <p>Netsells</p>
</footer>


</body>
</html>