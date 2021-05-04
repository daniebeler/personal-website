<header class="navbar-wrapper">

    <div class="headerz">
        <div class="progress-container">
            <div class="progressbar" id="myBar"></div>
        </div>
    </div>

    <div id="myNav" class="overlay">
        <div class="overlay-content">
            <div>
                <a class="effect-box" href="https://daniebeler.com">Home</a>
            </div>
            <a class="effect-box" href="https://daniebeler.com/about">About</a>
            <a class="effect-box" href="https://daniebeler.com/contact">Contact</a>
            <a class="effect-box" href="https://daniebeler.com/games">Games</a>
            <a class="effect-box" href="https://daniebeler.com/webdesign">Webdesign</a>
        </div>
    </div>

    <div class="container navbar-holder">
        <div class="row">
            <div class="col-11 d-flex justify-content-center">
                <a href="https://daniebeler.com" class="icon-header">Daniel Hiebeler</a>
            </div>

            <div style="z-index: 103; margin: auto" class="col-1 justify-content-end align-items-center">
                <button style="outline:none;" onclick="toggleNav()" class="navbar-toggler first-button float-right"
                    type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
                    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon1"><span></span><span></span><span></span></div>
                </button>
            </div>
        </div>
    </div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).scroll(function() {
    var scroll = $(window).scrollTop(),
        dh = $(document).height(),
        wh = $(window).height();
    scrollPercent = (scroll / (dh - wh)) * 100;
    $('.progressbar').css('width', scrollPercent + '%');
})

var url = window.location.href;
var path = window.location.pathname;
var filename = path.substring(path.lastIndexOf('/') + 1);

$(document).ready(function() {

    $('.icon-header').css('color', '#fff')

    if (filename == "gradients.php" || url == "https://daniebeler.com/webdesign/gradients/") {
        $('.animated-icon1').children().css('background', '#000')
        $('.progressbar').css('background', 'linear-gradient(90deg,#23272d,#23272d)');
    } else if (filename == "colors.php" || url == "https://daniebeler.com/webdesign/colors/") {
        $('.animated-icon1').children().css('background', '#000')
        $('.progressbar').css('background', 'linear-gradient(90deg,#23272d,#23272d)');
    } else if (filename == "about.php" || url == "https://daniebeler.com/about/") {
        $('.progressbar').css('background', 'linear-gradient(90deg,#0FD64F,#F8EF42)');
    } else if (filename == "privacy-policy.php" || url == "https://daniebeler.com/privacy-policy/") {
        $('.progressbar').css('background', 'linear-gradient(90deg,#f96e33,#e33684)');
    } else if (filename == "home.php" || url == "https://daniebeler.com") {
        $('.progressbar').css('background', 'linear-gradient(90deg,#23272d,#23272d)')
    } else if (filename == "games.php" || url == "https://daniebeler.com/games/") {
        $('.progressbar').css('background', 'linear-gradient(90deg,#b993d6,#8ca6db)');
    } else if (filename == "webdesign.php" || url == "https://daniebeler.com/webdesign/") {
        $('.progressbar').css('background', 'linear-gradient(90deg,#FFDD00,#FBB034)');
    }

    $(window).scroll(function() {
        if ($(window).scrollTop() > 1) {
            $('.navbar-wrapper').addClass('scrolled-navbar');

            if (filename == "about.php" || url == "https://daniebeler.com/about/") {
                $('.animated-icon1').children().css('background', '#0fd64f')
                $('.icon-header').css('color', '#0fd64f')
            } else if (filename == "privacy-policy.php" || url == "https://daniebeler.com/privacy-policy/") {
                $('.animated-icon1').children().css('background', '#e33684')
                $('.icon-header').css('color', '#e33684')
            } else if (filename == "home.php" || url == "https://daniebeler.com") {
                $('.animated-icon1').children().css('background', '#23272d')
                $('.icon-header').css('color', '#23272d')
            } else if (filename == "contact.php" || url == "https://daniebeler.com/contact/") {
                $('.animated-icon1').children().css('background', '#fff')
                $('.icon-header').css('color', '#fff')
            } else if (filename == "gradients.php" || url ==
                "https://daniebeler.com/webdesign/gradients/") {
                $('.animated-icon1').children().css('background', '#000')
                $('.icon-header').css('color', '#000')
            } else if (filename == "colors.php" || url ==
                "https://daniebeler.com/webdesign/colors/") {
                $('.animated-icon1').children().css('background', '#000')
                $('.icon-header').css('color', '#000')
            } else if (filename == "games.php" || url == "https://daniebeler.com/games/") {
                $('.animated-icon1').children().css('background', '#8ca6db')
                $('.icon-header').css('color', '#8ca6db')
            } else if (filename == "webdesign.php" || url == "https://daniebeler.com/webdesign/") {
                $('.animated-icon1').children().css('background', '#FBB034')
                $('.icon-header').css('color', '#FBB034')
            } else {
                $('.animated-icon1').children().css('background', '#23272d')
                $('.icon-header').css('color', '#23272d')
            }

        } else {
            $('.navbar-wrapper').removeClass('scrolled-navbar');

            if (filename == "gradients.php" || url ==
                "https://daniebeler.com/webdesign/gradients/") {
                $('.animated-icon1').children().css('background', '#000')
                $('.progressbar').css('background', 'linear-gradient(90deg,#23272d,#23272d)');
            } else if (filename == "colors.php" || url == "https://daniebeler.com/webdesign/colors/") {
                $('.animated-icon1').children().css('background', '#000')
                $('.progressbar').css('background', 'linear-gradient(90deg,#23272d,#23272d)');
            } else if (filename == "gradients.php" || url ==
                "https://daniebeler.com/webdesign/gradients/") {
                $('.animated-icon1').children().css('background', '#f45c43')
            } else {
                $('.animated-icon1').children().css('background', '#fff')
                $('.icon-header').css('color', '#fff')
            }

        }
    })
})
</script>