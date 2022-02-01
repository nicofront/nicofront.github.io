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

<body class="body-userorders">
    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
        
        <?php include('templating/navbar-account.php'); ?>
    </header>

    <main class="main" role="main">
        <section class="fc-section fc-section--pageHeader">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <h1>My Orders</h1>
                    <p>Download your fonts and review past orders and invoices.</p>
                </div>
            </div>
        </section>
        <section class="fc-section fc-section--orders">
            <!-- Accordions Container -->
            <div class="accordion" id="ordersAccordion">
                <!-- HEADER  -->
                <div class="orderlist__header">
                    <div class="row">
                        <div class="d-none d-md-block header__heading col">Invoice</div>
                        <div class="d-none d-md-block header__heading col">Invoice Date</div>
                        <div class="d-none d-md-block header__heading col-2 text-right">Total</div>
                        <div class="d-none d-md-block header__heading col-2"></div>
                    </div>
                </div>

                <!-- ORDERS CONTAINER-->
                <div class="orderlist__body">
                    <!-- ORDER ITEM -->
                    <div class="order">
                        <!-- ACCORDION HEADER  -->
                        <div class="order__header">
                            <div class="row align-items-center">
                                <div class="col-6 col-md">
                                    #600019 <span class="badge-pill badge-success orderInfo__status">Paid</span>
                                </div>
                                <div class="d-none d-md-block col col-md">
                                    April 26 2021 <span class="invoiceDate__time">17:27 UTC </span>
                                </div>
                                <div class="d-none d-md-block col-3 col-md-2 text-right">U$D 55.00</div>
                                <div class="col-6 col-md-2 text-right">
                                    <button class="btn btn-primary collapseOrderBtn" type="button"
                                        data-toggle="collapse" data-target="#order-600019" aria-expanded="true"
                                        aria-controls="order-600019">View Details</button>
                                </div>
                            </div>
                        </div>
                        <!-- ACCORDION BODY  -->
                        <div id="order-600019" class="collapse" aria-labelledby="headingOne"
                            data-parent="#ordersAccordion">
                            <!-- CARD BODY -->
                            <div class="order__body">
                                <div class="row productList__header">
                                    <div class="productList__heading d-none d-md-block col-md">Font</div>
                                    <div class="productList__heading d-none d-md-block col-md">License</div>
                                    <div class="productList__heading d-none d-md-block col-2 text-md-right">Subtotal
                                    </div>
                                    <div class="productList__heading d-none d-md-block col-2 text-md-right"></div>
                                </div>

                                <div class="row d-md-none">
                                    <div class="col col-md">
                                        April 26 2021 <span class="text-muted">17:27 </span>
                                    </div>
                                    <div class="col-3 col-md-2 text-right">U$D 55.00</div>
                                </div>

                                <div class="product__body">
                                    <div class="row">
                                        <div class="col-7 col-md item__title">Sans Serif Light </div>
                                        <div class="col col-md-2 order-md-last text-right">U$D 55.00 </div>
                                        <div class="col-md">
                                            <div class="item__license">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                        </div>
                                        <div class="col-2 order-last text-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div class="order__footer">
                                <a class="orderActionBtn d-block d-md-inline-block"
                                    href=""><strong>Download
                                        Order</strong></a>
                                <a class="orderActionBtn" href="order.php" target="_blank" class="order-invoice-button">View invoice</a>
                                <a class="orderActionBtn" href="" target="_blank" class="order-invoice-button">View License</a>
                            </div>
                        </div> <!-- END ACCORDION BODY -->
                    </div><!-- END ORDER ITEM -->
                    <!-- ORDER ITEM -->
                    <div class="order">
                        <!-- ACCORDION HEADER  -->
                        <div class="order__header">
                            <div class="row align-items-center">
                                <div class="col-6 col-md">
                                    #600018 <span class="badge-pill badge-success orderInfo__status">Paid</span>
                                </div>
                                <div class="d-none d-md-block col col-md">
                                    March 26 2021 <span class="invoiceDate__time">15:40 UTC </span>
                                </div>
                                <div class="d-none d-md-block col-3 col-md-2 text-right">U$D 160.00</div>
                                <div class="col-6 col-md-2 text-right">
                                    <button class="btn btn-primary collapseOrderBtn" type="button"
                                        data-toggle="collapse" data-target="#order-600018" aria-expanded="true"
                                        aria-controls="order-600018">View Details</button>
                                </div>

                            </div>
                        </div>
                        <!-- ACCORDION BODY  -->
                        <div id="order-600018" class="collapse" aria-labelledby="headingOne"
                            data-parent="#ordersAccordion">
                            <!-- CARD BODY -->
                            <div class="order__body">
                                <div class="row productList__header">
                                    <div class="productList__heading d-none d-md-block col-md">Font</div>
                                    <div class="productList__heading d-none d-md-block col-md">License</div>
                                    <div class="productList__heading d-none d-md-block col-2 text-md-right">Subtotal
                                    </div>
                                    <div class="productList__heading d-none d-md-block col-2 text-md-right"></div>
                                </div>

                                <div class="row d-md-none">
                                    <div class="col col-md">
                                        March 26 2021 <span class="text-muted">15:40 </span>
                                    </div>
                                    <div class="col-3 col-md-2 text-right">U$D 160.00</div>
                                </div>

                                <div class="product__body">
                                    <div class="row">
                                        <div class="col-7 col-md item__title">Sans Serif Light</div>
                                        <div class="col col-md-2 order-md-last text-right">U$D 100.00 </div>
                                        <div class="col-md">
                                            <div class="item__license">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                            <div class="item__license">

                                                <span class="item__licenseTypeLabel">Web</span>
                                                <span class="item__licenseSizeLabel">Up to 15k visitors</span>
                                            </div>
                                        </div>
                                        <div class="col-2 order-last text-right"></div>
                                    </div>
                                </div>

                                <div class="product__body">
                                    <div class="row">
                                        <div class="col-7 col-md item__title">
                                            Sans Serif Light Italic </div>
                                        <div class="col col-md-2 order-md-last text-right">U$D 60.00 </div>
                                        <div class="col-md">
                                            <div class="item__license">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                            <div class="item__license">
                                                <span class="item__licenseTypeLabel">Web</span>
                                                <span class="item__licenseSizeLabel">Up to 15k visitors</span>
                                            </div>
                                        </div>
                                        <div class="col-2 order-last text-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div class="order__footer">
                                <a class="orderActionBtn d-block d-md-inline-block"
                                    href=""><strong>Download
                                        Order</strong></a>
                                <a class="orderActionBtn" href="order.php" target="_blank" class="order-invoice-button">View invoice</a>
                                <a class="orderActionBtn" href="" target="_blank" class="order-invoice-button">View License</a>
                            </div>
                        </div> <!-- END ACCORDION BODY -->
                    </div><!-- END ORDER ITEM -->
                    <!-- ORDER ITEM -->
                    <div class="order">
                        <!-- ACCORDION HEADER  -->
                        <div class="order__header">
                            <div class="row align-items-center">
                                <div class="col-6 col-md">
                                    #600017 <span class="badge-pill badge-success orderInfo__status">Paid</span>
                                </div>
                                <div class="d-none d-md-block col col-md">
                                    January 18 2018 <span class="invoiceDate__time">13:06 UTC </span>
                                </div>
                                <div class="d-none d-md-block col-3 col-md-2 text-right">U$D 34.00</div>
                                <div class="col-6 col-md-2 text-right">
                                    <button class="btn btn-primary collapseOrderBtn" type="button"
                                        data-toggle="collapse" data-target="#order-600017" aria-expanded="true"
                                        aria-controls="order-600017">View Details</button>
                                </div>
                            </div>
                        </div>
                        <!-- ACCORDION BODY  -->
                        <div id="order-600017" class="collapse" aria-labelledby="headingOne"
                            data-parent="#ordersAccordion">
                            <!-- CARD BODY -->
                            <div class="order__body">
                                <div class="row productList__header">
                                    <div class="productList__heading d-none d-md-block col-md">Font</div>
                                    <div class="productList__heading d-none d-md-block col-md">License</div>
                                    <div class="productList__heading d-none d-md-block col-2 text-md-right">Subtotal</div>
                                    <div class="productList__heading d-none d-md-block col-2 text-md-right"></div>
                                </div>

                                <div class="row d-md-none">
                                    <div class="col col-md">
                                        January 18 2018 <span class="text-muted">13:06 </span>
                                    </div>
                                    <div class="col-3 col-md-2 text-right">U$D 34.00</div>
                                </div>

                                <div class="product__body">
                                    <div class="row">
                                        <div class="col-7 col-md item__title">
                                            Sans Serif bold </div>
                                        <div class="col col-md-2 order-md-last text-right">
                                            U$D 30.00 </div>
                                        <div class="col-md">
                                            <div class="item__license">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                        </div>
                                        <div class="col-2 order-last text-right"></div>
                                    </div>
                                </div>

                                <div class="product__body">
                                    <div class="row">
                                        <div class="col-7 col-md item__title">Sans Serif Regular </div>
                                        <div class="col col-md-2 order-md-last text-right">U$D 30.00 </div>
                                        <div class="col-md">
                                            <div class="item__license">
                                                <span class="item__licenseTypeLabel">Desktop</span>
                                                <span class="item__licenseSizeLabel">Up to 3 computers</span>
                                            </div>
                                        </div>
                                        <div class="col-2 order-last text-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div class="order__footer">
                                <a class="orderActionBtn d-block d-md-inline-block" href=""><strong>Download Order</strong></a>
                                <a class="orderActionBtn" href="order.php" target="_blank" class="order-invoice-button">View invoice</a>
                                <a class="orderActionBtn" href="" target="_blank" class="order-invoice-button">View License</a>
                            </div>
                        </div> <!-- END ACCORDION BODY -->
                    </div><!-- END ORDER ITEM -->
                </div> <!-- ORDERS CONTAINER end -->
            </div> <!-- END Accordions Container -->
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