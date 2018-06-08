<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="PHP0317E"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PHP0317E') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/style_font_end.css') }}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easydropdown.js') }}"></script>
    <link href="{{ asset('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{ asset('js/megamenu.js') }}"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('css')
</head>
<body>
    <div class="header_top">
        <div class="container">
            <div class="header_top-box">
                <div class="header-top-left">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label" value="">Dollar :</option>
                            <option value="1">Dollar</option>
                            <option value="2">Euro</option>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label" value="">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cssmenu">
                    <ul>
                        <li class="active"><a href="login.html">Account</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="login.html">Log In</a></li>
                        <li><a href="register.html">Sign Up</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="header_bottom-box">
                <div class="header_bottom_left">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""/></a>
                    </div>
                    <ul class="clock">
                        <i class="clock_icon"> </i>
                        <li class="clock_desc">Justo 24/h</li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="header_bottom_right">
                    <div class="search">
                        <input type="text" value="Your email address" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Your email address';}">
                        <input type="submit" value="">
                    </div>
                    <ul class="bag">
                        <a href="{{ url('cart') }}"><i class="bag_left"> </i></a>
                        <a href="{{ url('cart') }}">
                            <li class="bag_right"><p>
                                    <?php $total = 0; ?>
                                    @if(Cart::content())
                                        @foreach(Cart::content() as $item)
                                            <?php $total += $item->price; ?>
                                        @endforeach
                                    @endif
                                    {{ number_format($total) }}
                                </p>
                            </li>
                        </a>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="menu_box">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a class="color2" href="index.html">Home</a></li>
                    <li><a class="color4" href="men.html">Special</a></li>
                    <li><a class="color10" href="#">Men Fashion</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Men</h4>
                                        <ul>
                                            <li><a href="men.html">Jackets</a></li>
                                            <li><a href="men.html">Blazers</a></li>
                                            <li><a href="men.html">Suits</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">Shirts</a></li>
                                            <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                            <li><a href="men.html">Swem Wear</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Women</h4>
                                        <ul>
                                            <li><a href="men.html">Outerwear</a></li>
                                            <li><a href="men.html">Dresses</a></li>
                                            <li><a href="men.html">Handbags</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Shoes</a></li>
                                            <li><a href="men.html">Coats</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="h_nav">
                                        <h4>Trends</h4>
                                        <ul>
                                            <li class>
                                                <div class="p_left">
                                                    <img src="{{ asset('img/t1.jpg') }}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                    <img src="{{ asset('img/t2.jpg') }}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                    <img src="{{ asset('img/t3.jpg') }}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color3" href="404.html">Accessories</a></li>
                    <li><a class="color7" href="#">Women's Fashion</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Men</h4>
                                        <ul>
                                            <li><a href="men.html">Jackets</a></li>
                                            <li><a href="men.html">Blazers</a></li>
                                            <li><a href="men.html">Suits</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">Shirts</a></li>
                                            <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                            <li><a href="men.html">Swem Wear</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Women</h4>
                                        <ul>
                                            <li><a href="men.html">Outerwear</a></li>
                                            <li><a href="men.html">Dresses</a></li>
                                            <li><a href="men.html">Handbags</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Shoes</a></li>
                                            <li><a href="men.html">Coats</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="h_nav">
                                        <h4>Trends</h4>
                                        <ul>
                                            <li class>
                                                <div class="p_left">
                                                    <img src="{{ asset('img/t1.jpg') }}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                    <img src="{{ asset('img/t2.jpg') }}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                    <img src="{{ asset('img/t3.jpg') }}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color8" href="blog.html">Blog</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        @if(Session::has('error'))
            <div class="alert alert-danger">
                <p>{{ Session::get('error') }}</p>
            </div>
        @elseif(Session::has('success'))
            <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
    </div>
    @yield('content')
    <div class="footer">
        <div class="container">
            <img src="{{ asset('img/pay.png') }}" class="img-responsive" alt=""/>
            <ul class="footer_nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
            <p class="copy">Copyright&copy; 2015 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a>
            </p>
        </div>
    </div>
    @yield('js')
</body>
</html>
