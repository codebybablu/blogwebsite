<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <style>
        body { font-family: Arial; margin: 0; background: #f5f5f5; }

        .navbar {
            background: #222;
            color: #fff;
            padding: 15px;
        }

        .navbar a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .card {
            background: #fff;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin: 0;
        }

        .card a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/">Home</a>
    <a href="/blogs">Blogs</a>

    <?php if(session()->get('logged_in')): ?>
        <a href="/dashboard">Dashboard</a>
        <a href="/logout">Logout</a>
    <?php else: ?>
        <a href="/login">Login</a>
    <?php endif; ?>
</div>

<div class="container">
    <?= $this->renderSection('content') ?>
</div>

</body>
</html>