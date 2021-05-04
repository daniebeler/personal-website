<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact - Daniel Hiebeler</title>
    <meta charset="utf-8">
    <meta name="description" content="Contact me or visit my Social-Media profiles.">
    <meta name="author" content="Daniel Hiebeler">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../nc_assets/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../nc_assets/css/general.css">
    <link rel="stylesheet" href="../nc_assets/css/contact.css">
</head>

<body>

    <?php include "../nc_assets/php/navbar.php"; ?>

    <section class="page d-flex justify-content-center align-items-center">

        <div class="container">
            <div class="contact-background">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div>
                            <h2 class="contact-header">
                                Contact me
                            </h2>
                            <p class="contact-text">
                                Sonnenstrasse 11a
                                <br>
                                6890 Lustenau, Austria
                                <br>
                                hiebeler.daniel@gmail.com
                            </p>

                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.instagram.com/daniebeler/"><img
                                    src="https://daniebeler.com/nc_assets/img/instagram.svg" alt="Instagram" width="48"
                                    height="48" /></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">

                        <div class="form-group">
                            <input id="mail-subject" type="text" class="input_general" name="name" placeholder="Subject"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <textarea id="mail-text" class="input_general" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                            <a href="" onclick="sendMail(); return false" class="btn_general btn_blue">Send
                                Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    const colors = ["#fff"];

    const numBalls = 50;
    const balls = [];

    for (let i = 0; i < numBalls; i++) {
        let ball = document.createElement("div");
        ball.classList.add("ball");
        ball.style.background = colors[Math.floor(Math.random() * colors.length)];
        ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
        ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
        ball.style.transform = `scale(${Math.random()})`;
        ball.style.width = `${Math.random()}em`;
        ball.style.height = ball.style.width;

        balls.push(ball);
        document.body.append(ball);
    }

    // Keyframes
    balls.forEach((el, i, ra) => {
        let to = {
            x: Math.random() * (i % 2 === 0 ? -11 : 11),
            y: Math.random() * 12
        };

        let anim = el.animate(
            [{
                    transform: "translate(0, 0)"
                },
                {
                    transform: `translate(${to.x}rem, ${to.y}rem)`
                }
            ], {
                duration: (Math.random() + 1) * 2000, // random duration
                direction: "alternate",
                fill: "both",
                iterations: Infinity,
                easing: "ease-in-out"
            }
        );
    });
    </script>

    <script src="../nc_assets/js/main.js"></script>
</body>

</html>