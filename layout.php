<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDan Board</title>
    <link rel="stylesheet" href="/css/font-awesome.min?timestamp=<?= strtotime('now') ?>">
    <link rel="stylesheet" href="/css/bootstrap.min.css?timestamp=<?= strtotime('now') ?>">
    <link rel="stylesheet" href="/css/estilo.css?timestamp=<?= strtotime('now') ?>">
</head>
<body>
    <div class="principal">
        <header>
            <div class="logo">
                <h1>GDan</h1>
                <h2>Board</h2>
            </div>
            <nav id="Menu-Principal">
                <ul>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Inscreva-se</a></li>
                    <li><a href="#">Suporte</a></li>
                </ul>
            </nav>
        </header>
        <sidebar class="rank">
            <h1>Rank</h1>
            <p>1°Fabiano<br/> 2°Daniel<br/> 3°Lucas<br/> 4°Claudio<br/></p>
        </sidebar>
            <main>
                <?php include_once PAGE_FILE_PHP ?>
            </main>
        <footer>
            <nav class="rodape">
                <h4>Equipe</h4>
                <h4><a href="#">GDAN BOARD</a></h4>
                <p><a href="#">CONTATO</a></p>
            </nav>
            <script type="text/javascript" src="/js/jquery.min.js"></script>
            <script type="text/javascript" src="/js/jquery.slim.min.js"></script>
            <script type="text/javascript" src="/js/popper.min.js"></script>
            <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        </footer>
    </div>   
</body>
</html>