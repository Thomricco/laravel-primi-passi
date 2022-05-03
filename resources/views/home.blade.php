<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>

    <style>
        body {
                background-color: #ccc;
                color: #636b6f;
                margin: 0 auto;
                text-align: center;
            }

            nav {
                height: 70px;
                margin: 0 auto
                background-color: #636b6f;
                border: 1px black solid;
            }

            a {
                text-decoration: none;
                color: #636b6f
            }

            h1 {

            }
    </style>
</head>
<body>

    <nav>
        <a href="{{route ('contatti')}}">CONTATTI</a>
        <a href="{{route ('home')}}">HOME</a>

    </nav>

    <main>
        <h1>LARAVEL PRIMI PASSI</h1>
    </main>

    <footer>

    </footer>
    
</body>
</html>