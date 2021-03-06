<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
<link rel="stylesheet" href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/photoswipe/default-skin/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('template/vendor/fontawesome/css/all.min.css')}}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{asset('template/fonts/stroyka/stroyka.css')}}">
</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="{{asset('template/images/sprite.svg#menu-18x14')}}"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="index.html">
                                <!-- mobile-logo -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                    <path d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"></path>
                                </svg>
                                <!-- mobile-logo / end -->
                            </a>
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <form class="search__form" action="">
                                        <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                        <button class="search__button search__button--type--submit" type="submit">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#search-20')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="search__button search__button--type--close" type="button">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#cross-20')}}"></use>
                                            </svg>
                                        </button>
                                        <div class="search__border"></div>
                                    </form>
                                    <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#search-20')}}"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile d-sm-flex d-none">
                                    <a href="wishlist.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#heart-2')}}0"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="indicator indicator--mobile">
                                    <a href="cart.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#cart-20')}}"></use>
                                            </svg>
                                            <span class="indicator__value">3</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->
                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="about-us.html">About Us</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="contact-us.html">Contacts</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="">Store Location</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="track-order.html">Track Order</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="blog-classic.html">Blog</a>
                            </div>
                            <div class="topbar__spring"></div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        My Account
                                        <svg width="7px" height="5px">
                                            <use xlink:href="{{asset('template/images/sprite.svg#arrow-rounded-down-7x5')}}"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar ">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-dashboard.html">
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-profile.html">
                                                        Edit Profile
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-orders.html">
                                                        Order History
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-addresses.html">
                                                        Addresses
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-password.html">
                                                        Password
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="account-login.html">
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        Currency: <span class="topbar__item-value">USD</span>
                                        <svg width="7px" height="5px">
                                            <use xlink:href="{{asset('template/images/sprite.svg#arrow-rounded-down-7x5')}}"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar ">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="">
                                                        € Euro
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="">
                                                        £ Pound Sterling
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="">
                                                        $ US Dollar
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div>
                                                    <a class="menu__item-link" href="">
                                                        ₽ Russian Ruble
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="{{route('index')}}">
                            <!-- logo -->
                            <h1>Smart Bazar</h1>
                            <!-- logo / end -->
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header ">
                            <div class="search__body">
                                <form class="search__form" action="">
                                    <select class="search__categories" aria-label="Category">
                                        <option value="all">All Categories</option>
                                        <option>Instruments</option>
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Power Tools</option>
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Hand Tools</option>
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Machine Tools</option>
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Power Machinery</option>
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Measurement</option>
                                        <option>&nbsp;&nbsp;&nbsp;&nbsp;Clothes and PPE</option>
                                        <option>Electronics</option>
                                        <option>Computers</option>
                                        <option>Automotive</option>
                                        <option>Furniture & Appliances</option>
                                        <option>Music & Books</option>
                                        <option>Health & Beauty</option>
                                    </select>
                                    <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">Customer Service</div>
                        <div class="site-header__phone-number">(800) 060-0730</div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments  departments--open departments--fixed " data-departments-fixed-by=".block-slideshow">
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <ul class="departments__links">
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Power Tools
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments ">
                                                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Power Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Engravers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Drills</a></li>
                                                                                        <li class="megamenu__item"><a href="">Wrenches</a></li>
                                                                                        <li class="megamenu__item"><a href="">Plumbing</a></li>
                                                                                        <li class="megamenu__item"><a href="">Wall Chaser</a></li>
                                                                                        <li class="megamenu__item"><a href="">Pneumatic Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Milling Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item ">
                                                                                    <a href="">Workbenches</a>
                                                                                </li>
                                                                                <li class="megamenu__item ">
                                                                                    <a href="">Presses</a>
                                                                                </li>
                                                                                <li class="megamenu__item ">
                                                                                    <a href="">Spray Guns</a>
                                                                                </li>
                                                                                <li class="megamenu__item ">
                                                                                    <a href="">Riveters</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Machine Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Thread Cutting</a></li>
                                                                                        <li class="megamenu__item"><a href="">Chip Blowers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Sharpening Machines</a></li>
                                                                                        <li class="megamenu__item"><a href="">Pipe Cutters</a></li>
                                                                                        <li class="megamenu__item"><a href="">Slotting machines</a></li>
                                                                                        <li class="megamenu__item"><a href="">Lathes</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Welding Equipment</a></li>
                                                                                        <li class="megamenu__item"><a href="">Power Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Hand Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Measuring Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Hand Tools
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments ">
                                                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-2.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Machine Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Thread Cutting</a></li>
                                                                                        <li class="megamenu__item"><a href="">Chip Blowers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Sharpening Machines</a></li>
                                                                                        <li class="megamenu__item"><a href="">Pipe Cutters</a></li>
                                                                                        <li class="megamenu__item"><a href="">Slotting machines</a></li>
                                                                                        <li class="megamenu__item"><a href="">Lathes</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Welding Equipment</a></li>
                                                                                        <li class="megamenu__item"><a href="">Power Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Hand Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Measuring Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Machine Tools
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--nl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments ">
                                                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-3.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Welding Equipment</a></li>
                                                                                        <li class="megamenu__item"><a href="">Power Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Hand Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Measuring Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Building Supplies
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments ">
                                                                <div class="megamenu__body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                    <a href="">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Electrical
                                                            <svg class="departments__item-arrow" width="6px" height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__submenu departments__submenu--type--menu">
                                                            <!-- .menu -->
                                                            <div class="menu menu--layout--classic ">
                                                                <div class="menu__submenus-container"></div>
                                                                <ul class="menu__list">
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            Soldering Equipment
                                                                            <svg class="menu__item-arrow" width="6px" height="9px">
                                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                            </svg>
                                                                        </a>
                                                                        <div class="menu__submenu">
                                                                            <!-- .menu -->
                                                                            <div class="menu menu--layout--classic ">
                                                                                <div class="menu__submenus-container"></div>
                                                                                <ul class="menu__list">
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div class="menu__item-submenu-offset"></div>
                                                                                        <a class="menu__item-link" href="">
                                                                                            Soldering Station
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div class="menu__item-submenu-offset"></div>
                                                                                        <a class="menu__item-link" href="">
                                                                                            Soldering Dryers
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div class="menu__item-submenu-offset"></div>
                                                                                        <a class="menu__item-link" href="">
                                                                                            Gas Soldering Iron
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="menu__item">
                                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                                        <div class="menu__item-submenu-offset"></div>
                                                                                        <a class="menu__item-link" href="">
                                                                                            Electric Soldering Iron
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <!-- .menu / end -->
                                                                        </div>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            Light Bulbs
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            Batteries
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            Light Fixtures
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            Warm Floor
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            Generators
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="">
                                                                            UPS
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Power Machinery
                                                        </a>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Measurement
                                                        </a>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Clothes & PPE
                                                        </a>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Plumbing
                                                        </a>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Storage & Organization
                                                        </a>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="">
                                                            Welding & Soldering
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                            </svg>
                                            Shop By Category
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="index.html">
                                                <div class="nav-links__item-body">
                                                    Home
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index.html">
                                                                Home 1 Slideshow
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-2.html">
                                                                Home 2 Slideshow
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-3.html">
                                                                Home 1 Finder
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="index-4.html">
                                                                Home 2 Finder
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="offcanvas-cart.html">
                                                                Offcanvas Cart
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="">
                                                <div class="nav-links__item-body">
                                                    Megamenu
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--nl">
                                                <!-- .megamenu -->
                                                <div class="megamenu ">
                                                    <div class="megamenu__body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Power Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Engravers</a></li>
                                                                            <li class="megamenu__item"><a href="">Wrenches</a></li>
                                                                            <li class="megamenu__item"><a href="">Wall Chaser</a></li>
                                                                            <li class="megamenu__item"><a href="">Pneumatic Tools</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Machine Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Thread Cutting</a></li>
                                                                            <li class="megamenu__item"><a href="">Chip Blowers</a></li>
                                                                            <li class="megamenu__item"><a href="">Sharpening Machines</a></li>
                                                                            <li class="megamenu__item"><a href="">Pipe Cutters</a></li>
                                                                            <li class="megamenu__item"><a href="">Slotting machines</a></li>
                                                                            <li class="megamenu__item"><a href="">Lathes</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Hand Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Screwdrivers</a></li>
                                                                            <li class="megamenu__item"><a href="">Handsaws</a></li>
                                                                            <li class="megamenu__item"><a href="">Knives</a></li>
                                                                            <li class="megamenu__item"><a href="">Axes</a></li>
                                                                            <li class="megamenu__item"><a href="">Multitools</a></li>
                                                                            <li class="megamenu__item"><a href="">Paint Tools</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Garden Equipment</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Motor Pumps</a></li>
                                                                            <li class="megamenu__item"><a href="">Chainsaws</a></li>
                                                                            <li class="megamenu__item"><a href="">Electric Saws</a></li>
                                                                            <li class="megamenu__item"><a href="">Brush Cutters</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .megamenu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="shop-grid-3-columns-sidebar.html">
                                                <div class="nav-links__item-body">
                                                    Shop
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-grid-3-columns-sidebar.html">
                                                                Shop Grid
                                                                <svg class="menu__item-arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="menu__submenu">
                                                                <!-- .menu -->
                                                                <div class="menu menu--layout--classic ">
                                                                    <div class="menu__submenus-container"></div>
                                                                    <ul class="menu__list">
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset"></div>
                                                                            <a class="menu__item-link" href="shop-grid-3-columns-sidebar.html">
                                                                                3 Columns Sidebar
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset"></div>
                                                                            <a class="menu__item-link" href="shop-grid-4-columns-full.html">
                                                                                4 Columns Full
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset"></div>
                                                                            <a class="menu__item-link" href="shop-grid-5-columns-full.html">
                                                                                5 Columns Full
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .menu / end -->
                                                            </div>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-list.html">
                                                                Shop List
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="shop-right-sidebar.html">
                                                                Shop Right Sidebar
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="product.html">
                                                                Product
                                                                <svg class="menu__item-arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="menu__submenu">
                                                                <!-- .menu -->
                                                                <div class="menu menu--layout--classic ">
                                                                    <div class="menu__submenus-container"></div>
                                                                    <ul class="menu__list">
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset"></div>
                                                                            <a class="menu__item-link" href="product.html">
                                                                                Product
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset"></div>
                                                                            <a class="menu__item-link" href="product-alt.html">
                                                                                Product Alt
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu__item">
                                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                            <div class="menu__item-submenu-offset"></div>
                                                                            <a class="menu__item-link" href="product-sidebar.html">
                                                                                Product Sidebar
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .menu / end -->
                                                            </div>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="cart.html">
                                                                Cart
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="cart-empty.html">
                                                                Cart Empty
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="checkout.html">
                                                                Checkout
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="order-success.html">
                                                                Order Success
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="wishlist.html">
                                                                Wishlist
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="compare.html">
                                                                Compare
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="track-order.html">
                                                                Track Order
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="account-login.html">
                                                <div class="nav-links__item-body">
                                                    Account
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-login.html">
                                                                Login
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-dashboard.html">
                                                                Dashboard
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-profile.html">
                                                                Edit Profile
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-orders.html">
                                                                Order History
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-order-details.html">
                                                                Order Details
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-addresses.html">
                                                                Address Book
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-edit-address.html">
                                                                Edit Address
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="account-password.html">
                                                                Change Password
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="blog-classic.html">
                                                <div class="nav-links__item-body">
                                                    Blog
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-classic.html">
                                                                Blog Classic
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-grid.html">
                                                                Blog Grid
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-list.html">
                                                                Blog List
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="blog-left-sidebar.html">
                                                                Blog Left Sidebar
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="post.html">
                                                                Post Page
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="post-without-sidebar.html">
                                                                Post Without Sidebar
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="">
                                                <div class="nav-links__item-body">
                                                    Pages
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--menu">
                                                <!-- .menu -->
                                                <div class="menu menu--layout--classic ">
                                                    <div class="menu__submenus-container"></div>
                                                    <ul class="menu__list">
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="about-us.html">
                                                                About Us
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="contact-us.html">
                                                                Contact Us
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="contact-us-alt.html">
                                                                Contact Us Alt
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="404.html">
                                                                404
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="terms-and-conditions.html">
                                                                Terms And Conditions
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="faq.html">
                                                                FAQ
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="components.html">
                                                                Components
                                                            </a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                            <div class="menu__item-submenu-offset"></div>
                                                            <a class="menu__item-link" href="typography.html">
                                                                Typography
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .menu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item ">
                                            <a class="nav-links__item-link" href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">
                                                <div class="nav-links__item-body">
                                                    Buy Theme
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    @auth
                                    <div class="indicator">
                                        <a href="wishlist.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="{{asset('template/images/sprite.svg#heart-20')}}"></use>
                                                </svg>
                                                <span class="indicator__value">0</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="cart.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="{{asset('template/images/sprite.svg#cart-20')}}"></use>
                                                </svg>
                                                {{-- <span class="indicator__value">{{$order->cart_count()}}</span> --}}
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart dropcart--style--dropdown">
                                                <div class="dropcart__body">
                                                    <div class="dropcart__products-list">
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.html" class="product-image__body">
                                                                    <img class="product-image__img" src="{{asset('template/images/products/product-1.jpg')}}" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: Yellow</li>
                                                                    <li>Material: Aluminium</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">2</span> ×
                                                                    <span class="dropcart__product-price">$699.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.html" class="product-image__body">
                                                                    <img class="product-image__img" src="{{asset('template/images/products/product-2.jpg')}}" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700 watts</a></div>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">1</span> ×
                                                                    <span class="dropcart__product-price">$849.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image">
                                                                <a href="product.html" class="product-image__body">
                                                                    <img class="product-image__img" src="{{asset('template/images/products/product-5.jpg')}}" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.html">Brandix Router Power Tool 2017ERXPK</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: True Red</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta">
                                                                    <span class="dropcart__product-quantity">3</span> ×
                                                                    <span class="dropcart__product-price">$1,210.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="{{asset('template/images/sprite.svg#cross-10')}}"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="dropcart__totals">
                                                        <table>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td>$5,877.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td>$25.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax</th>
                                                                <td>$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total</th>
                                                                <td>$5,902.00</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="dropcart__buttons">
                                                        <a class="btn btn-secondary" href="cart.html">View Cart</a>
                                                        <a class="btn btn-primary" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .dropcart / end -->
                                        </div>
                                    </div>
                                    @endauth
                                    <div class="indicator indicator--trigger--click">
                                        <a href="#" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#person-20')}}"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <div class="account-menu">
                                                 @guest
                                                    <form method="POST" action="{{ route('login') }}" class="account-menu__form">
                                                        @csrf
                                                        <div class="account-menu__form-title">Войти в аккаунт</div>
                                                        <div class="form-group">
                                                            <label for="header-signin-email" class="sr-only">{{ __('E-Mail Address') }}</label>
                                                            <input id="header-signin-email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="header-signin-password" class="sr-only">{{ __('Password') }}</label>
                                                            <div class="account-menu__form-forgot">
                                                                <input id="header-signin-password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <a href="{{ route('password.request') }}" class="account-menu__form-forgot-link">Забыли пароль?</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group account-menu__form-button">
                                                            <button type="submit" class="btn btn-primary btn-sm">{{ __('Login') }}</button>
                                                        </div>
                                                        <div class="account-menu__form-link"><a href="account-login.html">Create An Account</a></div>
                                                    </form>
                                                 @endguest
                                                 @auth
                                                    <div class="account-menu__divider"></div>
                                                    <a href="account-dashboard.html" class="account-menu__user">
                                                        <div class="account-menu__user-avatar">
                                                            <img src="{{asset('template/images/avatars/avatar-3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="account-menu__user-info">
                                                        <div class="account-menu__user-name">{{Auth::user()->name}}</div>
                                                            <div class="account-menu__user-email">{{Auth::user()->email}}</div>
                                                        </div>
                                                    </a>
                                                    <div class="account-menu__divider"></div>
                                                    <ul class="account-menu__links">
                                                        <li><a href="account-profile.html">Редактировать профиль</a></li>
                                                        <li><a href="account-orders.html">Order History</a></li>
                                                        <li><a href="account-addresses.html">Адресс</a></li>
                                                        <li><a href="account-password.html">Пароль</a></li>
                                                    </ul>
                                                    <div class="account-menu__divider"></div>
                                                    <ul class="account-menu__links">
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Выйти</a></li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                 @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop site__header / end -->
        <!-- site__body -->
        @yield('body')
        <!-- site__body / end -->
        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">Contact Us</h5>
                                    <div class="footer-contacts__text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.
                                    </div>
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i> 715 Fake Street, New York 10021 USA</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>
                                        <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (800) 060-0730, (800) 060-0730</li>
                                        <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">Information</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">About Us</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Delivery Information</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Privacy Policy</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Brands</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Contact Us</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Returns</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">My Account</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Store Location</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Order History</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Wish List</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Newsletter</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Specials</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Gift Certificates</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Affiliate</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="site-footer__widget footer-newsletter">
                                    <h5 class="footer-newsletter__title">Newsletter</h5>
                                    <div class="footer-newsletter__text">
                                        Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.
                                    </div>
                                    <form action="" class="footer-newsletter__form">
                                        <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                        <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                        <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                    </form>
                                    <div class="footer-newsletter__text footer-newsletter__text--social">
                                        Follow us on social networks
                                    </div>
                                    <!-- social-links -->
                                    <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                        <ul class="social-links__list">
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--rss" href="" target="_blank">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--youtube" href="" target="_blank">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--facebook" href="" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--twitter" href="" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--instagram" href="" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- social-links / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                            Powered by HTML — Design by <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
                            <!-- copyright / end -->
                        </div>
                        <div class="site-footer__payments">
                            <img src="{{asset('template/images/payments.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <svg width="13px" height="8px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="index.html" class="mobile-links__item-link">Home</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index.html" class="mobile-links__item-link">Home 1</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-2.html" class="mobile-links__item-link">Home 2</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="" class="mobile-links__item-link">Categories</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Power Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Engravers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Wrenches</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Wall Chaser</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Pneumatic Tools</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Machine Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="{{asset('template/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Thread Cutting</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Chip Blowers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Sharpening Machines</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Pipe Cutters</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Slotting machines</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Lathes</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns Sidebar</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-list.html" class="mobile-links__item-link">Shop List</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="product.html" class="mobile-links__item-link">Product</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="product.html" class="mobile-links__item-link">Product</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="product-alt.html" class="mobile-links__item-link">Product Alt</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="cart.html" class="mobile-links__item-link">Cart</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="checkout.html" class="mobile-links__item-link">Checkout</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="order-success.html" class="mobile-links__item-link">Order Success</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="wishlist.html" class="mobile-links__item-link">Wishlist</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="compare.html" class="mobile-links__item-link">Compare</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="track-order.html" class="mobile-links__item-link">Track Order</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="account-login.html" class="mobile-links__item-link">Account</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-login.html" class="mobile-links__item-link">Login</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-orders.html" class="mobile-links__item-link">Order History</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-order-details.html" class="mobile-links__item-link">Order Details</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-password.html" class="mobile-links__item-link">Change Password</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-list.html" class="mobile-links__item-link">Blog List</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="post.html" class="mobile-links__item-link">Post Page</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="" class="mobile-links__item-link">Pages</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="about-us.html" class="mobile-links__item-link">About Us</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="contact-us.html" class="mobile-links__item-link">Contact Us</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="404.html" class="mobile-links__item-link">404</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="faq.html" class="mobile-links__item-link">FAQ</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="components.html" class="mobile-links__item-link">Components</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="typography.html" class="mobile-links__item-link">Typography</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a data-collapse-trigger class="mobile-links__item-link">Currency</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">€ Euro</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">£ Pound Sterling</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">$ US Dollar</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">₽ Russian Ruble</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a data-collapse-trigger class="mobile-links__item-link">Language</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">English</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">French</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">German</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Russian</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Italian</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->
    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- photoswipe / end -->
    <!-- js -->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('template/vendor/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('template/vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('template/vendor/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('template/js/number.js')}}"></script>
    <script src="{{asset('template/js/main.js')}}"></script>
    <script src="{{asset('template/js/header.js')}}"></script>
    <script src="{{asset('template/vendor/svg4everybody/svg4everybody.min.js')}}"></script>
    <script>
        svg4everybody();
    </script>
    <script>
        // function loadcart(){
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         type: "POST",
        //         url: "../modules/LoadCart.php",
        //         datatype: "html",
        //         cache: false,
        //         success: function(data){
        //             if(data!="0"){
        //                 $('#basket').html(data);
        //             }
        //         }
        //     });
        // }
        $('.add-to-cart').click(function(){
            var product_id = $(this).attr("product-id");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "cart/create",
                data: {product_id: product_id},
                datatype: "html",
                cache: false,
                success: function(data){
                    console.log(data);
                    loadcart();
                }
            });
        });
        $('.input-number__add').click(function(){
            var product_id = $(this).attr("product_id");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "cart/update",
                data: "product-id-plus="+product_id,
                datatype: "html",
                cache: false,
                success: function(data){
                    console.log(data);
                }
            });
        });

        $('.input-number__sub').click(function(){
            var product_id = $(this).attr("product_id");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "cart/update",
                data: "product-id-minus="+product_id,
                datatype: "html",
                cache: false,
                success: function(data){
                    console.log(data);
                }
            });
        });

        var ratedIndex = -1;

        if(localStorage.getItem('ratedIndex') != null){
            setRate(parseInt(localStorage.getItem('ratedIndex')));
        }

        $('.stars .fa-star').click(function(){
            ratedIndex = parseInt($(this).attr('data-index'));
            $('.stars .fa-star').css('color','green');
            localStorage.setItem('ratedIndex', ratedIndex);
            saveRating();
        })

        $('.stars .fa-star').mouseover(function(){
            var currentIndex = parseInt($(this).attr('data-index'));
            setRate(currentIndex);
        })

        $('.stars .fa-star').mouseleave(function(){
            resetStarColor();
            if(ratedIndex != -1){
                setRate(ratedIndex);
            }
        });

        // $('#add_review').click(function(){
        //     var review_user_id = $('.menu__item-link').attr('user-id');
        //     var review_product_id = $('.update-cart').attr("product-id");
        //     var review_description = $('#review-text').val();
        //     $.ajax({
        //         type: "POST",
        //         url: "../modules/add_review.php",
        //         data: {review_user_id: review_user_id, review_product_id: review_product_id, review_description:review_description},
        //         datatype: "html",
        //         cache: false,
        //         success: function(data){
        //             $('#review-text').val('');
        //         }
        //     });
        // });

        function setRate(max){
            for (var i=0; i <= max; i++){
                $('.stars .fa-star:eq('+i+')').addClass('fa');
            }
        }

        function resetStarColor(){
            $('.stars .fa-star').removeClass('fa');
        }

        function saveRating(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var product_id = $('.update-cart').attr("product-id");
            $.ajax({
                type: "POST",
                url: "{{ route('rate.add') }}",
                data: {ratedIndex: ratedIndex, product_id:product_id},
                datatype: "html",
                cache: false,
                success: function(data){
                    $('.rank').html(data);
                }
            });
        }
    </script>
</body>

</html>