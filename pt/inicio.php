<!DOCTYPE html>
<html lang="pt" class="h-100">
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
        <main class="flex-shrink-0 h-100">
            <?php
                require "./components/navbar.php";
            ?>
            <div class="p-5 mb-4 rounded-3">
                <div class="container">
                    <div class="row c-1">
                        <h1 class="display-5 fw-bold">
                            Bem vindo(a)!
                        </h1>
                        <p class="col-md-12 fs-4">
                            Este é o meu site, aqui você poderá encontrar um pouco sobre meu desenvolvimento na área de tecnologia.
                        </p>
                    </div>
                    <div class="row c-2">
                        <div class="col-4">

                        </div>
                        <div class="col-8">

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