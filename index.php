<?php
    require_once('src/classes/Database.php');
    $taskList = json_decode($database->getJson(), true);
 ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PagOk</title>
        <link rel="stylesheet" href="public/css/bundle.min.css">
    </head>
    <body>
        <header>
            <nav class="top-navigation">
                    <a class="cta orange" href="#/">seja um franqueado</a>
                    <a class="cta purple" href="#/">seja um consultor(a)</a>
                    <a class="cta light-blue" href="#/">quero comprar</a>
                    <a class="cta orange restricted-area-mobile" href="#/">area restrita</a>
            </nav>
            <section class="doubts">
                <h1>Dúvidas</h1>
                <h2>Listamos aqui algumas dúvidas frequentes.</h2>
                <p>
                    caso a sua dúvida não esteja aqui
                    você pode entrar em contato conosco <a href="#/">clicando aqui</a>
                </p>
            </section>
            <a class="cta-restricted-area" href="#/">área restrita</a>
        </header>
        <section class="faqs">
            <?php foreach($taskList['lista_tarefas'] as $doubt): ?>
            <article>
                <h3>
                    <?= $doubt['titulo'] ?>
                    <i></i>
                    <img class="clicked" src="public/images/icons/arrow-down.png" alt="Uma seta na cor roxa apontando para baixo">
                </h3>
                <p class="hide">
                    <?= $doubt['descricao'] ?>
                </p>
            </article>
            <?php endforeach ?>
        </section>
        <footer></footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
            crossorigin="anonymous">
    </script>
    <script src="src/scripts/ui.js"></script>
</html>