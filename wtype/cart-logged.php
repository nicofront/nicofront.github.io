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
    <title>Cart (user logged) | FoundryCore | A web solution for independent font foundries</title>

    <!-- PAGE STYLES -->
    <link href="assets/css/main.min.css" rel="stylesheet">

</head>

<body class="body-checkout">

    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
    </header>

    <main class="main">

        <section class="fc-section fc-section--pageHeader">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <h1>Order summary</h1>
                </div>
            </div>
        </section>

        <section id="order-summary" class="fc-section fc-section--orderSummary">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <?php include('templating/cartList.php'); ?>
                </div>
            </div>
        </section>

        <section class="fc-section fc-section--form">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <form class="form-checkout" method="post" action="">
                        <div class="fc-processing__outerWrapper">
                            <div class="fc-processing__innerWrapper">
                                <div class="processingLoader"></div>
                                <div class="processingLabel">
                                    <h6>Your order is processing</h6>
                                    <p>Please do not refresh this page or back on your browser.</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-checkout__section">

                            <h2>Billing Info</h2>

                            <div class="form-group  is-required">
                                <label for="colFormLabel">E-Mail*</label>
                                <input class="form-control is-invalid" value="" type="email" name="email" __required="" autocomplete="email">
                                <div class="error">Please enter something</div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-6 is-required">
                                    <label for="colFormLabel">
                                        First name* </label>
                                    <input class="form-control" value="Guido" type="text" name="givenname" __required
                                        autocomplete="given-name">
                                </div>

                                <div class="form-group col-6 is-required">
                                    <label for="colFormLabel">
                                        Last name* </label>
                                    <input class="form-control" value="Ferreyra" type="text" name="familyname"
                                        __required autocomplete="family-name">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="colFormLabel">
                                    Organisation/Company </label>
                                <input class="form-control" value="" type="text" name="organisation"
                                    autocomplete="organisation">
                            </div>

                            <div class="form-group  is-required">
                                <label for="colFormLabel">
                                    Street* </label>
                                <input class="form-control" value="Calle Falsa 123" type="text" name="street" __required
                                    autocomplete="street-address">
                            </div>

                            <div class="form-group  is-required">
                                <label for="colFormLabel">
                                    City* </label>
                                <input class="form-control" value="Cordoba" type="text" name="city" __required
                                    autocomplete="city">
                            </div>

                            <div class="form-group ">
                                <label for="colFormLabel">
                                    Postal Code </label>
                                <input class="form-control" value="5000" type="text" name="postalcode"
                                    autocomplete="postal-code">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="custom-select" name="country" id="country" value="Argentina" required>
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


                            <input name="countryCode" value="US" hidden required>
                            <input type="hidden" name="buyer" value="jTTU5Ajt" required>

                        </div>

                        <div class="form-checkout__section">

                            <h2>Licensee info</h2>

                            <label class="is-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                    name="useInvoiceAddressAsLicenseeInfo" checked>
                                <p class="custom-control-label" for="customCheck1">Use same as billing</p>
                            </label>

                            <div id="license-address">
                                <div class="form-row">

                                    <div class="form-group col-6 is-required">
                                        <label for="colFormLabel">
                                            First name </label>
                                        <input class="form-control" value="" type="text" name="licenseeinfogivenname"
                                            autocomplete="license given-name">
                                    </div>

                                    <div class="form-group col-6 is-required">
                                        <label for="colFormLabel">
                                            Last name </label>
                                        <input class="form-control" value="" type="text" name="licenseeinfofamilyname"
                                            autocomplete="license family-name">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="colFormLabel">
                                        Organisation/Company </label>
                                    <input class="form-control" value="" type="text" name="licenseeinfoorganisation">
                                </div>

                                <div class="form-group is-required">
                                    <label for="colFormLabel">
                                        Street </label>
                                    <input class="form-control" value="" type="text" name="licenseeinfostreet"
                                        autocomplete="license street-address">
                                </div>

                                <div class="form-group ">
                                    <label for="colFormLabel">
                                        City </label>
                                    <input class="form-control" value="" type="text" name="licenseeinfocity"
                                        autocomplete="city">
                                </div>

                                <div class="form-group is-required">
                                    <label for="colFormLabel">
                                        Postal Code </label>
                                    <input class="form-control" value="" type="text" name="licenseeinfopostalcode"
                                        autocomplete="license postal-code">
                                </div>

                                <div class="form-group form-row">
                                    <label for="licenseeInfoCountry">Country</label>
                                    <select class="custom-select" name="licenseeInfoCountry" id="licenseeInfoCountry">
                                        <option value="" disabled>Select your option</option>
                                        <option value="Afghanistan" data-countrycode="AF">Afghanistan</option>
                                        <option value="Algeria" data-countrycode="DZ">Algeria</option>
                                        <option value="Argentina" selected data-countrycode="AR">Argentina</option>
                                    </select>
                                </div>
                                <input type="hidden" name="licenseeInfoCountryCode" value="US">
                            </div>
                        </div>

                        <div class="form-checkout__section form-checkout__section--payment-selection">

                            <h2>Payment method</h2>

                            <div class="payment-selection-options">
                                <label class="custom-control custom-radio">
                                    <input type="radio" id="credit-card-sca" name="paymentMethod"
                                        class="custom-control-input" checked value="credit-card-sca" __required
                                        data-submit-text="Place Order">
                                    <p class="custom-control-label" for="customRadio1">Credit card</p>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" id="paypal" name="paymentMethod" class="custom-control-input"
                                        value="paypal" __required data-submit-text="Continue to Paypal">
                                    <p class="custom-control-label" for="customRadio1">Paypal or credit cards</p>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" id="sepa-debit" name="paymentMethod"
                                        class="custom-control-input" value="sepa-debit" __required
                                        data-submit-text="Place Order">
                                    <p class="custom-control-label" for="customRadio1">Debit card</p>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" id="invoice" name="paymentMethod" class="custom-control-input"
                                        value="invoice" __required data-submit-text="invoice">
                                    <p class="custom-control-label" for="customRadio1">invoice</p>
                                </label>
                            </div>


                            <!-- STRIPE BOX  -->
                            <div class="form-checkout__stripecard">
                                <input type="hidden" name="stripePublishableKey"
                                    value="pk_test_51HCx6tKsUgOZ8cQNSm5QvHYqDuAovQwDnKyqwHQPwPpQ9Yg57jmRpZLxlTjLHDyECArHL1yVXY3asdQ2G4iTximm00x6bpuTaZ">

                                <label class="is-full is-required label__stripecard" hidden
                                    data-payment-method="credit-card-sca">
                                    <h6>Credit Card</h6>
                                    <div id="stripe-card"></div>
                                    <div class="error" role="alert"></div>
                                    <img class="stripe-badge" src="assets/images/powered_by_stripe.svg" alt="">
                                </label>

                                <label class="is-full is-required" hidden data-payment-method="sepa-debit">
                                    <h6>Stripe Sepa debit</h6>
                                    <div id="stripe-sepa-debit"></div>
                                    <small>By providing your IBAN and confirming this payment, you authorize My
                                        FoundryName. and Stripe, our payment service provider, to send instructions to
                                        your bank, debit your account and debit your bank, your account, according to
                                        these instructions. You are entitled to a refund from your bank in accordance
                                        with the terms of your agreement with your bank. A refund must be requested
                                        within 8 weeks of the date on which your account was debited.</small>
                                    <div class="error" role="alert"></div>
                                    <img class="stripe-badge" src="assets/images/powered_by_stripe.svg" alt="">
                                </label>

                            </div>


                            <label class="is-checkbox custom-control custom-checkbox cancellation__checkbox">
                                <input type="checkbox" class="custom-control-input" name="legal" __required>
                                <p class="custom-control-label">I accept the cancellation and privacy policy described
                                    in the <a class="link" href="licenses.php" target="_blank">terms and
                                        conditions</a>.</p>
                            </label>

                            <div class="form-checkout__submit">
                                <div class="error" role="alert"></div>
                                <button type="submit" class="btn btn-primary">Place order</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script src="https://js.stripe.com/v3/"></script>

    </main>

    <?php include('templating/footer.php'); ?>

</body>


<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

<!-- WEBFONTLOADER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
    integrity="sha256-4O4pS1SH31ZqrSO2A/2QJTVjTPqVe+jnYgOWUVr7EEc=" crossorigin="anonymous"></script>

<script src="assets/js/app.min.js"></script>

</html>