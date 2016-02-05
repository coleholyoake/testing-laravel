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
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                box-sizing: border-box;
            }
            nav {
                padding: 30px;
            }
            nav ul, nav ul li {
                list-style: none;
                display: inline;
                margin: 10px;
            }
            ul {
                padding-left: 0px;
            }
            a {
                text-decoration: none;
            }
            footer {
                /*background-color: #f3f3f3;*/
                padding: 10px 50px;
            }
            .content {
                padding: 50px;
            }
            label {
                display: block;
            }
            input, textarea {
                margin-bottom: 20px;
            }
            span {
                color: red;
            }

        </style>
    </head>
    <body>
        <nav>
            <img src="http://placehold.it/80x40">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        
        @yield('content')


        <footer>
        <hr>
            <p><small>&copy; Copyright 2016</small></p>
        </footer>
    </body>
</html>