<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parking Jam - Daniel Hiebeler</title>
    <meta charset="utf-8">
    <meta name="description" content="Get some information about the Android-Game Parking Jam">
    <meta name="author" content="Daniel Hiebeler">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif" href="../../assets/img/icon_home.gif">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/rushhour.css">
    <link rel="stylesheet" href="../../assets/css/general.css">
    <link rel="stylesheet" href="../../assets/css/general-games.css">
</head>

<body>

    <?php include "../../assets/php/navbar.php"; ?>

    <div class="container-fluid">
        <section class="section-header row align-items-center justify-content-center">
            <div class="container align-items-center">

                <h1 class="heading-color heading-size header-size d-flex justify-content-center">
                    Parking Jam
                </h1>
                <div class="align-items-center justify-content-center row d-flex">
                    <button
                        onclick="location.href='https://play.google.com/store/apps/details?id=com.daniebeler.RushHour';"
                        type="button" class="btn btn-outline-light mt-4">Download</button>
                </div>
                <div class="align-items-end">
                    <div class="arrow-down"></div>
                </div>
            </div>
        </section>

        <section class="align-items-center section-desc row">
            <div class="container justify-content-center">
                <p>
                    Imagine you're driving your red car and you're stuck in the worst traffic jam ever. What do you do?
                </p>
            </div>
        </section>

        <section class="section-pictures row">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-5 row justify-content-center">
                        <picture>
                            <source type="image/webp" srcset="../../assets/img/rushhour-beginner.webp">
                            <source type="image/jpeg" srcset="../../assets/img/rushhour-beginner.jpg">
                            <img class="picture" src="../../assets/img/rushhour-beginner.jpg" alt="">
                        </picture>
                    </div>
                    <div class="col-6 col-md-7 d-flex justify-content-center align-items-center">
                        <div class="">
                            <p>
                                Your goal is to unblock the red car.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pictures row">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-7 d-flex justify-content-center align-items-center">
                        <div class="">
                            <p>
                                Improve your logical thinking!
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-5 row justify-content-center">
                        <picture>
                            <source type="image/webp" srcset="../../assets/img/rushhour-expert.webp">
                            <source type="image/jpeg" srcset="../../assets/img/rushhour-expert.jpg">
                            <img class="picture" src="../../assets/img/rushhour-expert.jpg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pictures row">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-5 row justify-content-center">
                        <picture>
                            <source type="image/webp" srcset="../../assets/img/rushhour-levels.webp">
                            <source type="image/jpeg" srcset="../../assets/img/rushhour-levels.jpg">
                            <img class="picture" src="../../assets/img/rushhour-levels.jpg" alt="">
                        </picture>
                    </div>
                    <div class="col-6 col-md-7 d-flex justify-content-center align-items-center">
                        <div class="">
                            <p>
                                The game contains 50 levels with increasing difficulty.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page_4 row justify-content-center">
            <div>
                <h1>
                    GAME INFO
                </h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                Published
                            </td>
                            <td>
                                2020
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Genre
                            </td>
                            <td>
                                Casual
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Developer
                            </td>
                            <td>
                                Daniel Hiebeler
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Platform
                            </td>
                            <td>
                                Android
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lines of code
                            </td>
                            <td>
                                C#: 633
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <?php include "../../assets/php/footer.php"; ?>

    <script src="../../assets/js/main.js"></script>
</body>

</html>