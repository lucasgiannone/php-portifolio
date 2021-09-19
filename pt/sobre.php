<!DOCTYPE html>
<html lang="en" class="h-auto">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Giannone | Sobre</title>
    <?php
    include './dependencies/scripts.php';
    ?>
</head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0 h-100">
            <?php
                require "./components/navbar.php";
            ?>
            <div class="p-5 mb-4 rounded-3">
                <div class="container">
                        <div class="row">
                            <h1 class="col-12 fw-bold">Como tudo começou?</h1>
                        </div>
                        <div class="row">
                            <p class="fs-4">
                            <?php
                            $str = file_get_contents('./texts/sobre.txt');
                            $str = nl2br($str);
                            echo "$str";
                            ?>
                            </p>
                        </div>
                        <div class="row">
                            <h1 class="col-12 fs-2 fw-bold text-muted">Linguagens de Programação</h1>
                        </div>
                        <style>
                            .lang>div>img{
                                height: auto;
                                width: 100%;
                            }
                        </style>
                        <div class="row lang">
                            <div class="col-2">
                                <img src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP Logo">
                            </div>
                        </div>
                </div>
            </div>
        </main>
        <?php
            require "./components/footer.php";
        ?>
    </body>
</html>