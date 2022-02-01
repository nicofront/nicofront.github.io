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
    <title>Cart | FoundryCore | A web solution for independent font foundries</title>
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

        <section class="fc-section fc-section--form fc-section--form-login">
            <div class="fc-section__wrapper">
                <div class="fc-section__content">
                    <h2>Login or Sign up</h2>
                    <div class="fc-formWrapper">
                        <form method="POST" action="">
                            <input type="hidden" name="redirect" value="cart">
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input class="form-control" type="email" id="username" name="username" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="password"> Password <a class="ml-2 text-muted" href="account-reset.php">Forgot password?</a>
                                </label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="login" value="login">Sign in</button>
                                <span class="btn">Don’t have an account? <a class="link" href="account-signup.php">Sign up now</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://js.stripe.com/v3/"></script>
    </main>
    
    <?php include('templating/footer.php'); ?>
</body>
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- WEBFONTLOADER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js" integrity="sha256-4O4pS1SH31ZqrSO2A/2QJTVjTPqVe+jnYgOWUVr7EEc=" crossorigin="anonymous"></script>
<script src="assets/js/app.min.js"></script>

</html>