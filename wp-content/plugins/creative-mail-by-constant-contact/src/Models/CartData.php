<?php

namespace CreativeMail\Models;

class CartData
{
    /**
     * Coupons array
     *
     * @var array
     */
    public $coupons;
    /**
     * Coupons currency
     *
     * @var string
     */
    public $currency;
    /**
     * Coupons currency symbol
     *
     * @var string
     */
    public $currency_symbol;
    /**
     * Cart items
     *
     * @var array
     */
    public $products;
    /**
     * User data
     *
     * @var User
     */
    public $user;
    /**
     * Cart Shipping Total
     *
     * @var float
     */
    public $shipping_total;
    /**
     * Cart Shipping Taxes
     *
     * @var array
     */
    public $shipping_taxes;
}
