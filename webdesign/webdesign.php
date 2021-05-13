<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webdesign - Daniel Hiebeler</title>
    <meta charset="utf-8">
    <meta name="description" content="Some informations about me.">
    <meta name="author" content="Daniel Hiebeler">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/webp" href="../nc_assets/img/logo.webp">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="../nc_assets/css/general.css">
    <link rel="stylesheet" href="../nc_assets/css/wave.css">
    <link rel="stylesheet" href="../nc_assets/css/webdesign.css">
</head>

<body>

    <?php include "../nc_assets/php/navbar.php"; ?>

    <div class="bg-1"></div>
    <div class="bg-2"></div>

    <section class="header-container panel" data-color="white">
        <div class="section-header row mx-auto align-items-center justify-content-center">
            <div class="">
                <div class="container align-items-center">
                    <h1 class="heading header-size d-flex justify-content-center">
                        Design
                    </h1>
                </div>
            </div>
        </div>
        <?php include "../nc_assets/php/wave.php"; ?>
    </section>

    <section class="section-quote panel" data-color="white">
        <div class="container">
            <div class="row justify-content-center align-items-center no-gutters quote-row mb-5">
                <h3 class="text-center">
                    "Design is not just what it looks like and feels like. Design is how it works." <span
                        class="vincent"> – Steve Jobs</span>
                </h3>
                <h5 class="">

                </h5>
            </div>
        </div>

    </section>

    <section class="section-text row mx-auto panel" data-color="white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="button-holder d-flex align-items-center justify-content-center"
                        onclick="location.href='https://daniebeler.com/webdesign/gradients';">
                        <h4>
                            Gradients
                        </h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="button-holder d-flex align-items-center justify-content-center"
                        onclick="location.href='https://daniebeler.com/webdesign/colors';">
                        <h4>
                            Colors
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include "../nc_assets/php/footer.php"; ?>

    <script src="../nc_assets/js/main.js"></script>
</body>

</html>