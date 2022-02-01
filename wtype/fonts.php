<!doctype html>
<html lang="en">

<head>
    <!-- 
    ********************************************************************            
    FoundryCore.tipografia.com.ar
    ********************************************************************
    -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Typefaces | FoundryCore | A web solution for independent font foundries</title>

    <!-- PAGE STYLES -->
    <link href="assets/css/main.min.css" rel="stylesheet">

</head>

<body class="body-fonts">

    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
    </header>
    
    <main class="main">
        <section id="catalog" class="container c-fontsList">
            <div class="c-fontsList__familyItem">
                <div class="row familyItem__info">
                    <div class="col-auto col-md info__familyName">
                        Sans serif </div>
                    <div class="col-auto col-md text-md-center ml-auto">
                        12 Styles </div>
                    <div class="col-md ml-auto text-md-right info__price">
                        <span class="text-primary">On Discount</span> Starting at U$D 30.00 </div>
                </div>
                <a href="font.php" class="familyItem__link">
                    <h2 class="familyItem__sample" style="font-family: sans-serif; font-weight: 700">Lorem ipsum
                    </h2>
                </a>
            </div>
            <div class="c-fontsList__familyItem">
                <div class="row familyItem__info">
                    <div class="col-auto col-md info__familyName">
                        Sans serif </div>
                    <div class="col-auto col-md text-md-center ml-auto">
                        12 Styles </div>
                    <div class="col-md ml-auto text-md-right info__price">
                        Starting at U$D 30.00 </div>
                </div>
                <a href="font.php" class="familyItem__link">
                    <h2 class="familyItem__sample" style="font-family: sans-serif; font-weight: 700">Lorem ipsum
                    </h2>
                </a>
            </div>
            <div class="c-fontsList__familyItem">
                <div class="row familyItem__info">
                    <div class="col-auto col-md info__familyName">
                        Sans serif </div>
                    <div class="col-auto col-md text-md-center ml-auto">
                        12 Styles </div>
                    <div class="col-md ml-auto text-md-right info__price">
                        Starting at U$D 30.00 </div>
                </div>
                <a href="font.php" class="familyItem__link">
                    <h2 class="familyItem__sample" style="font-family: sans-serif; font-weight: 700">Lorem ipsum
                    </h2>
                </a>
            </div>
        </section>
    </main>

    <?php include('templating/footer.php'); ?>

</body>


<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

<!-- WEBFONTLOADER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
    integrity="sha256-4O4pS1SH31ZqrSO2A/2QJTVjTPqVe+jnYgOWUVr7EEc=" crossorigin="anonymous"></script>

<script src="assets/js/app.min.js"></script>

</html>