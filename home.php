<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Giannone | Home</title>
    <?php
    include './dependencies/scripts.php';
    ?>
</head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <?php
                require "./components/navbar.php";
            ?>
            <div class="p-5 mb-4 rounded-3">
                <div class="container">
                    <h1 class="display-5 fw-bold">
                        Bem vindo(a)!
                    </h1>
                    <p class="col-md-8 fs-4">
                        Este é o meu site, aqui você poderá encontrar todo meu conteúdo 
                        relacionado ao <span>Web Desenvolvimento</span>.
                    </p>
                    <a href="/contato.php" class="btn btn-outline-dark btn-lg">
                        Contato
                    </a>
                </div>
            </div>
        </main>
        <footer class="container py-3 mt-auto text-muted border-top">
        © 2021
        </footer>
        
    </body>
</html>