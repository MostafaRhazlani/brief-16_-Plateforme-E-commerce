
    <!--Header area start here-->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset('images/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 d-md-block d-sm-none d-none">
                    <div class="main-header">
                        <div class="main-menus">
                            <nav>
                                <ul class="mamnu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('shop') }}">shop</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="serach-header">
                            <button class="searchd"><i class="fas fa-search"></i></button>
                            <div class="searchbox">
                                <button class="close">×</button>
                                <form>
                                    <input type="search" placeholder="Search …">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="cart-head">
                            <button><i class="fas fa-shopping-cart"></i></button>
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <ul class="product_list_widget ">
                                        <li class="mini_cart_item">

                                            <a href="#">
                                                <img src="{{ asset('images/products/5.jpg') }}" alt="" />
                                                <p class="product-name">Shop Item 01</p>
                                            </a>

                                            <p class="quantity">1 x
                                                <strong class="Price-amount">$200.00</strong>
                                            </p>

                                            <a href="#" class="remove" title="Remove this item">x</a>
                                        </li>
                                        <li class="mini_cart_item">

                                            <a href="#">
                                                <img src="{{ asset('images/products/6.jpg') }}" alt="" />
                                                <p class="product-name">Shop Item 01</p>
                                            </a>

                                            <p class="quantity">1 x
                                                <strong class="Price-amount">$200.00</strong>
                                            </p>

                                            <a href="#" class="remove" title="Remove this item">x</a>
                                        </li>
                                        <li class="mini_cart_item">

                                            <a href="#">
                                                <img src="{{ asset('images/products/7.jpg') }}" alt="" />
                                                <p class="product-name">Shop Item 01</p>
                                            </a>

                                            <p class="quantity">1 x
                                                <strong class="Price-amount">$200.00</strong>
                                            </p>

                                            <a href="#" class="remove" title="Remove this item">x</a>
                                        </li>
                                    </ul>
                                    <!-- /.product_list_widget -->

                                    <p class="total">
                                        <strong>Subtotal:</strong>
                                        <span class="amount">$300.00
                                        </span>
                                    </p>

                                    <p class="buttons">
                                        <a href="#" class="btn1">View Cart</a>
                                        <a href="#" class="btn2">Checkout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sing-in-btn">
                            <a href="/login" class="btn1">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Responsive Menu area-->
        <div class="mobilemenu">
            <div class="mobile-menu d-md-none d-sm-block d-block">
                <nav>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('shop') }}">shop</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--Responsive Menu area End-->
    </header>
    <!--Header area end here-->
