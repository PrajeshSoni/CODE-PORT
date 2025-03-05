<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel 9 User Roles and Permissions Tutorial') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
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

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-fixed-top navbar-expand-md navbar-light">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a></li>
                        @else
                            @if (auth()->check())
                                @if (auth()->user()->isAdministrator())
                                    <li><a class="nav-link" href="{{ route('tag.index') }}">{{ __('messages.tag') }}</a>
                                    </li>
                                    <li><a class="nav-link"
                                            href="{{ route('question.index') }}">{{ __('messages.Questions') }}</a></li>
                                    <li><a class="nav-link"
                                            href="{{ route('reply.show') }}">{{ __('messages.Reply') }}</a></li>
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
                    <li><a class="nav-link" href="{{ route('tag.show') }}">{{ __('messages.tag') }}</a></li>
                    <li><a class="nav-link" href="{{ route('question.show') }}">{{ __('messages.Questions') }}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('users.profile') }}"
                                    class="dropdown-item">{{ __('messages.Profile') }}</a></li>
                            <li> <a class=" dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                    {{ __('messages.Logout') }}
                                </a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
                </li>
                @endif
                @endif
            @endguest
            </ul>
    </div>

    <div class="col-2justify-content-end">
        <strong>Language:</strong>
    </div>
    <div class="col-2">
        <select class="form-control changeLang justify-content-end">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : '' }}>Gujarati</option>
            <option value="hn" {{ session()->get('locale') == 'hn' ? 'selected' : '' }}>Hindi</option>
        </select>
    </div>
    </div>
    </nav>
    </div>

    <div style="margin-top: 50px;">
    </div>
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
    </div>

</body>
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>

</html>
