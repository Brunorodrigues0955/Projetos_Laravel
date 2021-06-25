<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

    <title></title>
</head>
<body>
<div class="content">
    <header>
        <nav>
            <ul>
                <li><a href="/"> Contato </a></li>
                <li><a href="/usuarios-view"> Usuários </a></li>
            <ul>
        </nav>
    </header>
</div>

    @yield('content')
    <footer class="footer">
        <p> Todos os Direitos Reservados 2021.</p>
    </footer>
</body>
</html>