<div class="cart cart--checkout">
    <div class="cart__update-overlay"></div>
    <div class="cart__error-overlay" hidden></div>
    <!-- ANCHOR TABLE -->
    <div id="table">
        <!-- ANCHOR THEAD -->
        <div class="table__head d-none d-md-block">
            <div class="row table__row">
                <div class="table__heading col-md-3">Product</div>
                <div class="table__heading col">License</div>
                <div class="table__heading col-md-2 text-md-right">Price</div>
            </div>
        </div>
        <!-- ANCHOR TBODY -->
        <div class="table-body">
            <div class="table__row cartItem cartItem--digital" data-type="product" id="">
                <div class="row">
                    <div class="table__cell col-md-3">
                        <button class="remove-product-button" name="decrease">
                            <i class="icon i-clearCircle"></i>
                        </button>
                        <strong>Sans Font Regular</strong>
                        <span></span>
                    </div>
                    <div class="table__cell col-sm-12 col-md">
                        <div class="cartItem__license">
                            <span class="licenseType__label">Desktop License</span>
                            <span class="licenseSize__label"> Up to 3 computers </span>
                        </div>
                    </div>
                    <div class="table__cell col-md-2 text-md-right">
                        <span class="label d-md-none">Price</span>
                        <span class="cartItem__sum">U$D 30.00</span>
                        <span hidden class="cartItem__quantity">1</span>
                    </div>
                </div>
            </div>
            <div class="table__row cartItem cartItem--digital" data-type="product" id="">
                <div class="row">
                    <div class="table__cell col-md-3">
                        <button class="remove-product-button" name="decrease">
                            <i class="icon i-clearCircle"></i>
                        </button>
                        <strong>Sans Font Regular Italic</strong>
                        <span></span>
                    </div>
                    <div class="table__cell col-sm-12 col-md">
                        <div class="cartItem__license">
                            <span class="licenseType__label">Desktop License</span>
                            <span class="licenseSize__label"> Up to 3 computers </span>
                        </div>
                    </div>
                    <div class="table__cell col-md-2 text-md-right">
                        <span class="label d-md-none">Price</span>
                        <span class="cartItem__sum">U$D 30.00</span>
                        <span hidden class="cartItem__quantity">1</span>
                    </div>
                </div>
            </div>
            <div class="table__row cartItem cartItem--digital" data-type="product" id="">
                <div class="row">
                    <div class="table__cell col-md-3">
                        <button class="remove-product-button" name="decrease">
                            <i class="icon i-clearCircle"></i>
                        </button>
                        <strong>Sans Serif Bold</strong>
                        <span></span>
                    </div>
                    <div class="table__cell col-sm-12 col-md">
                        <div class="cartItem__license">
                            <span class="licenseType__label">Desktop License</span>
                            <span class="licenseSize__label"> Up to 3 computers </span>
                        </div>
                    </div>
                    <div class="table__cell col-md-2 text-md-right">
                        <span class="label d-md-none">Price</span>
                        <span class="cartItem__sum">U$D 30.00</span>
                        <span hidden class="cartItem__quantity">1</span>
                    </div>
                </div>
            </div>
            <div class="table__discountsInfo">
                <div class="table__row cartItem cartItem--coupon couponItem" id="discountDummy" hidden>
                    <div class="row">
                        <div class="table__cell col-md-3">
                            <button class="remove-product-button" name="remove">
                                <i class="icon i-clearCircle"></i>
                            </button>
                            <strong>Discount Code</strong>
                        </div>
                        <div class="table__cell col-md-3 mr-auto">
                            <span class="discount__codeText"></span> <span class="discount__value"></span>
                        </div>
                        <div class="table__cell col-md-2 text-md-right">
                            <span class="label d-md-none">Discount</span>
                            <span class="cartItem__sum"></span>
                            <span hidden class="cartItem__quantity">1</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="discountsForm">
                <div class="discountsForm__wrapper form-row">
                    <div class="col-auto mr-auto">
                        <input class="form-control" type="text" placeholder="Add coupon code" name="discountCode">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" id="codeButton" type="submit">Apply coupon</button>
                    </div>
                </div>
                <div class="error__message" hidden></div>
            </div>
        </div>
        <!-- ANCHOR TFOOTER -->
        <div class="table__foot">
            <div class="table__subtotalInfo">
                <div class="row table__row">
                    <div class="table__cell col subtotalInfo__label">Subtotal</div>
                    <div class="col text-right cart__subtotal">U$D 90.00</div>
                </div>
            </div>
            <div class="table__taxInfo" hidden>
                <div class="row table__row">
                    <div class="table__cell col taxInfo__label">Taxes</div>
                    <div class="table__totalTax cart__tax col text-right">U$D 0.00</div>
                </div>
            </div>
            <div class="table__totalInfo">
                <div class="row table__row">
                    <div class="table__totalLabel col">Total</div>
                    <div class="table__total cart__sum col text-right"> U$D 90.00 </div>
                </div>
            </div>
        </div>
    </div>
</div>