<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Navbar with Logo</title>
    <!-- Correct way to include CSS file -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Custom Navbar Colors */
        .navbar {
            background-color: #007bff; /* Background color (blue) */
        }
        .navbar-light .navbar-nav .nav-link {
            color: #fff; /* Text color (white) */
        }
        /* Navbar link hover effect */
        .navbar-light .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Hover text color (lighter white) */
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover */
            border-radius: 5px; /* Rounded corners on hover */
            transition: all 0.3s ease; /* Smooth transition */
        }
        /* Active link color */
        .navbar-light .navbar-nav .nav-item.active .nav-link {
            color: #ffcc00; /* Active link color (yellow) */
        }
        
        /* Dropdown menu items hover effect */
        .navbar .dropdown-menu .dropdown-item {
            color: #007bff; /* Default text color for dropdown items */
        }

        .navbar .dropdown-menu .dropdown-item:hover {
            background-color: #007bff; /* Background color for dropdown item on hover */
            color: #fff; /* Text color for dropdown item on hover */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
        }

        /* Search Bar Hover Effect */
        .navbar .form-control {
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .navbar .form-control:hover {
            box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.5); /* Hover shadow effect */
            border-color: #ffcc00; /* Change border on hover */
        }

        .navbar .form-control:focus {
            box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.8); /* Focus shadow effect */
            border-color: #ffcc00; /* Change border on focus */
        }

        /* Navbar Toggler for Mobile Devices */
        @media (max-width: 991px) {
            .navbar .form-control {
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }

        /* Logo Image Size */
        .navbar-brand img {
            height: 40px; /* Adjust logo height */
            width: auto; /* Keep the aspect ratio of the logo */
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo with Image -->
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo.jpeg')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <!-- Dropdown for Courses -->
                    <li class="nav-item dropdown {{ Request::is('courses/*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="/courses" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url ('web_development')}}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{ url ('data_science')}}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{ url ('o_level')}}">O level</a></li>
                        <li><a class="dropdown-item" href="/courses/graphic-design">A level</a></li>
                        <li><a class="dropdown-item" href="/courses/graphic-design">C level</a></li>
                        <li><a class="dropdown-item" href="/courses/graphic-design">BCA</a>
                        
                             <!-- Nested MCA item under BCA -->
                        <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/courses/graphic-design">MCA</a></li>
                </ul>
            </li>
        </ul>
    </li>
        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
                
            <!-- Search Bar Section -->
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>

                </form>
                
            </div>
            <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}">Signup</a>
                    </li>
            </ul>
    </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 