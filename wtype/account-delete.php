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
    <title>Account | FoundryCore | A web solution for independent font foundries</title>

    <!-- PAGE STYLES -->
    <link href="assets/css/main.min.css" rel="stylesheet">

</head>

<body class="body-delete">
    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
        
        <?php include('templating/navbar-account.php'); ?>
    </header>

    <main class="main" role="main">

        <section class="fc-section fc-section--pageHeader">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <h1>Delete account</h1>
                    <p>Account deletion is <strong>final</strong>. There will be no way to restore your account or re-download your purchases.</p>
                </div>
            </div>
        </section>

        <section class="fc-section fc-section--form">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">



                    <div class="fc-formWrapper">
                        <form method="POST">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="validate">Retype your password</label>
                                <input class="form-control" type="password" id="validate" name="validate" required>
                            </div>

                            <div class="is-checkbox custom-control custom-checkbox form-group">
                                <input type="checkbox" class="custom-control-input" id="deleteConfirm"
                                    name="deleteConfirm" required>
                                <label class="custom-control-label" for="deleteConfirm">I am fully aware of what I am doing.</label>
                            </div>

                            <div class="form-group submit">
                                <button type="submit" name="delete" class="btn btn-primary" value="delete">Delete my account</button>
                                <span class="btn"><a href="http://foundrycore-vat.test/account">Never mind, keep my account!</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main> <!-- end .main -->

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