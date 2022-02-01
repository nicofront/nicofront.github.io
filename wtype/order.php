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

<body class="body-order">
    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
    </header>

    <main class="main" role="main">

        <div class="container fc-section--invoice">
            <div class="invoice">
                <header class="invoice-header">
                    <div class="invoice-header__actions">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Invoice</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="action__buttons">
                                    <a href="" class="btn btn-primary">Download your fonts</a>
                                    <button type="button" class="btn btn-primary" onclick="window.print()">Print Invoice</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="invoice-header__infos">
                        Invoice Number: 600025<br>
                        Date: 12.11.2021<br>
                    </p>

                    <div class="row">
                        <div class="invoice-header__contact col-md">
                            <h6>From:</h6>
                            <p>The Company Ltd.<br>
                                123 Fake Street<br>
                                City 1234<br>
                                Country</p>
                        </div>

                        <div class="invoice-header__contact col-md">
                            <h6>To:</h6>
                            <p>
                                <span class="contactInfo__item contactInfo__name">Guido Ferreyra</span>
                                <span class="contactInfo__item contactInfo__street ">Calle Falsa 123</span>
                                <span class="contactInfo__item contactInfo__postalcode ">5000</span>
                                <span class="contactInfo__item contactInfo__city ">Cordoba</span>
                                <span class="contactInfo__item contactInfo__vatid ">26375244</span>
                            </p>
                        </div>
                    </div>
                </header>

                <div class="invoice__overview">
                    <h2 class="invoice__heading">Summary</h2>
                    <div class="cart">
                        <!-- ANCHOR TABLE -->
                        <div id="table">
                            <!-- ANCHOR THEAD -->
                            <div class="table__head d-none d-md-block">
                                <div class="row table__row">
                                    <div class="table__heading col-md-4">Product</div>
                                    <div class="table__heading col">License</div>
                                    <div class="table__heading col-auto text-md-right">Price</div>
                                </div>
                            </div>
                            <!-- ANCHOR TBODY -->
                            <div class="table__body">
                                <div class="cartItem">
                                    <div class="row table__row">
                                        <div class="table__cell col-md-4">
                                            <span class="cartItem__productTitle">Sans Serif Regular</span>
                                        </div>

                                        <div class="table__cell col-sm-12 col-md">
                                            <div class="item__licenseEntry">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                        </div>

                                        <div class="table__cell col-auto text-md-right">
                                            <span class="label d-md-none">Price</span>
                                            <span class="cart-item__sum">U$D&nbsp;30.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cartItem">
                                    <div class="row table__row">
                                        <div class="table__cell col-md-4">
                                            <span class="cartItem__productTitle">Sans Serif Regular Italic </span>
                                        </div>

                                        <div class="table__cell col-sm-12 col-md">
                                            <div class="item__licenseEntry">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                        </div>

                                        <div class="table__cell col-auto text-md-right">
                                            <span class="label d-md-none">Price</span>
                                            <span class="cart-item__sum">U$D&nbsp;30.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cartItem">
                                    <div class="row table__row">
                                        <div class="table__cell col-md-4">
                                            <span class="cartItem__productTitle">Sans Serif Bold</span>
                                        </div>

                                        <div class="table__cell col-sm-12 col-md">
                                            <div class="item__licenseEntry">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                        </div>

                                        <div class="table__cell col-auto text-md-right">
                                            <span class="label d-md-none">Price</span>
                                            <span class="cart-item__sum">U$D&nbsp;30.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR TFOOTER -->
                            <div class="table__foot">
                                <div class="table__taxInfo">
                                    <div class="row table__row">
                                        <div class="table__cell col">Taxes</div>
                                        <div class="table__totalTax cart__tax col text-right">U$D&nbsp;0.00</div>
                                    </div>
                                </div>
                                <div class="table__totalInfo">
                                    <div class="row table__row">
                                        <div class="table__totalLabel col">Total</div>
                                        <div class="table__total cart__sum col text-right">
                                            U$D&nbsp;90.00 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="invoice__infos">
                    <div class="row">
                        <div class="col-md">
                            <div class="invoice__licensee-info">
                                <h3 class="invoice__heading">Licensee</h3>
                                <p>

                                    <span class="licenseeInfo__item licenseeInfo__name">
                                        Guido Ferreyra </span>

                                    <span class="licenseeInfo__item licenseeInfo__street ">Calle Falsa 123</span>
                                    <span class="licenseeInfo__item licenseeInfo__postalcode ">5000</span>
                                    <span class="licenseeInfo__item licenseeInfo__city ">Cordoba</span>
                                    <span class="licenseeInfo__item licenseeInfo__vatid ">26375244</span>

                                </p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="invoice__paying-info">
                                <h3 class="invoice__heading">Payment</h3>
                                <p>
                                    You have chosen <strong>Credit card</strong> as payment method.
                                    The bill was settled on 12.11.2021, <span class="invoiceDate__time">21:00
                                        UTC</span>.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="invoice__footer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, repellendus numquam natus
                        deserunt reiciendis iusto debitis laudantium sint velit consequatur voluptatibus autem
                        accusantium. Amet odio ipsa quidem consectetur ipsam animi!</p>
                </div>
            </div>
        </div>

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