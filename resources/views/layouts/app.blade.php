<!DOCTYPE html>
<html>
<head>
    <title>TixEvent</title>
    <style>
        body { font-family: Arial; margin:0; }

        .navbar {
            display:flex;
            justify-content:space-between;
            background:#222;
            color:white;
            padding:10px 20px;
        }

        .navbar a {
            color:white;
            margin-left:10px;
            text-decoration:none;
        }

        .container {
            padding:20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>
            <b>TixEvent</b>
        </div>

        <div>
            <a href="/">Home</a>
            <a href="/eventmanage">Event</a>
            <a href="/dashboard">Dashboard</a>
            <a href="/history">History</a>
            <a href="/login">Login</a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>