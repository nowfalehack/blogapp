<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - MyBlog</title>

    <!-- Materialize + Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidenav {
            width: 250px;
            background: linear-gradient(180deg, #1565c0, #1e88e5);
            color: #fff;
            height: 100vh;
            position: fixed;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidenav .logo {
            text-align: center;
            padding: 30px 0;
            font-size: 1.6rem;
            font-weight: 700;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidenav a {
            color: #fff;
            display: flex;
            align-items: center;
            padding: 14px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .sidenav a i {
            margin-right: 18px;
            font-size: 22px;
        }

        .sidenav a:hover,
        .sidenav .active-link {
            background-color: rgba(255, 255, 255, 0.2);
            padding-left: 30px;
        }

        /* Main layout */
        main {
            flex: 1;
            margin-left: 250px;
            display: flex;
            flex-direction: column;
        }

        /* Topbar */
        nav.topbar {
            background: #fff;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .topbar .left-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .page-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1565c0;
        }

        .topbar .right-section {
            display: flex;
            align-items: center;
            gap: 20px;
            position: relative;
        }

        .icon-btn {
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-btn i {
            color: #1565c0;
            font-size: 26px;
        }

        /* Avatar */
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #1565c0;
            overflow: hidden;
            cursor: pointer;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Dropdown Menu */
        .profile-menu {
            display: none;
            position: absolute;
            top: 55px;
            right: 0;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            min-width: 160px;
            z-index: 999;
        }

        .profile-menu a,
        .profile-menu button {
            display: block;
            padding: 12px 18px;
            text-align: left;
            color: #333;
            font-size: 0.95rem;
            background: none;
            border: none;
            width: 100%;
            transition: background 0.3s;
        }

        .profile-menu a:hover,
        .profile-menu button:hover {
            background-color: #f2f4f7;
        }

        /* Search bar */
        .search-bar {
            display: none;
            position: absolute;
            top: 64px;
            right: 20px;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            border-radius: 8px;
            padding: 10px;
        }

        .search-bar input {
            border: none;
            outline: none;
            width: 220px;
            font-size: 0.95rem;
        }

        /* Content */
        .content-area {
            padding: 30px;
            background-color: #f4f6f9;
            flex: 1;
        }

        .card {
            border-radius: 12px;
        }

        .card .card-content {
            padding: 25px;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #888;
            background-color: #fff;
            font-size: 0.9rem;
        }

        /* Stylish input */
        .input-field input[type=text]:focus + label,
        .input-field textarea:focus + label {
            color: #1565c0 !important;
        }

        .input-field input[type=text]:focus,
        .input-field textarea:focus {
            border-bottom: 2px solid #1565c0 !important;
            box-shadow: none;
        }

        .btn {
            border-radius: 8px;
        }

        @media (max-width: 992px) {
            .sidenav {
                display: none;
            }
            main {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    @include('partials.sidebar')

    <main>
        <!-- Topbar -->
        <nav class="topbar">
            <div class="left-section">
                <span class="page-title">@yield('title', 'Dashboard')</span>
            </div>

            <div class="right-section">
                <div class="icon-btn" id="search-toggle">
                    <i class="material-icons">search</i>
                </div>

                <div class="avatar" id="profile-toggle">
@if(Auth::user() && Auth::user()->avatar)
    <img src="{{ Auth::user()->avatar }}" alt="User" class="avatar">
@else
    <!-- SVG User Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="avatar" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M20 21v-2a4 4 0 0 0-3-3.87"></path>
        <path d="M4 21v-2a4 4 0 0 1 3-3.87"></path>
        <circle cx="12" cy="7" r="4"></circle>
    </svg>
@endif                </div>

                <!-- Profile Dropdown -->
                <div class="profile-menu" id="profile-menu">
                    
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>

                <!-- Search Bar -->
                <div class="search-bar" id="search-bar">
                    <input type="text" placeholder="Search..." id="search-input">
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="content-area">
            @yield('content')
        </div>

        <footer>
            &copy; {{ date('Y') }} MyBlog - All rights reserved.
        </footer>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        // Profile dropdown toggle
        document.getElementById('profile-toggle').addEventListener('click', function() {
            const menu = document.getElementById('profile-menu');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });

        // Search toggle
        document.getElementById('search-toggle').addEventListener('click', function() {
            const bar = document.getElementById('search-bar');
            bar.style.display = bar.style.display === 'block' ? 'none' : 'block';
            document.getElementById('search-input').focus();
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            const profileMenu = document.getElementById('profile-menu');
            const profileToggle = document.getElementById('profile-toggle');
            const searchBar = document.getElementById('search-bar');
            const searchToggle = document.getElementById('search-toggle');

            if (!profileToggle.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.style.display = 'none';
            }
            if (!searchToggle.contains(e.target) && !searchBar.contains(e.target)) {
                searchBar.style.display = 'none';
            }
        });
    </script>
</body>
</html>
