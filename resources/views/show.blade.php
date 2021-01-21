@extends('layouts.app')

@section('content')
<div class="page-body-content" style="margin-top: 60px;">
    <div id="shopify-section-static-product" class="shopify-section section-product">
        <script type="application/json" data-section-type="static-product" data-section-id="static-product" data-section-data=""></script>
        <div class="content-area">
            <div class="breadcrumb-navigation">
                <span><a data-savepage-href="/" href="https://moskav.com/">Home</a></span>
                <span class="sep">/</span> <span><a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">Products</a></span>
                <span class="sep">/</span> <span>{{ $item->item_name }}</span>
            </div>
        </div>
        <div class="content content-area">
            <section class=" product-area clearfix">
                <script type="application/json" data-images=""></script>
                <div class=" showcase product-images left-main-image">
                    <div class=" container " style="height: 914.85px;">
                        <div class="product-main-image wrap ">
                            <noscript data-rimg-noscript="">
                                <img src="{{ asset('storage/g1.webp') }}" alt="{{ $item->item_name }}"
                                    srcset="{{ asset('storage/g1.webp') }} 1x, {{ asset('storage/g1.webp') }} 1.07x"
                                    data-image-zoom="24809866068143" >
                            </noscript>
                            <img data-savepage-current src="{{ asset('storage/g1.webp') }}" data-savepage-src="{{ asset('storage/g1.webp') }}" src="{{ asset('storage/g1.webp') }}" alt="CORWIN GREEN TEE" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="{{ asset('storage/g1.webp') }}" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="{{ asset('storage/g1.webp') }} 1.00x" srcset="" data-image-zoom="24809866068143" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='710'%20height='1024'></svg>">
                        </div>
                    </div>
                    <div class="pager  left-main-image ">
                        <div class="inner">
                            <div class="wrap thumb first  active">
                                <noscript data-rimg-noscript="">
                                    <img src="{{ asset('storage/g1.webp') }}"
                                        alt="{{ $item->item_name }}" srcset="{{ asset('storage/g1.webp') }} 1x, {{ asset('storage/g1.webp') }} 2x, {{ asset('storage/g1.webp') }} 3x, {{ asset('storage/g1.webp') }} 4x"
                                        data-high-res-url="{{ asset('storage/g1.webp') }}"
                                        data-image-id="24809866068143"
                                        >
                                </noscript>
                                <img data-savepage-current src="{{ asset('storage/g1.webp') }}" data-savepage-src="{{ asset('storage/g1.webp') }}" src="{{ asset('storage/g1.webp') }}" alt="CORWIN GREEN TEE" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="{{ asset('storage/g1.webp') }}" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="{{ asset('storage/g1.webp') }} 1.00x" srcset="" data-high-res-url="{{ asset('storage/g1.webp') }}" data-image-id="24809866068143" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='70'%20height='100'></svg>">
                                <span class="overlay"></span>
                            </div>
                            <div class="wrap thumb">
                                <noscript data-rimg-noscript="">
                                    <img
                                        src="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_70x100.jpg?v=1610524516"
                                        alt="{{ $item->item_name }}" srcset="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_70x100.jpg?v=1610524516 1x, //cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_140x200.jpg?v=1610524516 2x, //cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_210x300.jpg?v=1610524516 3x, //cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_280x400.jpg?v=1610524516 4x"
                                        data-high-res-url="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_2000x.jpg?v=1610524516"
                                        data-image-id="24809866133679"
                                        >
                                </noscript>
                                <img data-savepage-current src="https://cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_96x128.jpg?v=1610524516" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_70x100.jpg?v=1610524516" src="" alt="CORWIN GREEN TEE" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_{size}.jpg?v=1610524516" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_96x128.jpg?v=1610524516 1.00x" srcset="" data-high-res-url="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_b_2000x.jpg?v=1610524516" data-image-id="24809866133679" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='70'%20height='100'></svg>">
                                <span class="overlay"></span>
                            </div>
                            <div class="wrap thumb  last ">
                                <noscript data-rimg-noscript="">
                                    <img
                                        src="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_70x100.jpg?v=1610524516"
                                        alt="{{ $item->item_name }}"

                                        srcset="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_70x100.jpg?v=1610524516 1x, //cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_140x200.jpg?v=1610524516 2x, //cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_210x300.jpg?v=1610524516 3x, //cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_280x400.jpg?v=1610524516 4x"
                                        data-high-res-url="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_2000x.jpg?v=1610524516"
                                        data-image-id="24809866100911"
                                        >
                                </noscript>
                                <img data-savepage-current src="https://cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_96x128.jpg?v=1610524516" data-savepage-src="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_70x100.jpg?v=1610524516" src="" alt="CORWIN GREEN TEE" data-rimg="loaded" data-rimg-scale="1" data-rimg-template="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_{size}.jpg?v=1610524516" data-rimg-max="762x1100" data-rimg-crop="" data-savepage-srcset="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_96x128.jpg?v=1610524516 1.00x" srcset="" data-high-res-url="//cdn.shopify.com/s/files/1/1608/3005/products/PalmerEDIT_c_2000x.jpg?v=1610524516" data-image-id="24809866100911" data-rimg-template-svg="data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'%20width='70'%20height='100'></svg>">
                                <span class="overlay"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-wrapper">
                    <div class="
                        product-details
                        product-details-alignment-left
                        border
                        ">
                        <div class="header">
                            <h1 class="title">
                                {{ $item->item_name }}
                            </h1>
                            <p class="price sale">
                                <span class="money" data-currency-idr="Rp {{ $item->new_price }},00" data-currency="IDR">Rp {{ $item->new_price }},00</span>
                            </p>
                        </div>
                        <div class="options  ">
                            <form method="post" action="/cart/add" id="6223008432303" accept-charset="UTF-8" class="
                                product-form
                                product-form-has-spb
                                " enctype="multipart/form-data" data-product-form="">
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
                            <a class="product-interaction email-us" href="mailto:sales.moskav@gmail.com?Subject=CORWIN GREEN TEE">
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
                                        <a class="sharethis-link sharethis-facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fmoskav.com%2Fproducts%2Fcorwin-green-tee">
                                            <svg class="svg-icon icon-share-facebook " xmlns="http://www.w3.org/2000/svg" width="9" height="18" fill="none" viewBox="0 0 9 18" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Facebook Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M7.861 9.007H5.394V18H1.737V9.007H0V5.829h1.738V3.772C1.737 2.3 2.421 0 5.427 0l2.709.01v3.085H6.17c-.321 0-.775.165-.775.866v1.868h2.786l-.32 3.178z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-twitter" href="http://twitter.com/share?url=https%3A%2F%2Fmoskav.com%2Fproducts%2Fcorwin-green-tee">
                                            <svg class="svg-icon icon-share-twitter " xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="none" viewBox="0 0 20 17" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Twitter Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M17.64 2.576a4.115 4.115 0 0 0 1.803-2.27c-.792.47-1.67.812-2.605.996a4.102 4.102 0 0 0-6.99 3.742A11.647 11.647 0 0 1 1.392.757 4.083 4.083 0 0 0 .837 2.82a4.1 4.1 0 0 0 1.825 3.413A4.086 4.086 0 0 1 .803 5.72v.052a4.105 4.105 0 0 0 3.29 4.022 4.108 4.108 0 0 1-1.852.07 4.106 4.106 0 0 0 3.832 2.85 8.231 8.231 0 0 1-5.094 1.755A8.33 8.33 0 0 1 0 14.412a11.612 11.612 0 0 0 6.289 1.843c7.545 0 11.671-6.25 11.671-11.672 0-.178-.004-.355-.011-.53a8.339 8.339 0 0 0 2.047-2.124 8.202 8.202 0 0 1-2.357.646h.001z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-pinterest" href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fmoskav.com%2Fproducts%2Fcorwin-green-tee">
                                            <svg class="svg-icon icon-share-pinterest " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Pinterest Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M10 0C4.479 0 0 4.477 0 10a9.999 9.999 0 0 0 6.355 9.311c-.087-.79-.166-2.005.035-2.868.183-.781 1.173-4.971 1.173-4.971s-.3-.6-.3-1.485c0-1.388.808-2.429 1.81-2.429.854 0 1.265.641 1.265 1.409 0 .859-.545 2.141-.827 3.33-.238.996.5 1.806 1.48 1.806 1.776 0 3.144-1.873 3.144-4.577 0-2.394-1.72-4.068-4.178-4.068-2.845 0-4.513 2.134-4.513 4.34 0 .859.329 1.78.741 2.281.083.1.094.188.072.288-.075.315-.245.995-.28 1.133-.043.183-.143.223-.334.134-1.248-.581-2.03-2.407-2.03-3.875 0-3.154 2.292-6.05 6.609-6.05 3.468 0 6.165 2.472 6.165 5.775 0 3.446-2.175 6.221-5.191 6.221-1.013 0-1.965-.527-2.292-1.15l-.625 2.378c-.225.868-.834 1.957-1.242 2.62A10 10 0 0 0 9.999 20C15.521 20 20 15.523 20 10 20 4.478 15.521.001 10 .001V0z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-google" href="https://plus.google.com/share?url=https%3A%2F%2Fmoskav.com%2Fproducts%2Fcorwin-green-tee">
                                            <svg class="svg-icon icon-share-google " xmlns="http://www.w3.org/2000/svg" width="30" height="19" fill="none" viewBox="0 0 30 19" style="--darkreader-inline-fill:none;" data-darkreader-inline-fill="">
                                                <title>Share Google Icon</title>
                                                <path fill="currentColor" fill-rule="evenodd" d="M24.555 5.415h2.707c.004.902.008 1.81.017 2.712.905.009 1.816.009 2.721.018v2.699c-.905.009-1.811.013-2.72.022-.01.907-.014 1.81-.018 2.713h-2.713c-.01-.902-.01-1.806-.018-2.708l-2.72-.027V8.145c.904-.009 1.81-.015 2.72-.018.004-.908.013-1.81.022-2.712h.002zM.025 9.025C.108 4.13 4.62-.155 9.528.008c2.353-.11 4.563.913 6.365 2.344a33.87 33.87 0 0 1-2.415 2.496c-2.166-1.492-5.246-1.92-7.412-.195-3.097 2.135-3.238 7.18-.26 9.48 2.9 2.62 8.377 1.319 9.177-2.695-1.816-.027-3.635 0-5.45-.06a388.181 388.181 0 0 1-.005-3.238c3.034-.008 6.07-.014 9.108.01.182 2.54-.154 5.243-1.72 7.342-2.37 3.326-7.127 4.295-10.84 2.872C2.35 16.95-.289 13.025.025 9.024z" clip-rule="evenodd" style="--darkreader-inline-fill:currentColor;" data-darkreader-inline-fill=""></path>
                                            </svg>
                                        </a>
                                        <a class="sharethis-link sharethis-email" href="mailto:?Subject=CORWIN GREEN TEE&Body=Check out CORWIN GREEN TEE at https://moskav.com/products/corwin-green-tee!">
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
                                <div style="text-align: center;"><img data-savepage-src="https://cdn.shopify.com/s/files/1/1608/3005/files/Web_TShirt_Long_edf77bae-2c09-40b1-b645-7fa315b510b5_480x480.jpg?v=1610524206" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/7RQQUGhvdG9zaG9wIDMuMAA4QklNBCUAAAAAABAAAAAAAAAAAAAAAAAAAAAAOEJJTQQ6AAAAAACjAAAAEAAAAAEAAAAAAAtwcmludE91dHB1dAAAAAQAAAAAUHN0U2Jvb2wBAAAAAEludGVlbnVtAAAAAEludGUAAAAAQ2xybQAAAA9wcmludFNpeHRlZW5CaXRib29sAAAAAAtwcmludGVyTmFtZVRFWFQAAAAXAEgAUAAgAEQAZQBzAGsASgBlAHQAIAAyADEAMwAwACAAcwBlAHIAaQBlAHMAAAA4QklNBDsAAAAAAbIAAAAQAAAAAQAAAAAAEnByaW50T3V0cHV0T3B0aW9ucwAAABIAAAAAQ3B0bmJvb2wAAAAAAENsYnJib29sAAAAAABSZ3NNYm9vbAAAAAAAQ3JuQ2Jvb2wAAAAAAENudENib29sAAAAAABMYmxzYm9vbAAAAAAATmd0dmJvb2wAAAAAAEVtbERib29sAAAAAABJbnRyYm9vbAAAAAAAQmNrZ09iamMAAAABAAAAAAAAUkdCQwAAAAMAAAAAUmQgIGRvdWJAb+AAAAAAAAAAAABHcm4gZG91YkBv4AAAAAAAAAAAAEJsICBkb3ViQG/gAAAAAAAAAAAAQnJkVFVudEYjUmx0AAAAAAAAAAAAAAAAQmxkIFVudEYjUmx0AAAAAAAAAAAAAAAAUnNsdFVudEYjUHhsQHK///AAAAAAAAAKdmVjdG9yRGF0YWJvb2wBAAAAAFBnUHNlbnVtAAAAAFBnUHMAAAAAUGdQQwAAAABMZWZ0VW50RiNSbHQAAAAAAAAAAAAAAABUb3AgVW50RiNSbHQAAAAAAAAAAAAAAABTY2wgVW50RiNQcmNAWQAAAAAAADhCSU0D7QAAAAAAEAEr//8AAQABASv//wABAAE4QklNBCYAAAAAAA4AAAAAAAAAAAAAP4AAADhCSU0EDQAAAAAABAAAAB44QklNBBkAAAAAAAQAAAAeOEJJTQPzAAAAAAAJAAAAAAAAAAABADhCSU0nEAAAAAAACgABAAAAAAAAAAI4QklNA/UAAAAAAEgAL2ZmAAEAbGZmAAYAAAAAAAEAL2ZmAAEAoZmaAAYAAAAAAAEAMgAAAAEAWgAAAAYAAAAAAAEANQAAAAEALQAAAAYAAAAAAAE4QklNA/gAAAAAAHAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAOEJJTQQIAAAAAAAQAAAAAQAAAkAAAAJAAAAAADhCSU0EHgAAAAAABAAAAAA4QklNBBoAAAAAA1UAAAAGAAAAAAAAAAAAAATUAAAF3AAAABAAVwBlAGIAXwBUAFMAaABpAHIAdAAgAFMAaABvAHIAdAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAF3AAABNQAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAQAAAAAAAG51bGwAAAACAAAABmJvdW5kc09iamMAAAABAAAAAAAAUmN0MQAAAAQAAAAAVG9wIGxvbmcAAAAAAAAAAExlZnRsb25nAAAAAAAAAABCdG9tbG9uZwAABNQAAAAAUmdodGxvbmcAAAXcAAAABnNsaWNlc1ZsTHMAAAABT2JqYwAAAAEAAAAAAAVzbGljZQAAABIAAAAHc2xpY2VJRGxvbmcAAAAAAAAAB2dyb3VwSURsb25nAAAAAAAAAAZvcmlnaW5lbnVtAAAADEVTbGljZU9yaWdpbgAAAA1hdXRvR2VuZXJhdGVkAAAAAFR5cGVlbnVtAAAACkVTbGljZVR5cGUAAAAASW1nIAAAAAZib3VuZHNPYmpjAAAAAQAAAAAAAFJjdDEAAAAEAAAAAFRvcCBsb25nAAAAAAAAAABMZWZ0bG9uZwAAAAAAAAAAQnRvbWxvbmcAAATUAAAAAFJnaHRsb25nAAAF3AAAAAN1cmxURVhUAAAAAQAAAAAAAG51bGxURVhUAAAAAQAAAAAAAE1zZ2VURVhUAAAAAQAAAAAABmFsdFRhZ1RFWFQAAAABAAAAAAAOY2VsbFRleHRJc0hUTUxib29sAQAAAAhjZWxsVGV4dFRFWFQAAAABAAAAAAAJaG9yekFsaWduZW51bQAAAA9FU2xpY2VIb3J6QWxpZ24AAAAHZGVmYXVsdAAAAAl2ZXJ0QWxpZ25lbnVtAAAAD0VTbGljZVZlcnRBbGlnbgAAAAdkZWZhdWx0AAAA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" alt="" data-mce-fragment="1" data-mce-src="https://cdn.shopify.com/s/files/1/1608/3005/files/Web_TShirt_Long_edf77bae-2c09-40b1-b645-7fa315b510b5_480x480.jpg?v=1610524206"></div>
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
                                <a data-savepage-href="/collections/featured/products/orange-white-green" href="https://moskav.com/collections/featured/products/orange-white-green" class=""></a>
                                <a class="
                                    product-card-overlay
                                    " data-savepage-href="/collections/featured/products/orange-white-green" href="https://moskav.com/collections/featured/products/orange-white-green">
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
                                        <a data-savepage-href="/collections/featured/products/orange-white-green" href="https://moskav.com/collections/featured/products/orange-white-green">
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
                                <a data-savepage-href="/collections/featured/products/blue-skies-corduroy-hat" href="https://moskav.com/collections/featured/products/blue-skies-corduroy-hat" class=""></a>
                                <a class="
                                    product-card-overlay
                                    " data-savepage-href="/collections/featured/products/blue-skies-corduroy-hat" href="https://moskav.com/collections/featured/products/blue-skies-corduroy-hat">
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
                                        <a data-savepage-href="/collections/featured/products/blue-skies-corduroy-hat" href="https://moskav.com/collections/featured/products/blue-skies-corduroy-hat">
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
                                <a data-savepage-href="/collections/featured/products/flag-black-wash-hat" href="https://moskav.com/collections/featured/products/flag-black-wash-hat" class=""></a>
                                <a class="
                                    product-card-overlay
                                    " data-savepage-href="/collections/featured/products/flag-black-wash-hat" href="https://moskav.com/collections/featured/products/flag-black-wash-hat">
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
                                        <a data-savepage-href="/collections/featured/products/flag-black-wash-hat" href="https://moskav.com/collections/featured/products/flag-black-wash-hat">
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
                                <a data-savepage-href="/collections/featured/products/seville-white-blue-tee" href="https://moskav.com/collections/featured/products/seville-white-blue-tee" class=""></a>
                                <a class=" product-card-overlay " data-savepage-href="/collections/featured/products/seville-white-blue-tee" href="https://moskav.com/collections/featured/products/seville-white-blue-tee">
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
                                        <a data-savepage-href="/collections/featured/products/seville-white-blue-tee" href="https://moskav.com/collections/featured/products/seville-white-blue-tee">
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
    <script></script>
</div>
@endsection
