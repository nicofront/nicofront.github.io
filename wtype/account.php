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

<body class="body-account">
    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
        
        <?php include('templating/navbar-account.php'); ?>
    </header>

    <main class="main" role="main">

        <section class="fc-section fc-section--pageHeader">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <h1>Account</h1>
                    <p>Add your details, for a faster checkout process.</p>
                </div>
            </div>
        </section>

        <section class="fc-section fc-section--form">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">

                    <div class="fc-alertWrapper">
                        <div class="alert alert-success">
                            Your information has been successfully updated.
                        </div>
                    </div>

                    <div class="fc-formWrapper">
                        <form method="POST" id="accountform" action="">

                            <div class="form-group">
                                <label for="firstname">First name</label>
                                <input class="form-control" type="text" id="firstname" name="firstname" value="Guido"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last name</label>
                                <input class="form-control" type="text" id="lastname" name="lastname" value="Ferreyra"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="organisation">Organisation/Company</label>
                                <input class="form-control" type="text" id="organisation" name="organisation" value="">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email"
                                    value="guido@tipografia.com.ar" required>
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="custom-select" name="country" id="country" value="Luxembourg" required>
                                    <option value="" disabled>Select your option</option>
                                    <option value="Afghanistan" data-countrycode="AF">Afghanistan</option>
                                    <option value="Algeria" data-countrycode="DZ">Algeria</option>
                                    <option value="Argentina" selected data-countrycode="AR">Argentina</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="vatid">Vat Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text countryCodeLabel">AR</div>
                                    </div>
                                    <input class="form-control" value="26375244" type="text" name="vatid">
                                </div>
                            </div>

                            <input name="countryCode" value="" hidden required>

                            <div class="form-group form-row">
                                <div class="col-sm-6">
                                    <label for="city">City</label>
                                    <input class="form-control" type="text" id="city" name="city" value="Cordoba">
                                </div>
                                <div class="col-sm-6">
                                    <label for="postalcode">Postal code</label>
                                    <input class="form-control" type="text" id="postalcode" name="postalcode"
                                        value="5000">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" id="address" name="address"
                                    value="Calle Falsa 123">
                            </div>

                            <div class="form-group submit">
                                <button class="btn btn-primary" type="submit" name="update" value="update">Update
                                    account info</button>
                                <a class="btn" href="http://foundrycore-vat.test/account/password">Change password?</a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section> <!-- end .container -->
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