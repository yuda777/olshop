@extends('layouts.app')

@section('content')
<div class="page-body-content" style="margin-top: 60px;">
    <div id="shopify-section-static-product" class="shopify-section section-product">
        <script type="application/json" data-section-type="static-product" data-section-id="static-product" data-section-data=""></script>
        <div class="content-area">
            <div class="breadcrumb-navigation">
                <span><a data-savepage-href="/" href="">Home</a></span>
                <span class="sep">/</span> <span><a data-savepage-href="/collections/all" href="collections/all">Products</a></span>
                <span class="sep">/</span> <span>{{ $item->item_name }}</span>
            </div>
        </div>
        <div class="content content-area">
            <section class=" product-area clearfix">
                <script type="application/json" data-images=""></script>
                <div class=" showcase product-images left-main-image">
                    <div class="container">
                        <div class="product-main-image wrap ">
                            {{-- <img src="{{ asset('storage/g1.webp') }}"> --}}
                            {{-- <div id="app">
                            <hooper-component></hooper-component>
                            </div> --}}
                            <div class="carousel carousel-main">
                                <div class="carousel-cell">
                                    <img class="" src="../storage/g1.webp">
                                </div>
                                <div class="carousel-cell">
                                    <img class="" src="../storage/g2.webp">
                                </div>
                                <div class="carousel-cell">
                                    <img class="" src="../storage/g3.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pager  left-main-image ">
                        <div class="inner carousel-nav">
                            <div class="carousel-cell wrap thumb is-nav-selected first ">
                                <img src="{{ asset('storage/g1.webp') }}" alt="{{ $item->item_name }}">
                            </div>
                            <div class="carousel-cell wrap thumb">
                                <img src="{{ asset('storage/g2.webp') }}" alt="{{ $item->item_name }}">
                            </div>
                            <div class="carousel-cell wrap thumb last">
                                <img src="{{ asset('storage/g3.webp') }}" alt="{{ $item->item_name }}" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-wrapper">
                    <div class=" product-details product-details-alignment-left border ">
                        <div class="header">
                            <h1 class="title">
                                {{ $item->item_name }}
                            </h1>
                            <p class="price sale">
                                <span class="money" data-currency="IDR">Rp 185.000</span>
                            </p>
                        </div>
                        <div class="options  ">
                            <form method="post" action="/cart/add" id="6223008432303" accept-charset="UTF-8" class=" product-form product-form-has-spb " enctype="multipart/form-data" data-product-form="">
                                <input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                                <div class="product-form-grid product-form-grid-radio">
                                    <div class=" option-header js-required ">
                                        <span class="option-name">Size:</span>
                                    </div>
                                    <div class=" option-values js-required">
                                        <div class="option-value">
                                            <input class="option-value-input" type="radio" name="Size" value="S" tabindex="0" aria-label="S" checked="" data-product-option="option1" data-soldout="false">
                                            <span class="option-value-name">S</span>
                                        </div>
                                        <div class="option-value">
                                            <input class="option-value-input" type="radio" name="Size" value="M" tabindex="0" aria-label="M" data-product-option="option1" data-soldout="false">
                                            <span class="option-value-name">M</span>
                                        </div>
                                        <div class="option-value">
                                            <input class="option-value-input" type="radio" name="Size" value="L" tabindex="0" aria-label="L" data-product-option="option1" data-soldout="false">
                                            <span class="option-value-name">L</span>
                                        </div>
                                        <div class="option-value">
                                            <input class="option-value-input" type="radio" name="Size" value="XL" tabindex="0" aria-label="XL" data-product-option="option1" data-soldout="false">
                                            <span class="option-value-name">XL</span>
                                        </div>
                                        <div class="option-value">
                                            <input class="option-value-input" type="radio" name="Size" value="XXL" tabindex="0" aria-label="XXL" data-product-option="option1" data-soldout="false">
                                            <span class="option-value-name">XXL</span>
                                        </div>
                                    </div>
                                    <div class="product-infiniteoptions js-required side-labels" id="infiniteoptions-container"></div>
                                    <div class="product-uploadery js-required side-labels" id="uploadery-container"></div>
                                    <label class=" product-quantity-label ">
                                    Quantity:
                                    </label>
                                    <input type="text" class=" product-quantity-input " name="quantity" value="1">
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=+6287883114043&text=Beli {{ $item->item_name }}">Click WhatsApp</a>
                                <button class="product-submit action-button submit desaturated addtocart-button-active" data-product-submit="" data-product-variant-id="" value="Add to cart">
                                    <span class="product-card-interaction-addtocart-available">
                                    Add to cart
                                    </span>
                                    <span class="product-card-interaction-addtocart-error">
                                    Unavailable
                                    </span>
                                    <div class="product-card-interaction-addtocart-spinner">
                                        <svg class="svg-icon icon-spinner " xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                            <path fill="currentColor" fill-rule="evenodd" d="M1.0436 10.9683C1.47582 10.9683 1.8262 11.3255 1.8262 11.7661C1.8262 17.4946 6.38122 22.1385 12.0001 22.1385C17.619 22.1385 22.174 17.4946 22.174 11.7661C22.174 11.3255 22.5244 10.9683 22.9566 10.9683C23.3889 10.9683 23.7392 11.3255 23.7392 11.7661C23.7392 18.3759 18.4835 23.7342 12.0001 23.7342C5.51677 23.7342 0.260986 18.3759 0.260986 11.7661C0.260986 11.3255 0.611372 10.9683 1.0436 10.9683Z" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                        </svg>
                                    </div>
                                </button>
                                <div data-shopify="payment-button" class="shopify-payment-button">
                                    <div>
                                        <div>
                                            <div>
                                                <div class="shopify-cleanslate">
                                                    <div id="shopify-svg-symbols" class="VoW3UuJKYxZJHMpUkDNUv" aria-hidden="true">
                                                    </div>
                                                </div>
                                                <button style="width: 100%;" type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded _2ogcW-Q9I-rgsSkNbRiJzA _2EiMjnumZ6FVtlC7RViKtj _2-dUletcCZ2ZL1aaH0GXxT" data-testid="Checkout-button">Buy it now</button>
                                                {{-- <button aria-disabled="true" aria-hidden="true" class="shopify-payment-button__more-options _2ogcW-Q9I-rgsSkNbRiJzA shopify-payment-button__button--hidden" type="button" data-testid="sheet-open-button">More payment options</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product-interactions product-interactions-2">
                            <a class="product-interaction email-us" href="mailto:zerone@gmai.com?Subject=CORWIN GREEN TEE">
                                <svg class="svg-icon icon-mail " xmlns="http://www.w3.org/2000/svg" width="27" height="20" fill="none" viewBox="0 0 27 22" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                    <title>Mail Icon</title>
                                    <path fill="currentColor" fill-rule="evenodd" transform="translate(0 1)" d="M1.458 1.5h24.084v17H1.458v-17zM0 0H27v20H0V0zm3.461 4.608l9.72 7.222.427.317.427-.317 9.72-7.222-.854-1.216-9.293 6.905-9.293-6.905-.854 1.216z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                </svg>
                                <span class="product-interaction-title">Email us about this product</span>
                            </a>
                            <div class="product-interaction share-this">
                                <div class="sharethis">
                                    <button class="sharethis-trigger" data-sharethis="">
                                        <svg class="svg-icon icon-share " xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="none" viewBox="0 0 18 21" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                            <title>Share Icon</title>
                                            <path fill="currentColor" fill-rule="evenodd" d="M9.545.56L9 0l-.545.56-5.143 5.286 1.09 1.122L8.23 3.035V15.45H9.77V3.035l3.826 3.933 1.091-1.122L9.545.561zM0 11.75V21h18v-9.25h-1.543v7.664H1.543V11.75H0z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                        </svg>
                                        <span class="sharethis-title">Share this</span>
                                    </button>
                                    <div class="sharethis-modal" data-sharethis-modal="">
                                        <a class="sharethis-link sharethis-facebook" href="http://www.facebook.com/sharer.php?u=https">
                                            <svg class="svg-icon icon-share-facebook " xmlns="http://www.w3.org/2000/svg" width="9" height="18" fill="none" viewBox="0 0 9 18" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Facebook Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M7.861 9.007H5.394V18H1.737V9.007H0V5.829h1.738V3.772C1.737 2.3 2.421 0 5.427 0l2.709.01v3.085H6.17c-.321 0-.775.165-.775.866v1.868h2.786l-.32 3.178z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-twitter" href="http://twitter.com/share?url=https">
                                            <svg class="svg-icon icon-share-twitter " xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="none" viewBox="0 0 20 17" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Twitter Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M17.64 2.576a4.115 4.115 0 0 0 1.803-2.27c-.792.47-1.67.812-2.605.996a4.102 4.102 0 0 0-6.99 3.742A11.647 11.647 0 0 1 1.392.757 4.083 4.083 0 0 0 .837 2.82a4.1 4.1 0 0 0 1.825 3.413A4.086 4.086 0 0 1 .803 5.72v.052a4.105 4.105 0 0 0 3.29 4.022 4.108 4.108 0 0 1-1.852.07 4.106 4.106 0 0 0 3.832 2.85 8.231 8.231 0 0 1-5.094 1.755A8.33 8.33 0 0 1 0 14.412a11.612 11.612 0 0 0 6.289 1.843c7.545 0 11.671-6.25 11.671-11.672 0-.178-.004-.355-.011-.53a8.339 8.339 0 0 0 2.047-2.124 8.202 8.202 0 0 1-2.357.646h.001z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-pinterest" href="http://pinterest.com/pin/create/button/?url=https">
                                            <svg class="svg-icon icon-share-pinterest " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Pinterest Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M10 0C4.479 0 0 4.477 0 10a9.999 9.999 0 0 0 6.355 9.311c-.087-.79-.166-2.005.035-2.868.183-.781 1.173-4.971 1.173-4.971s-.3-.6-.3-1.485c0-1.388.808-2.429 1.81-2.429.854 0 1.265.641 1.265 1.409 0 .859-.545 2.141-.827 3.33-.238.996.5 1.806 1.48 1.806 1.776 0 3.144-1.873 3.144-4.577 0-2.394-1.72-4.068-4.178-4.068-2.845 0-4.513 2.134-4.513 4.34 0 .859.329 1.78.741 2.281.083.1.094.188.072.288-.075.315-.245.995-.28 1.133-.043.183-.143.223-.334.134-1.248-.581-2.03-2.407-2.03-3.875 0-3.154 2.292-6.05 6.609-6.05 3.468 0 6.165 2.472 6.165 5.775 0 3.446-2.175 6.221-5.191 6.221-1.013 0-1.965-.527-2.292-1.15l-.625 2.378c-.225.868-.834 1.957-1.242 2.62A10 10 0 0 0 9.999 20C15.521 20 20 15.523 20 10 20 4.478 15.521.001 10 .001V0z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-google" href="https://plus.google.com/share?url=https">
                                            <svg class="svg-icon icon-share-google " xmlns="http://www.w3.org/2000/svg" width="30" height="19" fill="none" viewBox="0 0 30 19" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Google Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M24.555 5.415h2.707c.004.902.008 1.81.017 2.712.905.009 1.816.009 2.721.018v2.699c-.905.009-1.811.013-2.72.022-.01.907-.014 1.81-.018 2.713h-2.713c-.01-.902-.01-1.806-.018-2.708l-2.72-.027V8.145c.904-.009 1.81-.015 2.72-.018.004-.908.013-1.81.022-2.712h.002zM.025 9.025C.108 4.13 4.62-.155 9.528.008c2.353-.11 4.563.913 6.365 2.344a33.87 33.87 0 0 1-2.415 2.496c-2.166-1.492-5.246-1.92-7.412-.195-3.097 2.135-3.238 7.18-.26 9.48 2.9 2.62 8.377 1.319 9.177-2.695-1.816-.027-3.635 0-5.45-.06a388.181 388.181 0 0 1-.005-3.238c3.034-.008 6.07-.014 9.108.01.182 2.54-.154 5.243-1.72 7.342-2.37 3.326-7.127 4.295-10.84 2.872C2.35 16.95-.289 13.025.025 9.024z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-email" href="mailto:?Subject=CORWIN GREEN TEE&Body=Check out CORWIN GREEN TEE at products/corwin-green-tee!">
                                            <svg class="svg-icon icon-share-email " xmlns="http://www.w3.org/2000/svg" width="29" height="20" fill="none" viewBox="0 0 29 20" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Email Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M1.875 0C.84 0 0 .84 0 1.875v16.25C0 19.161.84 20 1.875 20h25c1.035 0 1.875-.84 1.875-1.875V1.875C28.75.839 27.91 0 26.875 0h-25zm2.693 3.125a.937.937 0 1 0-1.086 1.528L14.375 12.4l10.893-7.747a.937.937 0 1 0-1.087-1.528L14.376 10.1 4.568 3.125z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="rte">

                                <div style="text-align: left;">
                                    <div data-mce-fragment="1">
                                        <div data-mce-fragment="1"><span data-mce-fragment="1">Create it effortlessly cool look with MOSKAV collection</span></div>
                                        <div data-mce-fragment="1">
                                            <span data-mce-fragment="1"></span><br data-mce-fragment="1">
                                        </div>
                                        <div data-mce-fragment="1">
                                            <ul data-mce-fragment="1">
                                                <li data-mce-fragment="1">Polo Shirt</li>
                                                <li data-mce-fragment="1">Combad 30s Material</li>
                                                <li data-mce-fragment="1"><span data-mce-fragment="1">Embroidary</span></li>
                                                <li data-mce-fragment="1">Red , Navy and Green Color</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div data-mce-fragment="1">
                                        <ul data-mce-fragment="1"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="related-products">
                <h2 class="section-title section-border">Related products</h2>
                <ul class="product-list">
                    <li class="
                        product
                        product-6213242880175
                        flush
                        product-card-alt
                        " data-product-item="">
                        <div class="product-inner">
                            <figure class="product-card-figure">
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_{size}_crop_center.jpg?v=1610097094" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="ORANGE WHITE-GREEN"></span>
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_{size}_crop_center.jpg?v=1610097094" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="ORANGE WHITE-GREEN"></span>
                                <noscript data-rimg-noscript="">
                                    <img src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_600x867.jpg?v=1610097094" alt="ORANGE WHITE-GREEN"
                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_600x867.jpg?v=1610097094 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_762x1101.jpg?v=1610097094 1.27x">
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_288x384.jpg?v=1610097094" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_600x867.jpg?v=1610097094" src="" alt="ORANGE WHITE-GREEN" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_{size}.jpg?v=1610097094" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_a_288x384.jpg?v=1610097094 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <noscript data-rimg-noscript="">
                                    <img
                                        src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_600x867.jpg?v=1610097094"
                                        alt="ORANGE WHITE-GREEN"

                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_600x867.jpg?v=1610097094 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_762x1101.jpg?v=1610097094 1.27x"
                                        >
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_288x384.jpg?v=1610097094" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_600x867.jpg?v=1610097094" src="" alt="ORANGE WHITE-GREEN" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_{size}.jpg?v=1610097094" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT018_b_288x384.jpg?v=1610097094 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <a data-savepage-href="/collections/featured/products/orange-white-green" href="collections/featured/products/orange-white-green" class=""></a>
                                <a class="
                                    product-card-overlay
                                    " data-savepage-href="/collections/featured/products/orange-white-green" href="collections/featured/products/orange-white-green">
                                    <div class="product-card-overlay-content">
                                        <div class="product-card-details">
                                            <h2 class="title">
                                                ORANGE WHITE-GREEN
                                            </h2>
                                            <p class="price"><span class="money" data-currency-idr="Rp 160.000,00" data-currency="IDR">Rp 160.000,00</span></p>
                                        </div>
                                    </div>
                                </a>
                                <div class="badges-wrapper">
                                </div>
                            </figure>
                            <div class="product-card-footer">
                                <div class="product-card-interactions">
                                    <button class="product-card-interaction product-card-interaction-quickshop" data-product-card-interaction-quickshop="" data-product-sha256="c8ccd9de5c3be4a96872461c6a7b771182d795e7af657a767f72d9fe6838741f" data-product-url="/collections/featured/products/orange-white-green">
                                    Quickshop
                                    </button>
                                    <button class="product-card-interaction product-card-interaction-addtocart addtocart-button-active" data-product-card-interaction-addtocart="" data-product-variant-id="38020605870255">
                                        <span class="product-card-interaction-addtocart-available">
                                        Add to cart
                                        </span>
                                        <span class="product-card-interaction-addtocart-error">
                                        Unavailable
                                        </span>
                                        <div class="product-card-interaction-addtocart-spinner">
                                            <svg class="svg-icon icon-spinner " xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <path fill="currentColor" fill-rule="evenodd" d="M1.0436 10.9683C1.47582 10.9683 1.8262 11.3255 1.8262 11.7661C1.8262 17.4946 6.38122 22.1385 12.0001 22.1385C17.619 22.1385 22.174 17.4946 22.174 11.7661C22.174 11.3255 22.5244 10.9683 22.9566 10.9683C23.3889 10.9683 23.7392 11.3255 23.7392 11.7661C23.7392 18.3759 18.4835 23.7342 12.0001 23.7342C5.51677 23.7342 0.260986 18.3759 0.260986 11.7661C0.260986 11.3255 0.611372 10.9683 1.0436 10.9683Z" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="product-card-footer-mobile">
                                <div class="product-card-details">
                                    <h2 class="title">
                                        <a data-savepage-href="/collections/featured/products/orange-white-green" href="collections/featured/products/orange-white-green">
                                        ORANGE WHITE-GREEN
                                        </a>
                                    </h2>
                                    <p class="price"><span class="money" data-currency-idr="Rp 160.000,00" data-currency="IDR">Rp 160.000,00</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" product product-6213232918703 product-card-alt " data-product-item="">
                        <div class="product-inner">
                            <figure class="product-card-figure">
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_{size}_crop_center.jpg?v=1610096896" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="BLUE SKIES-CORDUROY HAT"></span>
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_{size}_crop_center.jpg?v=1610096896" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="BLUE SKIES-CORDUROY HAT"></span>
                                <noscript data-rimg-noscript="">
                                    <img src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_600x867.jpg?v=1610096896"
                                        alt="BLUE SKIES-CORDUROY HAT"

                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_600x867.jpg?v=1610096896 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_762x1101.jpg?v=1610096896 1.27x"
                                        >
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_288x384.jpg?v=1610096896" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_600x867.jpg?v=1610096896" src="" alt="BLUE SKIES-CORDUROY HAT" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_{size}.jpg?v=1610096896" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_a_288x384.jpg?v=1610096896 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <noscript data-rimg-noscript="">
                                    <img
                                        src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_600x867.jpg?v=1610096896"
                                        alt="BLUE SKIES-CORDUROY HAT"

                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_600x867.jpg?v=1610096896 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_762x1101.jpg?v=1610096896 1.27x"
                                        >
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_288x384.jpg?v=1610096896" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_600x867.jpg?v=1610096896" src="" alt="BLUE SKIES-CORDUROY HAT" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_{size}.jpg?v=1610096896" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT019_b_288x384.jpg?v=1610096896 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <a data-savepage-href="/collections/featured/products/blue-skies-corduroy-hat" href="collections/featured/products/blue-skies-corduroy-hat" class=""></a>
                                <a class="
                                    product-card-overlay
                                    " data-savepage-href="/collections/featured/products/blue-skies-corduroy-hat" href="collections/featured/products/blue-skies-corduroy-hat">
                                    <div class="product-card-overlay-content">
                                        <div class="product-card-details">
                                            <h2 class="title">
                                                BLUE SKIES-CORDUROY HAT
                                            </h2>
                                            <p class="price"><span class="money" data-currency-idr="Rp 160.000,00" data-currency="IDR">Rp 160.000,00</span></p>
                                        </div>
                                    </div>
                                </a>
                                <div class="badges-wrapper">
                                </div>
                            </figure>
                            <div class="product-card-footer">
                                <div class="product-card-interactions">
                                    <button class="product-card-interaction product-card-interaction-quickshop" data-product-card-interaction-quickshop="" data-product-sha256="a4669d5913acaab8568e3ca0656b00cc3931656bb8692082da2ee7d9baac75fe" data-product-url="/collections/featured/products/blue-skies-corduroy-hat">
                                    Quickshop
                                    </button>
                                    <button class="product-card-interaction product-card-interaction-addtocart addtocart-button-active" data-product-card-interaction-addtocart="" data-product-variant-id="38020588077231">
                                        <span class="product-card-interaction-addtocart-available">
                                        Add to cart
                                        </span>
                                        <span class="product-card-interaction-addtocart-error">
                                        Unavailable
                                        </span>
                                        <div class="product-card-interaction-addtocart-spinner">
                                            <svg class="svg-icon icon-spinner " xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <path fill="currentColor" fill-rule="evenodd" d="M1.0436 10.9683C1.47582 10.9683 1.8262 11.3255 1.8262 11.7661C1.8262 17.4946 6.38122 22.1385 12.0001 22.1385C17.619 22.1385 22.174 17.4946 22.174 11.7661C22.174 11.3255 22.5244 10.9683 22.9566 10.9683C23.3889 10.9683 23.7392 11.3255 23.7392 11.7661C23.7392 18.3759 18.4835 23.7342 12.0001 23.7342C5.51677 23.7342 0.260986 18.3759 0.260986 11.7661C0.260986 11.3255 0.611372 10.9683 1.0436 10.9683Z" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="product-card-footer-mobile">
                                <div class="product-card-details">
                                    <h2 class="title">
                                        <a data-savepage-href="/collections/featured/products/blue-skies-corduroy-hat" href="collections/featured/products/blue-skies-corduroy-hat">
                                        BLUE SKIES-CORDUROY HAT
                                        </a>
                                    </h2>
                                    <p class="price"><span class="money" data-currency-idr="Rp 160.000,00" data-currency="IDR">Rp 160.000,00</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="
                        product
                        product-6213223776431
                        product-card-alt
                        " data-product-item="">
                        <div class="product-inner">
                            <figure class="product-card-figure">
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_{size}_crop_center.jpg?v=1610096704" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="FLAG-BLACK WASH HAT"></span>
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_{size}_crop_center.jpg?v=1610096704" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="FLAG-BLACK WASH HAT"></span>
                                <noscript data-rimg-noscript="">
                                    <img
                                        src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_600x867.jpg?v=1610096704"
                                        alt="FLAG-BLACK WASH HAT"

                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_600x867.jpg?v=1610096704 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_762x1101.jpg?v=1610096704 1.27x"
                                        >
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_288x384.jpg?v=1610096704" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_600x867.jpg?v=1610096704" src="" alt="FLAG-BLACK WASH HAT" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_{size}.jpg?v=1610096704" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_a_288x384.jpg?v=1610096704 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <noscript data-rimg-noscript="">
                                    <img src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_600x867.jpg?v=1610096704"
                                        alt="FLAG-BLACK WASH HAT"
                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_600x867.jpg?v=1610096704 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_762x1101.jpg?v=1610096704 1.27x">
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_288x384.jpg?v=1610096704" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_600x867.jpg?v=1610096704" src="" alt="FLAG-BLACK WASH HAT" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_{size}.jpg?v=1610096704" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1220HT017_b_288x384.jpg?v=1610096704 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <a data-savepage-href="/collections/featured/products/flag-black-wash-hat" href="collections/featured/products/flag-black-wash-hat" class=""></a>
                                <a class="
                                    product-card-overlay
                                    " data-savepage-href="/collections/featured/products/flag-black-wash-hat" href="collections/featured/products/flag-black-wash-hat">
                                    <div class="product-card-overlay-content">
                                        <div class="product-card-details">
                                            <h2 class="title">
                                                FLAG-BLACK WASH HAT
                                            </h2>
                                            <p class="price"><span class="money" data-currency-idr="Rp 180.000,00" data-currency="IDR">Rp 180.000,00</span></p>
                                        </div>
                                    </div>
                                </a>
                                <div class="badges-wrapper">
                                </div>
                            </figure>
                            <div class="product-card-footer">
                                <div class="product-card-interactions">
                                    <button class="product-card-interaction product-card-interaction-quickshop" data-product-card-interaction-quickshop="" data-product-sha256="011d009fb31ec7f00d4dd260573d34375b265b02ee3834ea37ba0a85ef2972b5" data-product-url="/collections/featured/products/flag-black-wash-hat">
                                    Quickshop
                                    </button>
                                    <button class="product-card-interaction product-card-interaction-addtocart addtocart-button-active" data-product-card-interaction-addtocart="" data-product-variant-id="38020567695535">
                                        <span class="product-card-interaction-addtocart-available">
                                            Add to cart
                                        </span>
                                        <span class="product-card-interaction-addtocart-error">
                                            Unavailable
                                        </span>
                                        <div class="product-card-interaction-addtocart-spinner">
                                            <svg class="svg-icon icon-spinner " xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <path fill="currentColor" fill-rule="evenodd" d="M1.0436 10.9683C1.47582 10.9683 1.8262 11.3255 1.8262 11.7661C1.8262 17.4946 6.38122 22.1385 12.0001 22.1385C17.619 22.1385 22.174 17.4946 22.174 11.7661C22.174 11.3255 22.5244 10.9683 22.9566 10.9683C23.3889 10.9683 23.7392 11.3255 23.7392 11.7661C23.7392 18.3759 18.4835 23.7342 12.0001 23.7342C5.51677 23.7342 0.260986 18.3759 0.260986 11.7661C0.260986 11.3255 0.611372 10.9683 1.0436 10.9683Z" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="product-card-footer-mobile">
                                <div class="product-card-details">
                                    <h2 class="title">
                                        <a data-savepage-href="/collections/featured/products/flag-black-wash-hat" href="collections/featured/products/flag-black-wash-hat">
                                        FLAG-BLACK WASH HAT
                                        </a>
                                    </h2>
                                    <p class="price"><span class="money" data-currency-idr="Rp 180.000,00" data-currency="IDR">Rp 180.000,00</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" product product-6149346459823 last  product-card-alt " data-product-item="">
                        <div class="product-inner">
                            <figure class="product-card-figure">
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_{size}_crop_center.jpg?v=1607592064" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="SEVILLE WHITE-BLUE TEE"></span>
                                <span class="product-card-figure-ie" data-rimg="lazy" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_{size}_crop_center.jpg?v=1607592064" data-rimg-max="762x1100" data-rimg-crop="center" role="img" aria-label="SEVILLE WHITE-BLUE TEE"></span>
                                <noscript data-rimg-noscript="">
                                    <img src="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_600x867.jpg?v=1607592064" alt="SEVILLE WHITE-BLUE TEE"  srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_600x867.jpg?v=1607592064 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_762x1101.jpg?v=1607592064 1.27x">
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_288x384.jpg?v=1607592064" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_600x867.jpg?v=1607592064" src="" alt="SEVILLE WHITE-BLUE TEE" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_{size}.jpg?v=1607592064" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_a_288x384.jpg?v=1607592064 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <noscript data-rimg-noscript="">
                                    <img src="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_600x867.jpg?v=1607592064" alt="SEVILLE WHITE-BLUE TEE"  srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_600x867.jpg?v=1607592064 1x, //cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_762x1101.jpg?v=1607592064 1.27x">
                                </noscript>
                                <img data-savepage-currentsrc="https://cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_288x384.jpg?v=1607592064" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_600x867.jpg?v=1607592064" src="" alt="SEVILLE WHITE-BLUE TEE" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_{size}.jpg?v=1607592064" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/M1120TS039_b_288x384.jpg?v=1607592064 1.00x" srcset="" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='600'%20height='867'></svg>">
                                <a data-savepage-href="/collections/featured/products/seville-white-blue-tee" href="collections/featured/products/seville-white-blue-tee" class=""></a>
                                <a class=" product-card-overlay " data-savepage-href="/collections/featured/products/seville-white-blue-tee" href="collections/featured/products/seville-white-blue-tee">
                                    <div class="product-card-overlay-content">
                                        <div class="product-card-details">
                                            <h2 class="title">
                                                SEVILLE WHITE-BLUE TEE
                                            </h2>
                                            <p class="price"><span class="money" data-currency-idr="Rp 160.000,00" data-currency="IDR">Rp 160.000,00</span></p>
                                        </div>
                                    </div>
                                </a>
                                <div class="badges-wrapper">
                                </div>
                            </figure>
                            <div class="product-card-footer">
                                <div class="product-card-interactions">
                                    <button class="product-card-interaction product-card-interaction-quickshop" data-product-card-interaction-quickshop="" data-product-sha256="4c3000c6fdb5947b53113c90315a937476854fd9e11c567db6157011250b9265" data-product-url="/collections/featured/products/seville-white-blue-tee">
                                    Quickshop
                                    </button>
                                    <button class="product-card-interaction product-card-interaction-addtocart addtocart-button-active" data-product-card-interaction-addtocart="" data-product-variant-id="37826471100591">
                                        <span class="product-card-interaction-addtocart-available">
                                        Add to cart
                                        </span>
                                        <span class="product-card-interaction-addtocart-error">
                                        Unavailable
                                        </span>
                                        <div class="product-card-interaction-addtocart-spinner">
                                            <svg class="svg-icon icon-spinner " xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <path fill="currentColor" fill-rule="evenodd" d="M1.0436 10.9683C1.47582 10.9683 1.8262 11.3255 1.8262 11.7661C1.8262 17.4946 6.38122 22.1385 12.0001 22.1385C17.619 22.1385 22.174 17.4946 22.174 11.7661C22.174 11.3255 22.5244 10.9683 22.9566 10.9683C23.3889 10.9683 23.7392 11.3255 23.7392 11.7661C23.7392 18.3759 18.4835 23.7342 12.0001 23.7342C5.51677 23.7342 0.260986 18.3759 0.260986 11.7661C0.260986 11.3255 0.611372 10.9683 1.0436 10.9683Z" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="product-card-footer-mobile">
                                <div class="product-card-details">
                                    <h2 class="title">
                                        <a data-savepage-href="/collections/featured/products/seville-white-blue-tee" href="collections/featured/products/seville-white-blue-tee">
                                        SEVILLE WHITE-BLUE TEE
                                        </a>
                                    </h2>
                                    <p class="price"><span class="money" data-currency-idr="Rp 160.000,00" data-currency="IDR">Rp 160.000,00</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    {{-- <script>
        var $carouselNav = $('.carousel-nav');
        var $carouselNavCells = $carouselNav.find('.carousel-cell');

        $carouselNav.on( 'click', '.carousel-cell', function( event ) {
            var index = $( event.currentTarget ).index();
            console.log(index);
            flkty.select( index );
        });

        // var flkty = flkty.data('flickity');
        var navTop  = $carouselNav.position().top;
        var navCellHeight = $carouselNavCells.height();
        var navHeight = $carouselNav.height();

        flkty.on( 'select', function(index) {
            console.log(index)
            $carouselNav.find('.is-nav-selected').removeClass('is-nav-selected');
            var $selected = $carouselNavCells.eq( index ).addClass('is-nav-selected');
            var scrollY = $selected.position().top +
            $carouselNav.scrollTop() - ( navHeight + navCellHeight ) / 2;
            $carouselNav.animate({
                scrollTop: scrollY
            });
        });

    </script> --}}

</div>
@endsection
