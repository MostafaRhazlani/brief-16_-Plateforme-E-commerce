<!--Footer area start here-->
<footer class="jarallax">
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="foo-about">
                        <figure><img src="{{ asset('images/logo/logo.png') }}" alt="" /></figure>
                        <div class="contents">
                            <p>All modern weaponts can apprecie our broad services akshay handge phatum feugiat gun. This is Photo shop's version of Lorem.</p>
                            <a href="#" class="btn3">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <ul class="foo-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h2>latest News</h2>
                    <div class="foo-news">
                        <div class="newslists">
                            <div class="dbox">
                                <div class="dleft">
                                    <figure><img src="{{ asset('images/blog/sm-1.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="dright">
                                    <div class="content">
                                        <h4><a href="#">Weapons 2024</a></h4>
                                        <p>Weaponts can apprecie
                                            <br> our broad services.</p>
                                        <span><i class="fas fa-calendar"></i> 12 Jan 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="newslists">
                            <div class="dbox">
                                <div class="dleft">
                                    <figure><img src="{{ asset('images/blog/sm-2.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="dright">
                                    <div class="content">
                                        <h4><a href="#">Weapons 2024</a></h4>
                                        <p>Weaponts can apprecie
                                            <br> our broad services.</p>
                                        <span><i class="fas fa-calendar"></i> 12 Jan 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h2>Product Shop</h2>
                    <div class="products-foo">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('images/products/sm1.jpg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/products/sm2.jpg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/products/sm3.jpg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/products/sm4.jpg') }}" alt="" /></a>
                            </li>
                        </ul>
                        <p>For More Products and Gun Click Here!</p>
                        <a href="#" class="btn1">Our Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="copyright sm-t-center">
                        <p>Copyright © 2024 <a href="#"><span>Weapon</span> </a>Store. Design by <a href="#"><span>Webstrot</span></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="foo-links sm-t-center">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Copyright Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer area end here-->

<!-- All JavaScript Here -->

<!-- jQuery latest version -->
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<!-- tether JavaScript -->
<script src="{{ asset('js/tether.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Owl.carousel JavaScript -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Bxslider JavaScript -->
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<!-- isotope JavaScript -->
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- meanmenu JavaScript -->
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<!-- jarallax JavaScript -->
<script src="{{ asset('js/jarallax.min.js') }}"></script>
<!-- jQuery-ui JavaScript -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Progressbar Animation JavaScript -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- masonry JavaScript -->
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<!-- bootstrap-touchspin JavaScript -->
<script src="{{ asset('js/jquery.bootstrap-touchspin.min.js') }}"></script>
<!-- downCount JavaScript -->
<script src="{{ asset('js/jquery.downCount.js') }}"></script>
<!-- wow JavaScript -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- slick JavaScript -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Plugins JavaScript -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- Init JavaScript -->
<script src="{{ asset('js/main.js') }}"></script>

<script>
    function initMap() {
        var uluru = {
            lat: -36.742775,
            lng: 174.731559
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
</body>

<!-- Mirrored from www.webstrot.com/html/weapon/dark_version/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:03:34 GMT -->
</html>
