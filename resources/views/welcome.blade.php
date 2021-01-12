@extends('layouts.app')

@section('content')


<section class="mobile-dropdown" id="main-header--mobile-nav">
    <div class="mobile-dropdown--wrapper">
        <div class="mobile-dropdown--content">
            <div class="mobile-dropdown--tools">
                <div class="mobile-dropdown--close" data-mobile-nav-close="">
                    <svg class="svg-icon icon-close" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                        <title>Close Icon</title>
                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.9394 6.53033L0.469727 1.06066L1.53039 0L7.00006 5.46967L12.4697 0L13.5304 1.06066L8.06072 6.53033L13.5304 12L12.4697 13.0607L7.00006 7.59099L1.53039 13.0607L0.469727 12L5.9394 6.53033Z"
                        ></path>
                    </svg>
                </div>

                <div id="coin-container"></div>

                <div class="currency-switcher">
                    <div class="selected-currency">IDR</div>

                    <svg class="svg-icon icon-down-arrow" xmlns="http://www.w3.org/2000/svg" width="924" height="545" viewBox="0 0 924 545">
                        <title>Down Arrow Icon</title>
                        <path fill="currentColor" d="M0 82L82 0l381 383L844 2l80 82-461 461-80-82L0 82z"></path>
                    </svg>

                    <select id="currencies" name="currencies">
                        <option value="IDR" selected="">IDR</option>
                        <option value="USD">USD</option>
                    </select>
                </div>
            </div>

            <ul class="list primary show-social">
                <li class="list-item first">
                    <a data-savepage-href="/" href="https://moskav.com/">
                        Home
                    </a>
                </li>

                <li class="list-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-mobile-dropdown-shop">
                    <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                        Shop

                        <span class="icon">
                            <span class="plus">
                                <svg class="svg-icon icon-plus" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                    <title>Plus Icon</title>

                                    <path
                                        fill="currentColor"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M5.69225 5.69225V0H7.07107V5.69225H12.7633L12.7633 7.07107L7.07107 7.07107L7.07107 12.7633H5.69225L5.69225 7.07107L5.91697e-07 7.07107L0 5.69225H5.69225Z"
                                    ></path>
                                </svg>
                            </span>

                            <span class="minus">
                                <svg class="svg-icon icon-minus" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                    <title>Minus Icon</title>

                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12.7633 0L12.7633 1.37882H0V0H12.7633Z" transform="translate(0 5.69238)"></path>
                                </svg>
                            </span>
                        </span>
                    </a>

                    <ul class="list secondary" id="header-mobile-dropdown-shop">
                        <li class="list-item">
                            <a data-savepage-href="/collections/sale" href="https://moskav.com/collections/sale">
                                MOSKAV SALE
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/all" href="https://moskav.com/collections/all">
                                All Product
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/t-shirts" href="https://moskav.com/collections/t-shirts">
                                Tees
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/shirts" href="https://moskav.com/collections/shirts">
                                Shirts
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/boardshorts" href="https://moskav.com/collections/boardshorts">
                                Boardshorts
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/hoodies-sweatshirts" href="https://moskav.com/collections/hoodies-sweatshirts">
                                Hoodies &amp; Sweatshirts
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/denim-pants" href="https://moskav.com/collections/denim-pants">
                                Denim &amp; Pants
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/denim-jackets" href="https://moskav.com/collections/denim-jackets">
                                Jackets
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/caps-hats" href="https://moskav.com/collections/caps-hats">
                                Caps
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/accessories" href="https://moskav.com/collections/accessories">
                                Accessories
                            </a>
                        </li>
                        <li class="list-item">
                            <a data-savepage-href="/collections/moskav-x-fools-golf" href="https://moskav.com/collections/moskav-x-fools-golf">
                                Moskav x Fools Golf
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="https://moskav.com/pages/lookbook">
                        Lookbook
                    </a>
                </li>
                <li class="list-item">
                    <a data-savepage-href="/pages/size-chart" href="https://moskav.com/pages/size-chart">
                        Size Chart
                    </a>
                </li>
                <li class="list-item">
                    <a data-savepage-href="/pages/about-us" href="https://moskav.com/pages/about-us">
                        About Us
                    </a>
                </li>

                <li class="list-item last">
                    <a data-savepage-href="/pages/store" href="https://moskav.com/pages/store">
                        Store
                    </a>
                </li>
                <li class="list-item" id="coin-container"></li>
            </ul>
        </div>

        <aside class="social-links">
            <a href="https://www.facebook.com/moskavofficial" class="social-link facebook" target="_blank">
                <svg class="svg-icon icon-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>Facebook Icon</title>

                    <path
                        fill="currentColor"
                        fill-rule="evenodd"
                        d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76"
                    ></path>
                </svg>
            </a>

            <a href="https://instagram.com/moskavofficial" class="social-link instagram" target="_blank">
                <svg class="svg-icon icon-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>Instagram Icon</title>

                    <g fill="currentColor" fill-rule="evenodd">
                        <path
                            d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                        ></path>
                        <path d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"></path>
                    </g>
                </svg>
            </a>
        </aside>
    </div>
</section>


<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item One</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Two</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Three</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Four</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Five</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Six</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                                aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection
