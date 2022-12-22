<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="geral.css">
    <title>@yield('title')</title>
</head>
<body>
    
    <header> 
        <a href="home.html">
            <h1>SIT</h1>
            <p>Sistema Interno de Talentos</p>
        </a>
    </header>
    @yield('content');
    <footer>
        <h4>SIT</h4>
        <h4>Sistema Interno De Talentos</h4>
    </footer>
</body>
</html>