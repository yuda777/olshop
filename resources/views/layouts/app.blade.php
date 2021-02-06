<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="dns-prefetch" href="//font.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>olshop</title>
</head>
<body>
    <section class="main-header">
        <div class="header-minimal">
           <h1 class="store-title store-logo">
              <a href="/items" style="max-width: 100px;">
              <img src="../storage/logo.jpg"/>
              </a>
           </h1>
           <style>
              .store-title {
                width: 130px;
              }
              @media (max-width: 960px) {
                .store-title {
                   width: auto;
                }
              }
           </style>
           <nav class="full main-header--nav-compressed compress bordered" style="padding-top: 0;">
              <ul class="main-header--nav-links">
                 <li class="nav-item first">
                    <a class="label" data-savepage-href="/" href="/">
                        Home
                    </a>
                 </li>
                 <li class="nav-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-dropdown-shop">
                    <a class="label" data-savepage-href="/collections/all" href="/collections/all">
                       Shop
                       <svg class="svg-icon icon-down-arrow"
                          xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                          <title>Down Arrow Icon</title>
                          <path fill="currentColor" d="M0 82L82 0l381 383L844 2l80 82-461 461-80-82L0 82z"></path>
                       </svg>
                    </a>
                    <ul class="dropdown-wrap primary" id="header-dropdown-shop" aria-hidden="true">
                       <li class="dropdown-item first">
                          <a data-savepage-href="/collections/sale" href="/collections/sale">
                          <span class="label"> SALE</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/all" href="/collections/all">
                          <span class="label">All Product</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/t-shirts" href="/collections/t-shirts">
                          <span class="label">Tees</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/shirts" href="/collections/shirts">
                          <span class="label">Shirts</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/boardshorts" href="/collections/boardshorts">
                          <span class="label">Boardshorts</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/hoodies-sweatshirts" href="/collections/hoodies-sweatshirts">
                          <span class="label">Hoodies &amp; Sweatshirts</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/denim-pants" href="/collections/denim-pants">
                          <span class="label">Denim &amp; Pants</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/denim-jackets" href="/collections/denim-jackets">
                          <span class="label">Jackets</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/caps-hats" href="/collections/caps-hats">
                          <span class="label">Caps</span>
                          </a>
                       </li>
                       <li class="dropdown-item">
                          <a data-savepage-href="/collections/accessories" href="/collections/accessories">
                          <span class="label">Accessories</span>
                          </a>
                       </li>
                       <li class="dropdown-item last">
                          <a data-savepage-href="/collections/-x-fools-golf" href="/collections/-x-fools-golf">
                          <span class="label"> x Fools Golf</span>
                          </a>
                       </li>
                    </ul>
                 </li>
                 <li class="nav-item">
                    <a class="label" href="/pages/lookbook">
                    Lookbook
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="label" data-savepage-href="/pages/size-chart" href="/pages/size-chart">
                    Size Chart
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="label" data-savepage-href="/pages/about-us" href="/pages/about-us">
                    About Us
                    </a>
                 </li>
                 <li class="nav-item last">
                    <a class="label" data-savepage-href="/pages/store" href="/pages/store">
                    Store
                    </a>
                 </li>
              </ul>
           </nav>
           <div class="main-header--tools tools clearfix">
              <div class="main-header--tools-group">
                 <div class="main-header--tools-left">
                    <aside class="social-links">
                       <a href="https://www.facebook.com/official" class="social-link facebook" target="_blank">
                          <svg class="svg-icon icon-facebook"
                             xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                             <title>Facebook Icon</title>
                             <path fill="currentColor" fill-rule="evenodd"
                                d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76"
                                ></path>
                          </svg>
                       </a>
                       <a href="https://instagram.com/official" class="social-link instagram" target="_blank">
                          <svg class="svg-icon icon-instagram"
                             xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                             <title>Instagram Icon</title>
                             <g fill="currentColor" fill-rule="evenodd">
                                <path d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                                   ></path>
                                <path d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"
                                   ></path>
                             </g>
                          </svg>
                       </a>
                    </aside>

                    <div class="tool-container">
                       	<div id="coin-container"></div>
                       	<a class="menu" href="#" onClick="doingnothing(event)" >
                          	<svg class="svg-icon icon-menu" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14">
								<title>Menu Icon</title>
								<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17 1.5H0V0H17V1.5ZM17 7.5H0V6H17V7.5ZM0 13.5H17V12H0V13.5Z" transform="translate(0.5)"></path>
                          	</svg>
                       	</a>
                        <button id="ls-button-search" class="ls-button-search" type="button" >
                            <svg class="svg-icon icon-search" width="18" height="19" viewBox="0 0 18 19">
                               <title>Search Icon</title>
                               <path fill-rule="evenodd" fill="currentColor" clip-rule="evenodd" d="M3.12958 3.12959C0.928303 5.33087 0.951992 8.964 3.23268 11.2447C5.51337 13.5254 9.14649 13.5491 11.3478 11.3478C13.549 9.14651 13.5254 5.51338 11.2447 3.23269C8.96398 0.951993 5.33086 0.928305 3.12958 3.12959ZM2.17202 12.3054C-0.671857 9.46147 -0.740487 4.87834 2.06892 2.06893C4.87833 -0.740488 9.46145 -0.671858 12.3053 2.17203C15.1492 5.01591 15.2178 9.59904 12.4084 12.4085C9.59902 15.2179 5.0159 15.1492 2.17202 12.3054ZM16.4655 17.589L12.5285 13.589L13.5976 12.5368L17.5346 16.5368L16.4655 17.589Z"
                               transform="translate(0 0.5)" ></path>
                           </svg>
                        </button>
                        <h1 class="store-logo-mobile">
                            <a href="/items" style="max-width: 100px;">
                            <img src="../storage/logo.jpg"/>
                            </a>
                        </h1>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <section class="mobile-dropdown" id="main-header--mobile-nav">
           <div class="mobile-dropdown--wrapper">
              <div class="mobile-dropdown--content">
                 <div class="mobile-dropdown--tools">
                    <div class="mobile-dropdown--close" onClick="closedrawer(event)" data-mobile-nav-close="">
                       <svg class="svg-icon icon-close"
                          xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                          <title>Close Icon</title>
                          <path
                             fill="currentColor"
                             fill-rule="evenodd"
                             clip-rule="evenodd"
                             d="M5.9394 6.53033L0.469727 1.06066L1.53039 0L7.00006 5.46967L12.4697 0L13.5304 1.06066L8.06072 6.53033L13.5304 12L12.4697 13.0607L7.00006 7.59099L1.53039 13.0607L0.469727 12L5.9394 6.53033Z"
                             ></path>
                       </svg>
                    </div>
                    <div id="coin-container"></div>
                 </div>
                 <ul class="list primary show-social">
                    <li class="list-item first">
                       <a data-savepage-href="/" href="/">
                       Home
                       </a>
                    </li>
                    <li class="list-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-mobile-dropdown-shop">
                       <a data-savepage-href="/collections/all" href="/collections/all">
                          Shop
                          <span class="icon">
                             <span class="plus">
                                <svg class="svg-icon icon-plus"
                                   xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                   <title>Plus Icon</title>
                                   <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.69225 5.69225V0H7.07107V5.69225H12.7633L12.7633 7.07107L7.07107 7.07107L7.07107 12.7633H5.69225L5.69225 7.07107L5.91697e-07 7.07107L0 5.69225H5.69225Z"></path>
                                </svg>
                             </span>
                             <span class="minus">
                                <svg class="svg-icon icon-minus"
                                   xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                   <title>Minus Icon</title>
                                   <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12.7633 0L12.7633 1.37882H0V0H12.7633Z" transform="translate(0 5.69238)"></path>
                                </svg>
                             </span>
                          </span>
                       </a>
                       <ul class="list secondary" id="header-mobile-dropdown-shop">
                          <li class="list-item">
                             <a data-savepage-href="/collections/sale" href="/collections/sale">
                              SALE
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/all" href="/collections/all">
                             All Product
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/t-shirts" href="/collections/t-shirts">
                             Tees
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/shirts" href="/collections/shirts">
                             Shirts
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/boardshorts" href="/collections/boardshorts">
                             Boardshorts
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/hoodies-sweatshirts" href="/collections/hoodies-sweatshirts">
                             Hoodies &amp; Sweatshirts
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/denim-pants" href="/collections/denim-pants">
                             Denim &amp; Pants
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/denim-jackets" href="/collections/denim-jackets">
                             Jackets
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/caps-hats" href="/collections/caps-hats">
                             Caps
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/accessories" href="/collections/accessories">
                             Accessories
                             </a>
                          </li>
                          <li class="list-item">
                             <a data-savepage-href="/collections/-x-fools-golf" href="/collections/-x-fools-golf">
                              x Fools Golf
                             </a>
                          </li>
                       </ul>
                    </li>
                    <li class="list-item">
                       <a href="/pages/lookbook">
                       Lookbook
                       </a>
                    </li>
                    <li class="list-item">
                       <a data-savepage-href="/pages/size-chart" href="/pages/size-chart">
                       Size Chart
                       </a>
                    </li>
                    <li class="list-item">
                       <a data-savepage-href="/pages/about-us" href="/pages/about-us">
                       About Us
                       </a>
                    </li>
                    <li class="list-item last">
                       <a data-savepage-href="/pages/store" href="/pages/store">
                       Store
                       </a>
                    </li>
                    <li class="list-item" id="coin-container"></li>
                 </ul>
              </div>
              <aside class="social-links">
                 <a href="https://www.facebook.com/official" class="social-link facebook" target="_blank">
                    <svg class="svg-icon icon-facebook"
                       xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                       <title>Facebook Icon</title>
                       <path fill="currentColor" fill-rule="evenodd"  d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76" ></path>
                    </svg>
                 </a>
                 <a href="https://instagram.com/official" class="social-link instagram" target="_blank">
                    <svg class="svg-icon icon-instagram"
                       xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                       <title>Instagram Icon</title>
                       <g fill="currentColor" fill-rule="evenodd">
                          <path d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                             ></path>
                          <path d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"
                             ></path>
                       </g>
                    </svg>
                 </a>
              </aside>
           </div>
        </section>

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

                </div>

                <ul class="list primary show-social">
                    <li class="list-item first">
                        <a data-savepage-href="/" href="/">
                            Home
                        </a>
                    </li>

                    <li class="list-item dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="header-mobile-dropdown-shop">
                        <a data-savepage-href="/collections/all" href="/collections/all">
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
                                <a data-savepage-href="/collections/sale" href="/collections/sale">
                                     SALE
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/all" href="/collections/all">
                                    All Product
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/t-shirts" href="/collections/t-shirts">
                                    Tees
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/shirts" href="/collections/shirts">
                                    Shirts
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/boardshorts" href="/collections/boardshorts">
                                    Boardshorts
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/hoodies-sweatshirts" href="/collections/hoodies-sweatshirts">
                                    Hoodies &amp; Sweatshirts
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/denim-pants" href="/collections/denim-pants">
                                    Denim &amp; Pants
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/denim-jackets" href="/collections/denim-jackets">
                                    Jackets
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/caps-hats" href="/collections/caps-hats">
                                    Caps
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/accessories" href="/collections/accessories">
                                    Accessories
                                </a>
                            </li>
                            <li class="list-item">
                                <a data-savepage-href="/collections/-x-fools-golf" href="/collections/-x-fools-golf">
                                     x Fools Golf
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="/pages/lookbook">
                            Lookbook
                        </a>
                    </li>
                    <li class="list-item">
                        <a data-savepage-href="/pages/size-chart" href="/pages/size-chart">
                            Size Chart
                        </a>
                    </li>
                    <li class="list-item">
                        <a data-savepage-href="/pages/about-us" href="/pages/about-us">
                            About Us
                        </a>
                    </li>

                    <li class="list-item last">
                        <a data-savepage-href="/pages/store" href="/pages/store">
                            Store
                        </a>
                    </li>
                    <li class="list-item" id="coin-container"></li>
                </ul>
            </div>

            <aside class="social-links">
                <a href="https://www.facebook.com/official" class="social-link facebook" target="_blank">
                    <svg class="svg-icon icon-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>Facebook Icon</title>

                        <path fill="currentColor" fill-rule="evenodd"
                            d="M30.11 0H1.76C.786 0 0 .787 0 1.76v28.35c0 .97.787 1.758 1.76 1.758H17.02v-12.34H12.87v-4.81h4.152V11.17c0-4.116 2.514-6.357 6.185-6.357 1.76 0 3.27.13 3.712.19v4.3l-2.548.002c-1.997 0-2.384.95-2.384 2.342v3.07h4.763l-.62 4.81H21.99v12.34h8.12c.972 0 1.76-.787 1.76-1.758V1.76c0-.973-.788-1.76-1.76-1.76"
                        ></path>
                    </svg>
                </a>

                <a href="https://instagram.com/official" class="social-link instagram" target="_blank">
                    <svg class="svg-icon icon-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>Instagram Icon</title>

                        <g fill="currentColor" fill-rule="evenodd">
                            <path d="M16 2.887c4.27 0 4.777.016 6.463.093 1.56.071 2.407.332 2.97.551.747.29 1.28.637 1.84 1.196.56.56.906 1.093 1.196 1.84.219.563.48 1.41.55 2.97.078 1.686.094 2.192.094 6.463 0 4.27-.016 4.777-.093 6.463-.071 1.56-.332 2.407-.551 2.97a4.955 4.955 0 0 1-1.196 1.84c-.56.56-1.093.906-1.84 1.196-.563.219-1.41.48-2.97.55-1.686.078-2.192.094-6.463.094s-4.777-.016-6.463-.093c-1.56-.071-2.407-.332-2.97-.551a4.955 4.955 0 0 1-1.84-1.196 4.955 4.955 0 0 1-1.196-1.84c-.219-.563-.48-1.41-.55-2.97-.078-1.686-.094-2.192-.094-6.463 0-4.27.016-4.777.093-6.463.071-1.56.332-2.407.551-2.97.29-.747.637-1.28 1.196-1.84a4.956 4.956 0 0 1 1.84-1.196c.563-.219 1.41-.48 2.97-.55 1.686-.078 2.192-.094 6.463-.094m0-2.882c-4.344 0-4.889.018-6.595.096C7.703.18 6.54.45 5.523.845A7.84 7.84 0 0 0 2.69 2.69 7.84 7.84 0 0 0 .845 5.523C.449 6.54.179 7.703.1 9.405.023 11.111.005 11.656.005 16c0 4.344.018 4.889.096 6.595.078 1.702.348 2.865.744 3.882A7.84 7.84 0 0 0 2.69 29.31a7.84 7.84 0 0 0 2.833 1.845c1.017.396 2.18.666 3.882.744 1.706.078 2.251.096 6.595.096 4.344 0 4.889-.018 6.595-.096 1.702-.078 2.865-.348 3.882-.744a7.84 7.84 0 0 0 2.833-1.845 7.84 7.84 0 0 0 1.845-2.833c.396-1.017.666-2.18.744-3.882.078-1.706.096-2.251.096-6.595 0-4.344-.018-4.889-.096-6.595-.078-1.702-.348-2.865-.744-3.882A7.84 7.84 0 0 0 29.31 2.69 7.84 7.84 0 0 0 26.477.845C25.46.449 24.297.179 22.595.1 20.889.023 20.344.005 16 .005"
                            ></path>
                            <path d="M16 7.786a8.214 8.214 0 1 0 0 16.428 8.214 8.214 0 0 0 0-16.428zm0 13.546a5.332 5.332 0 1 1 0-10.664 5.332 5.332 0 0 1 0 10.664zM26.458 7.462a1.92 1.92 0 1 1-3.84 0 1.92 1.92 0 0 1 3.84 0"></path>
                        </g>
                    </svg>
                </a>
            </aside>
        </div>
    </section>


    @yield('content')
    <script src="{{ asset('js/app.js') }}" ></script>
    {{-- <script src="{{ asset('js/script.js') }}" ></script> --}}
</body>
</html>
