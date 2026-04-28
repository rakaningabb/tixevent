<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TixEvent</title>
</head>
<body>

<!-- NAVBAR -->
<nav style="background:#222; padding:12px 30px; display:flex; justify-content:space-between; align-items:center;">
    
    <!-- LOGO -->
    <div style="color:white; font-size:18px;">
        <b>TixEvent</b>
    </div>

    <!-- MENU -->
    <div style="display:flex; gap:20px;">
        
        <a href="/" style="
            color: {{ request()->is('/') ? 'yellow' : 'white' }};
            text-decoration:none;
        ">
            Home
        </a>

        <a href="/" style="
            color: {{ request()->is('/') ? 'yellow' : 'white' }};
            text-decoration:none;
        ">
            Event
        </a>

        <a href="/admin/dashboard" style="
            color: {{ request()->is('admin/dashboard') ? 'yellow' : 'white' }};
            text-decoration:none;
        ">
            Dashboard Admin
        </a>

        <a href="/history" style="
            color: {{ request()->is('history') ? 'yellow' : 'white' }};
            text-decoration:none;
        ">
            History
        </a>

        <a href="/login" style="
            color: {{ request()->is('login') ? 'yellow' : 'white' }};
            text-decoration:none;
        ">
            Login
        </a>

    </div>

</nav>

<!-- CONTENT -->
<div style="padding:20px;">
    @yield('content')
</div>

</body>
</html>