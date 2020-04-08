<?php
include 'dados.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchening</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <img src="../images/logo.jpg" alt="foto frango grelhado">
        <nav>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">quem somos</a></li>
                <li><a href="#">serviços</a></li>
                <li><a href="#">portifólio</a></li>
                <li><a href="#">lojas</a></li>
                <li><a href="#">contato</a></li>
            </ul>
        </nav>
        <section class="banner"></section>
       
        
    </header>
    <main>
        <section class="produtos">
            <?php foreach($cardapio as $prato){?>

            <article>
                <img src=<?= $prato['img']?> alt="taças chmpagne no natal">
                <h1><?= $prato['nome']?></h1>
                <p><?= $prato['descricao']?></p>
                <button>ver mais</button>
            </article>
                <?php }?>
            
        </section>
    </main>
    <footer>
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">quem somos</a></li>
            <li><a href="#">serviços</a></li>
            <li><a href="#">portifólio</a></li>
            <li><a href="#">lojas</a></li>
            <li><a href="#">contato</a></li>
        </ul>

    </footer>
    
</body>
</html>