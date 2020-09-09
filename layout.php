<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDan Board</title>
    <link rel="stylesheet" href="estilo/estilo.css?timestamp=<?= strtotime('now') ?>">
</head>
<body>
    <header >
        <h1>GDan</h1>
        <h2>Board</h2>
        
        <div id="log">
            <h3><a href="#">Login</a></h3>
            <h4><a href="#">Menu</a></h4>
        </div>
        <div id="cadastro">
            <h3><a href="#">Cadastro</a></h3>
            <h4><a href="#">Suporte</a></h4>
        </div>
    </header>
    <div id="rank">
        <h1>Rank</h1>
        <p>1°Fabiano<br/> 2°Daniel<br/> 3°Lucas<br/> 4°Claudio<br/></p>
    </div>
    <?php include_once PAGE_FILE_PHP ?>
</body>
</html>