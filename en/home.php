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
                        Welcome!
                    </h1>
                    <p class="col-md-12 fs-4">
                        That's my website, here you can learn a little about my journey as a tech geek and former software developer.
                    </p>
                    <h2 class="d-inline col-8 text-muted">Grab yourself some coffee and let's begin our journey!</h2>
                    
                    <div class="home-coffee">
                    <img src="https://64.media.tumblr.com/tumblr_m9xxhe22K21qg6rkio1_500.gifv">
                    </div>
                </div>
            </div>
        </main>
        <?php
            require "./components/footer.php";
        ?>
    </body>
</html>