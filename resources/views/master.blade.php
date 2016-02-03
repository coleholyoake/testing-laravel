<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 20px;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                box-sizing: border-box;
            }

            ul, li {
                list-style: none;
                display: inline;
                margin: 20px;
            }

            a {
                text-decoration: none;
            }

        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/products">Product</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        
        @yield('content')

    </body>
</html>