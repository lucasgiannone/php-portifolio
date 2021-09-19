<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Giannone | Contato</title>
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
                    <h1 class="display-5 fw-bold">
                        Redes Sociais
                    </h1>
                    <p class="fs-4">
                        Se meu perfil te interessou, pode me encontrar em todas as plataformas de redes abaixo.
                    </p>
                    <div class='svg-box mt-5 row'>
                    <?php
                    foreach (glob("svgs/*.php") as $filename)
                    {
                        echo "<div class='col-3 col-md-3 col-lg-3'>";
                        $size = '15vw';
                        include $filename;
                        echo "</div>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </main>
        <?php
            require "./components/footer.php";
        ?>
    </body>
</html>