<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Custom Stylesheet --}}
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

    {{-- Inter Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- Navbar --}}


    <div class="container-fluid user-navbar">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="{{ route('detail.show', ['user' => $user->id]) }}">
                <img src="{{ asset('assets/profile_pic/dascena.png') }}" alt="Company Logo" width="200"
                    height="50" class="d-inline-block align-text-top">



            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('dashboard', ['user' => $user->id]) }}" @class(['nav-link', 'active' => request()->routeIs('dashboard')])>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('detail.show', ['user' => $user->id]) }}" @class(['nav-link', 'active' => request()->routeIs('detail.show')])>
                            My Details
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('user.report') }}" @class(['nav-link', 'active' => request()->routeIs('user.report')])>
                            My Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dataset') }}" @class(['nav-link', 'active' => request()->routeIs('dataset')])>
                            Datasets
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i id="toggle" class="fa-solid fa-gear"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                                <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                                <li><a class="dropdown-item" href="#">Account Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#"><i id="toggle" class="fa-regular fa-bell"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $user->fullname }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img id="profile-pic"
                                    src="{{ $user->profile_picture ? asset('assets/profile_pic/' . $user->profile_picture) : asset('assets/profile_pic/default.jpg') }}"
                                    alt="Profile Picture">
                            </a>
                        </li>



                    </ul>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
    </div>
    @yield('content')



    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
