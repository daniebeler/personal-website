<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradients - Daniel Hiebeler</title>
    <meta charset="utf-8">
    <meta name="description" content="Create and discover beautiful gradients.">
    <meta name="author" content="Daniel Hiebeler">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/webp" href="../../assets/img/logo.webp">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" />
    <link rel="stylesheet" href="../../assets/css/general.css">
    <link rel="stylesheet" href="../../assets/css/gradients.css">
</head>

<body>

    <?php include "../../assets/php/navbar.php"; ?>

    <section class="d-md-flex h-md-100 align-items-center first-holder">

        <!-- First Half -->

        <div class="col-md-7 row mx-auto bg-gradient align-items-center justify-content-center">

            <div class="txtcodeholder">
                <div class="container txtcode">
                    CSS-Color
                </div>

            </div>

        </div>

        <!-- Second Half -->

        <div class="col-md-5 align-items-center rightside">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="text-center">
                        Gradient Generator
                    </h1>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label>Type</label>
                        <select id="inputtype" class="form-control">
                            <option selected>Linear</option>
                            <option>Radial</option>
                        </select>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Rotation</label>
                        <div class="input-group">
                            <input class="form-control rotation" type="text" placeholder="Rotation" value="45">
                            <div class="input-group-append">
                                <span class="input-group-text">deg</span>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>First Color</label>
                        <div class="input-group">
                            <input class="form-control first-color" type="text" placeholder="first color"
                                value="13eb13">
                            <div class="input-group-append">
                                <div class="input-group-text pickr-holder pickr-holder-1">
                                    <div class="color-picker-1">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Second Color</label>
                        <div class="input-group">
                            <input class="form-control second-color" type="text" placeholder="second color"
                                value="00ffa6">
                            <div class="input-group-append">
                                <div class="input-group-text pickr-holder pickr-holder-2">
                                    <div class="color-picker-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="second-page">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center">
                    More Gradients
                </h1>
            </div>
            <div class="row text-center cont">
                <div class="col-6 col-lg-3 col-md-4 col-sm-6" id="clone0" data-aos="zoom-in-up">
                    <div class="grad">

                    </div>
                    <p>
                        #81FBB8
                        </br>
                        #28C76F
                    </p </div>
                </div>
            </div>
    </section> <?php include "../../assets/php/footer.php"; ?> <script src="../../assets/js/main.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script>
    var colors = [
        ['#a1c4fd', '#c2e9fb'],
        ['#a3bded', '#6991c7'],
        ['#ff758c', '#ff7eb3'],
        ['#c79081', '#dfa579'],
        ['#B7F8DB', '#50A7C2'],
        ['#FEB692', '#EA5455'],
        ['#a8edea', '#fed6e3'],
        ['#5ee7df', '#b490ca'],
        ['#667eea', '#764ba2'],
        ['#FCCF31', '#F55555'],
        ['#b993d6', '#8ca6db'],
        ['#29323c', '#485563'],
        ['#007adf', '#00ecbc'],
        ['#7DE2FC', '#B9B6E5'],
        ['#B6CEE8', '#F578DC'],
        ['#20E2D7', '#F9FEA5'],
        ['#e14fad', '#f9d423'],
        ['#d7d2cc', '#304352'],
        ['#ff9a44', '#fc6076'],
        ['#50cc7f', '#f5d100'],
        ['#dfe9f3', '#ffffff'],
        ['#1e3c72', '#2a5298'],
        ['#ee9ca7', '#ffdde1'],
        ['#64b3f4', '#c2e59c'],
        ['#f77062', '#fe5196'],
        ['#ff0844', '#ffb199'],
        ['#6a85b6', '#bac8e0'],
        ['#0ba360', '#3cba92'],
        ['#cd9cf2', '#f6f3ff'],
        ['#eb3349', '#f45c43'],
        ['#56ab2f', '#a8e063'],
        ['#eacda3', '#d6ae7b'],
        ['#4ca1af', '#c4e0e5'],
        ['#ed4264', '#ffedbc'],
        ['#ff9966', '#ff5e62'],
        ['#9890e3', '#b1f4cf'],
        ['#A7ACD9', '#9E8FB2'],
        ['#E7A977', '#EBBE9B'],
        ['#F2A65A', '#772F1A'],
        ['#0D324D', '#7F5A83'],
        ['#8693AB', '#BDD4E7'],
        ['#7EE8FA', '#EEC0C6'],
        ['#9E768F', '#9FA4C4'],
        ['#7EE8FA', '#EEC0C6'],
        ['#EC9F05', '#FF4E00'],
        ['#80FF72', '#7EE8FA'],
        ['#74F2CE', '#7CFFCB'],
        ['#FFA69E', '#861657'],
        ['#A71D31', '#3F0D12'],
        ['#009FFD', '#2A2A72'],
        ['#647DEE', '#7F53AC'],
        ['#B621FE', '#1FD1F9'],
        ['#F53803', '#F5D020'],
        ['#FFDD00', '#FBB034'],
        ['#5F72BE', '#9921E8'],
        ['#28313B', '#485461'],
        ['#2A5470', '#4C4177'],
        ['#864BA2', '#BF3A30'],
        ['#55D284', '#F2CF07'],
        ['#08C8F6', '#4D5DFB'],
        ['#19A186', '#F2CF43'],
        ['#6D17CB', '#2876F9'],
        ['#0FD64F', '#F8EF42'],
        ['#CB218E', '#6617CB'],
        ['#1E3B70', '#29539B'],
        ['#48A9FE', '#0BEEF9'],
        ['#42FCDB', '#3EE577'],
        ['#F08EFC', '#EE5166'],
        ['#CEF576', '#84FB95'],
        ['#B8D3FE', '#AECAD6'],
        ['#66B5F6', '#BFE299'],
        ['#EBBBA7', '#CFC7F8'],
        ['#AACAEF', '#FDE7F9'],
        ['#F9ABA4', '#EFECEC'],
        ['#C8C85E', '#D8D8AC'],
        ['#20DED3', '#F6FBA2'],
        ['#DCF8EF', '#FEE2F8'],
        ['#9DFBC8', '#F5F186'],
        ['#FFFCFF', '#D5FEFD'],
        ['#D2CCC4', '#2F4353'],
        ['#E61D8C', '#C7E9FB'],
        ['#09203F', '#537895'],
        ['#DAACEC', '#94C997'],
        ['#A4BFEF', '#6A93CB'],
        ['#6782B4', '#B1BFD8'],
        ['#AFF1DA', '#F9EA8F'],
        ['#9795EF', '#F9C5D1'],
        ['#BBDBBE', '#DEEBDD'],
        ['#F6D285', '#BBF0F3'],
        ['#F5F7FA', '#B8C6DB'],
        ['#D99EC9', '#F6F0C4'],
        ['#F9D976', '#F39F86'],
        ['#FB7BA2', '#FCE043'],
        ['#89f7fe', '#66a6ff'],
        ['#ffdde1', '#ee9ca7'],
        ['#D4FC79', '#96E6A1'],
        ['#FF4B2B', '#FF416C'],
        ['#21D4FD', '#B721FF'],

        ['#6343d4', '#4b9ebe'],
        ['#14b0e4', '#3cb58d'],
        ['#f1f75b', '#5dccc3'],
        ['#94e2b6', '#01aca6'],
        ['#c1a1ea', '#6761e4'],
        ['#ffa230', '#f76f5c'],
        ['#01ead2', '#0085f2'],
        ['#09b0e2', '#2bf0a0'],
        ['#f83e92', '#fe9a4c'],
        ['#8d3edf', '#fb5eab'],
        ['#ef8567', '#eec472'],
        ['#c64d5e', '#d9b879'],
        ['#a3d8eb', '#719ec2'],
        ['#395d7d', '#c06c84'],
        ['#abb2b8', '#425262'],
        ['#f36a3c', '#df3a80'],
        ['#ec7100', '#ecb223'],
        ['#36479c', '#4882ca'],
        ['#ff7755', '#ffaa47'],

        ['#FFDEA0', '#FF889D'],
        ['#80D0C7', '#13547A'],
        ['#E4EFE9', '#93A5CF'],
        ['#FF9A9E', '#FAD0C4'],
        ['#C2E9FB', '#A1C4FD'],
        ['#FFCC2F', '#EF5734'],
        ['#788CB6', '#FDB813'],
        ['#ED008C', '#FFF000'],
        ['#FFC719', '#BF033B'],
        ['#FFC907', '#B5C327'],
        ['#FFF200', '#003B64'],
        ['#FFED00', '#FF0000'],
        ['#FCD000', '#76DAFF'],
        ['#005238', '#FFCD00'],
        ['#766A65', '#EDD812'],
        ['#F07654', '#F5DF2E'],
        ['#D425B5', '#EBF928'],
        ['#2575AC', '#C9D706'],
        ['#04619F', '#000000'],
        ['#434343', '#000000'],
        ['#000000', '#166D3B'],
        ['#000000', '#923CB5'],
        ['#B82E1F', '#000000'],
        ['#0C0C0C', '#4834D4'],
        ['#000000', '#55EFC4'],
        ['#D3D3D3', '#FECA57'],
        ['#D3D3D3', '#1DD1A1'],
        ['#D3D3D3', '#F368E0'],
        ['#D3D3D3', '#FF9F43'],
        ['#EE5253', '#D3D3D3'],
        ['#7F8C8D', '#D3D3D3'],
        ['#80CED7', '#007EA7'],
        ['#b51f1a', '#f98ef6'],
        ['#ed765e', '#fea858'],
        ['#a96f44', '#f6b2e1'],
        ['#eae5c9', '#6cc6cb'],
        ['#7e2423', '#e3bde5'],
        ['#4b086d', '#acc0fe'],
        ['#af6480', '#f6b2e1'],
        ['#ae8ba1', '#f2ecb6'],
        ['#f6a09a', '#8a1f1d'],
        ['#7dc387', '#dbe9ea'],
        ['#ead6ee', '#a0f1ea'],
        ['#ed765e', '#e3bde5'],
        ['#af6480', '#c3cee5'],
        ['#a96f44', '#f2ecb6'],
        ['#50d5b7', '#067d68'],
        ['#ccfbff', '#ef96c5'],
        ['#dafea4', '#f254a8'],
        ['#07a3b2', '#d9ecc7'],
        ['#e3ff73', '#e27c39'],
        ['#581268', '#f6b2e1'],
        ['#0c7bb3', '#f2bae8'],
        ['#9fa5d5', '#e8f5c8'],
        ['#c22ed0', '#5ffae0'],
        ['#ef33b1', '#f6e6bc'],
        ['#e65758', '#771d32'],
        ['#e5aac3', '#9a52c7'],
        ['#849b5c', '#bfffc7'],
        ['#ff0078', '#f6efa7'],
        ['#a3c9e2', '#9618f7'],
        ['#b60f46', '#d592ff'],
        ['#f9957f', '#f2f5d0'],
        ['#c973ff', '#aebaf8'],
        ['#0ccda3', '#c1fcd3'],
        ['#bb73e0', '#ffaddb'],
        ['#f6ea41', '#f048c6'],
        ['#9600ff', '#aebaf8'],
        ['#eebd89', '#d13abd'],
        ['#ffe259 ', '#ffa751'],
        ['#fc6767 ', '#ec008c'],
        ['#ffc3a0', '#ffafbd']
    ];


    var cw = $('.grad').width();
    $('.grad').css({
        'height': cw + 'px'
    });

    var color1 = document.querySelector(".first-color");
    var color2 = document.querySelector(".second-color");
    var rotation = document.querySelector(".rotation");

    var randy = Math.floor(Math.random() * colors.length);

    color1.value = (colors[randy][0])
    color2.value = (colors[randy][1])

    $("#inputtype, .first-color, .second-color, .rotation").change(function() {
        $('.pickr-holder-1').find('.pcr-button').css('color', color1.value);
        $('.pickr-holder-2').find('.pcr-button').css('color', color2.value);
        changeGradient()
    });

    function changeGradient() {
        if ($('#inputtype').children("option:selected").val() == 'Linear') {
            $(".rotation").removeAttr('disabled');
            $('.bg-gradient').css({
                background: 'linear-gradient(' + rotation.value + 'deg, ' + color1.value + ', ' + color2
                    .value +
                    ')'
            });
            var str = 'background: linear-gradient(' + rotation.value + 'deg, ' + color1.value.toUpperCase() + ', ' +
                color2
                .value.toUpperCase() +
                ')';
        } else {
            $(".rotation").attr('disabled', 'disabled');
            $('.bg-gradient').css({
                background: 'radial-gradient(' + color1.value + ', ' + color2
                    .value +
                    ')'
            });

            var str = 'background: radial-gradient(' + color1.value.toUpperCase() + ', ' + color2
                .value.toUpperCase() +
                ')';
        }
        $(".txtcode").html(str);

    }
    $(document).ready(function() {
        changeGradient()
    });



    for (i = 0; i < colors.length; i++) {

        var clone = $('#clone0').clone().prop('id', 'clone' + (i + 1));
        clone.children('.grad').css({
            background: 'linear-gradient(45deg, ' + colors[i][0] + ', ' + colors[i][1] +
                ')'
        });
        clone.children('p').html((colors[i][0]).toUpperCase() + '</br>' + (colors[i][1]).toUpperCase())
        $('.cont').append(clone);
    }



    const pickr1 = Pickr.create({
        el: '.color-picker-1',
        theme: 'classic', // or 'monolith', or 'nano'

        swatches: [
            'rgba(244, 67, 54, 1)',
            'rgba(233, 30, 99, 0.95)',
            'rgba(156, 39, 176, 0.9)',
            'rgba(103, 58, 183, 0.85)',
            'rgba(63, 81, 181, 0.8)',
            'rgba(33, 150, 243, 0.75)',
            'rgba(3, 169, 244, 0.7)',
            'rgba(0, 188, 212, 0.7)',
            'rgba(0, 150, 136, 0.75)',
            'rgba(76, 175, 80, 0.8)',
            'rgba(139, 195, 74, 0.85)',
            'rgba(205, 220, 57, 0.9)',
            'rgba(255, 235, 59, 0.95)',
            'rgba(255, 193, 7, 1)'
        ],

        components: {

            // Main components
            preview: false,
            opacity: true,
            hue: true,

            // Input / output Options
            interaction: {
                hex: false,
                rgba: false,
                hsla: false,
                hsva: false,
                cmyk: false,
                input: false,
                clear: false,
                save: false
            }
        }
    });

    const pickr2 = Pickr.create({
        el: '.color-picker-2',
        theme: 'classic', // or 'monolith', or 'nano'

        swatches: [
            'rgba(244, 67, 54, 1)',
            'rgba(233, 30, 99, 0.95)',
            'rgba(156, 39, 176, 0.9)',
            'rgba(103, 58, 183, 0.85)',
            'rgba(63, 81, 181, 0.8)',
            'rgba(33, 150, 243, 0.75)',
            'rgba(3, 169, 244, 0.7)',
            'rgba(0, 188, 212, 0.7)',
            'rgba(0, 150, 136, 0.75)',
            'rgba(76, 175, 80, 0.8)',
            'rgba(139, 195, 74, 0.85)',
            'rgba(205, 220, 57, 0.9)',
            'rgba(255, 235, 59, 0.95)',
            'rgba(255, 193, 7, 1)'
        ],

        components: {

            // Main components
            preview: false,
            opacity: true,
            hue: true,

            // Input / output Options
            interaction: {
                hex: false,
                rgba: false,
                hsla: false,
                hsva: false,
                cmyk: false,
                input: false,
                clear: false,
                save: false
            }
        }
    });
    pickr1.on('init', instance => {
        $('.pickr-holder-1').find('.pcr-button').css('color', color1.value);
    }).on('change', (color, instance) => {
        $('.pickr-holder-1').find('.pcr-button').css('color', color.toHEXA());
        color1.value = color.toHEXA();
        changeGradient();
    })

    pickr2.on('init', instance => {
        $('.pickr-holder-2').find('.pcr-button').css('color', color2.value);
    }).on('change', (color, instance) => {
        $('.pickr-holder-2').find('.pcr-button').css('color', color.toHEXA());
        color2.value = color.toHEXA();
        changeGradient();
    })
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init();
    </script>

</body>

</html>