<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daniel Hiebeler</title>
    <link rel="icon" type="image/png" href="nc_assets/img/logo.png">
    <meta charset="utf-8">
    <meta name="description" content="This is my personal website and portfolio. Here you will find my projects and something about myself">
    <meta name="author" content="Daniel Hiebeler">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="nc_assets/css/general.css">
    <link rel="stylesheet" href="nc_assets/css/home.css">
    

</head>

<body>

    <?php include "nc_assets/php/navbar.php"; ?>

    <div class="bg-1">

    </div>
    <div class="bg-2">

    </div>


    <section class=" page_1 d-flex align-items-center justify-content-center panel" data-color="grey">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="heading mb-4">
                    I am Daniel Hiebeler
                </h1>
            </div>
            <div class="row justify-content-center">
                <div style="text-align: center;" class="display-4 mb-4" id='status'>
                    Sailor
                </div>
            </div>
            <div class="align-items-end arrow-down-pos">
                <div class="arrow-down"></div>
            </div>
        </div>

    </section>
    <section class="page_2 panel" data-color="grey">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-auto d-flex align-items-center">
                    <picture class="m-4">
                        <source type="image/webp" srcset="nc_assets/img/logo.png">
                        <source type="image/png" srcset="nc_assets/img/logo.png">
                        <img class="img-logo" src="nc_assets/img/logo.png" alt="Icon of ReflexTest">
                    </picture>
                </div>
                <div class="d-flex col align-items-center">
                    <div>
                        <p class="" data-aos="zoom-in-up">
                            Welcome to my page! Here you will find some facts about me and you can get a small overview
                            of my projects.<br><br>
                            <strong>A bit about me:</strong> At the moment I am attending fourth grade of HTL Dornbirn.
                            I love all kinds of programming, with passion in mobile game development. I also like online
                            challenges like TryHackMe or HackerRank. Especially OSINT challenges are a lot of fun...
                        </p>
                        <div class="row pt-3">
                            <div class="d-flex col justify-content-center">
                                <a data-aos="zoom-in-up" href="https://daniebeler.com/about" class="btn_general btn_light">More
                                    Information</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="page_3 panel" data-color="white">

        <div class="container">
            <div class="row mt-5 mb-3" data-aos="zoom-in-up">
                <h2 class="col">
                    Games
                </h2>
            </div>
            <div class="row">

                <div class="col-6 col-lg-3 col-md-4 pt-3 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/reflextest.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/reflextest.png">
                        <div>
                            <img class="img" src="nc_assets/img/reflextest.png" alt="Icon of ReflexTest">
                            <div class="m-3 img-overlay img-reflextest d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#reflextest';">
                                <div class="overlay-txt">Reflextest</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/speed-clicker.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/speed-clicker.png">
                        <div>
                            <img class="img" src="nc_assets/img/speed-clicker.png" alt="Icon of Speed Clicker">
                            <div class="m-3 img-overlay img-speedclicker d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#speedclicker';">
                                <div class="overlay-txt">Speed Clicker</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/21.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/21.png">
                        <div>
                            <img class="img" src="nc_assets/img/21.png" alt="Icon of Twentyone">
                            <div class="m-3 img-overlay img-twentyone d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#twentyone';">
                                <div class="overlay-txt">Twentyone</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/mine-boy.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/mine-boy.png">
                        <div>
                            <img class="img" src="nc_assets/img/mine-boy.png" alt="Icon of MineBoy">
                            <div class="m-3 img-overlay img-mineboy d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#mineboy';">
                                <div class="overlay-txt">MineBoy</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/toggle-together.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/toggle-together.png">
                        <div>
                            <img class="img" src="nc_assets/img/toggle-together.png" alt="Icon of Toggle Together">
                            <div class="m-3 img-overlay img-toggletogether d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#toggletogether';">
                                <div class="overlay-txt">Toggle Together</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/justwatchad.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/justwatchad.png">
                        <div>
                            <img class="img" src="nc_assets/img/justwatchad.png" alt="Icon of Just Watch Ad">
                            <div class="m-3 img-overlay img-justwatchad d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#justwatchad';">
                                <div class="overlay-txt">Just Watch Ad</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/parkingjam.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/parkingjam.png">
                        <div>
                            <img class="img" src="nc_assets/img/parkingjam.png" alt="Icon of Parking Jam">
                            <div class="m-3 img-overlay img-parkingjam d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#parkingjam';">
                                <div class="overlay-txt">Parking Jam</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/wrongway.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/wrongway.png">
                        <div>
                            <img class="img" src="nc_assets/img/wrongway.png" alt="Icon of Wrong Way">
                            <div class="m-3 img-overlay img-wrongway d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#wrongway';">
                                <div class="overlay-txt">Wrong Way</div>
                            </div>
                        </div>
                    </picture>
                </div>

                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/balance.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/balance.png">
                        <div>
                            <img class="img" src="nc_assets/img/balance.png" alt="Icon of Balance">
                            <div class="m-3 img-overlay img-balance d-flex align-items-center justify-content-center" onclick="location.href='https://daniebeler.com/games#balance';">
                                <div class="overlay-txt">Balance - The Game</div>
                            </div>
                        </div>
                    </picture>
                </div>

            </div>
            <div class="row mt-5 mb-3" data-aos="zoom-in-up">
                <h2 class="col">
                    Apps
                </h2>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 pt-3 col-md-4 pb-3" data-aos="zoom-in-up">
                    <picture class="d-flex justify-content-center">
                        <source type="image/webp" srcset="nc_assets/img/dailytasks.webp">
                        <source type="image/jpeg" srcset="nc_assets/img/dailytasks.png">
                        <div>
                            <img class="img" src="nc_assets/img/dailytasks.png" alt="Icon of Daily Tasks">
                            <div class="m-3 img-overlay img-dailytasks d-flex align-items-center justify-content-center" onclick="location.href='https://play.google.com/store/apps/details?id=com.daniebeler.dailytasks';">
                                <div class="overlay-txt">Daily Tasks</div>
                            </div>
                        </div>
                    </picture>
                </div>
            </div>

            <div class="row" data-aos="zoom-in-up">
                <div class="d-flex col justify-content-center">
                    <a href="https://daniebeler.com/games" class="btn_general btn_dark">More Information</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "nc_assets/php/footer.php"; ?>

    <script src="nc_assets/js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>