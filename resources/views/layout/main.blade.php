<?php
?>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Products</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/products">
                        Stock
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('ProductController@list') }}">List</a> </li>
                    <li><a href="{{ action('ProductController@addform') }}">New</a> </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <p>© This is a footer </p>
        </footer>
    </div>
</body>
</html>
