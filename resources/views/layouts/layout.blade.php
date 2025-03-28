<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Code Port</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style-starter.css') }}">
    <link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>


    <section class="w3l-banner-slider-main w3l-inner-page-main">
        <div class="breadcrumb-infhny">
            <header class="top-headerhny">
                <!--/nav-->
                <nav class="navbar navbar-expand-lg navbar-light fill">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <label class="lohny"><span class="fa fa-graduation-cap"
                                    aria-hidden="true"></span>Code</label>Port</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-lg-auto ml-auto">

                                @guest
                                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                                    </li>
                                @else
                                    @if (auth()->check())
                                        @if (auth()->user()->isAdministrator())
                                            <li><a href="{{ route('home') }}" class="nav-link">home</a></li>
                                            <li><a class="nav-link"
                                                    href="{{ route('tag.index') }}">{{ __('messages.tag') }}</a></li>
                                            <li><a class="nav-link"
                                                    href="{{ route('question.index') }}">{{ __('messages.Questions') }}</a>
                                            </li>
                                            <li><a class="nav-link"
                                                    href="{{ route('reply.show') }}">{{ __('messages.Reply') }}</a></li>
                                            <li><a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown">
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('users.index') }}"
                                                            class="dropdown-item">{{ __('messages.Users') }}</a></li>
                                                    <li><a href=" {{ route('roles.index') }}"
                                                            class="dropdown-item">{{ __('messages.Roles') }}</a></li>
                                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a></li>
                                                </ul>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                            </div>
                            </li>
                        @else
                            <li><a href="{{ route('home') }}" class="nav-link">home</a></li>
                            <li><a href="{{ route('code.about') }}" class="nav-link">About</a></li>
                            <li><a class="nav-link" href="{{ route('tag.show') }}">{{ __('messages.tag') }}</a></li>
                            <li><a class="nav-link" href="{{ route('question.show') }}">{{ __('messages.Questions') }}</a>
                            <li><a href="{{ route('code.contact') }}" class="nav-link">contact</a></li>
                            <li><a href="{{ route('feedback.create') }}" class="nav-link">feedback</a></li>
                            </li>
                            <li class="nav-item dropdown">
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('users.profile') }}"
                                            class="dropdown-item">{{ __('messages.Profile') }}</a></li>
                            </li>
                            <li> <a class=" dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                    {{ __('messages.Logout') }}
                                </a>
                            </li>


                            </ul>
                            <li class="nav-item dropdown">
                                <select class="form-control changeLang nav-link dropdown-toggle" role="button"
                                    data-bs-toggle="dropdown">
                                    <option class=" dropdown-item" value="en"
                                        {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option class=" dropdown-item" value="gu"
                                        {{ session()->get('locale') == 'gu' ? 'selected' : '' }}>Gujarati</option>
                                    <option class=" dropdown-item" value="hn"
                                        {{ session()->get('locale') == 'hn' ? 'selected' : '' }}>Hindi</option>
                                </select>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                        </li>
                        @endif
                        @endif
                    @endguest

                    </ul>
        </div>
        <form action="#" method="post" class="d-flex searchhny-form">
            <input type="search" placeholder="Search Here..." required="required">
            <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>
        </div>
        </nav>
        </header>
        </div>
    </section>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- footer -->
    <section class="w3l-footer-16">
        <div class="w3l-footer-16-main py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="row">
                            <div class="col-md-8 column">

                                <a class="logo-2" href="index.html" style="text-decoration: none;">
                                    <label class="lohny-2"><span class="fa fa-graduation-cap"
                                            aria-hidden="true"></span>Code</label>Port</a>

                                <div class="ad-text-inf">
                                    <p><span class="color-hny">Address :</span> Phase 3, Wadhwan, Surendranagar,
                                        Gujarat 363001</p>
                                </div>
                                <div class="ad-text-inf">
                                    <p><span class="color-hny">Email :</span> <a style="text-decoration: none;"
                                            href="mailto:info@example.com">Codeport@gmail.com</a></p>
                                </div>
                                <div class="ad-text-inf">
                                    <p><span class="color-hny">Phone :</span> <a style="text-decoration: none;"
                                            href="tel:+142 5897555">+91 9054145123</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 column">
                                <h3>Pages</h3>
                                <ul class="footer-gd-16">
                                    @guest
                                        <li><a class="nav-link"
                                                href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                                        <li><a class="nav-link"
                                                href="{{ route('register') }}">{{ __('messages.Register') }}</a></li>
                                    @else
                                        <li><a style="text-decoration: none;" href="{{ route('home') }}">Home</a></li>
                                        <li><a style="text-decoration: none;" href="{{ route('code.about') }}">About
                                                Us</a></li>
                                        <li><a style="text-decoration: none;" href="{{ route('tag.show') }}">Tag</a></li>
                                        <li><a style="text-decoration: none;"
                                                href="{{ route('question.show') }}">Qustion</a></li>
                                        <li><a style="text-decoration: none;" href="{{ route('code.contact') }}">Contact
                                                Us</a></li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 column column3 mt-lg-0 mt-4">
                        <h3>Articles</h3>
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li class="">
                                <div class="row">
                                    <a style="text-decoration: none;" class="col-md-5 col-4" href="#">

                                        <!-- helloooooooooooooooooooooooooo -->
                                        <img class="rounded img-fluid img-responsive" src="{{ asset('img/bg.jpg') }}"
                                            alt="image">
                                    </a>
                                    <div class="col pl-0">
                                        <a style="text-decoration: none;" class="footer-small-text"
                                            href="#">Lorem ipsum dolor sit amet adipiscin elit</a>
                                        <div class="text-sub-small">Feb 20th</div>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-md-0 mt-2">
                                <div class="row my-2 my-md-3">
                                    <a class="col-md-5 col-4" href="#">
                                        <img class="rounded img-fluid img-responsive"
                                            src="{{ asset('img/bg2.jpg') }}" alt="image">
                                    </a>
                                    <div class="col pl-0">
                                        <a style="text-decoration: none;" class="footer-small-text"
                                            href="#">Cras at nunc sagittis, suscipit dolor</a>
                                        <div class="text-sub-small">Feb 22nd</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 column column4 mt-lg-0 mt-4">
                        <h3>Newsletter </h3>
                        <div class="end-column">
                            <h4>Subscribe Here Now</h4>
                            <form action="#" class="subscribe" method="post">
                                <input type="email" placeholder="Email Address" required="">
                                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            </form>
                            <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
                    <div class="columns text-lg-left text-center">
                        <p>© 2020 Eduline. All rights reserved.
                        </p>
                    </div>
                    <div class="columns-2 mt-md-0 mt-3">
                        <ul class="social">
                            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
    </section>
    <!-- //footer -->

</body>

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>

<script type="text/javascript">
    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/bootstrap.min.js"></script>
