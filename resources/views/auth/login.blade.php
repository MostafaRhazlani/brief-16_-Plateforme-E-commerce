@extends('layouts.app')

@section('content')
        <!--Breadcumb area start here-->
        <section class="breadcumb-area jarallax bg-img af">
            <div class="breadcumb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="content">
                                <h2>sign in</h2>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="javascript:void(0)">sign in</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Breadcumb area end here-->
        <!-- weapon login wrapper start -->
        <div class="login_section">
            <!-- login_form_wrapper -->
            <div class="login_form_wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="section-heading">
                                <h2>login to your account</h2>
                                <p>please login to access weapon store area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- login_wrapper -->

                            <div class="login_wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                                        <a href="#" class="custom_btn btn-primary" id="fb_btn"> <span>Login with
                                                Facebook</span><i class="fab fa-facebook-f"></i> </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 ">
                                        <a href="#" class="custom_btn btn-primary google-plus"> Login with Google <i
                                                class="fab fa-google"></i> </a>
                                    </div>
                                </div>
                                <h2 class="d-lg-block d-md-none d-none">or</h2>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="formsix-pos">
                                        <div class="form-group i-email">
                                            <input type="email" name="email" class="form-control" required="" id="email2"
                                                placeholder="Username*">
                                        </div>
                                    </div>
                                    <div class="formsix-e">
                                        <div class="form-group i-password">
                                            <input type="password" name="password" class="form-control" required="" id="password2"
                                                placeholder="Password *">
                                        </div>
                                    </div>
                                    <div class="login_remember_box">
                                        <label class="control control--checkbox">Remember me
                                            <input type="checkbox">
                                            <span class="control__indicator"></span>
                                        </label>
                                        <a href="#" class="forget_password">
                                            Forgot Password
                                        </a>
                                    </div>
                                    <div class="login_btn_wrapper">
                                        <button class="btn btn-primary login_btn"> login </button>
                                    </div>
                                </form>
                                <div class="login_message">
                                    <p>Don’t have an account ? <a href="/register"> Register Now </a> </p>
                                </div>
                            </div>
                            <p>In case you are using a public/shared computer we recommend that
                                you logout to prevent any un-authorized access to your account</p>
                            <!-- /.login_wrapper-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.login_form_wrapper-->
        </div>

        <!-- weapon login wrapper end -->

        <!--Subscribe area start here-->
        <section class="subscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="subscribe subscribe_2">
                            <span class="ico"><i class="far fa-envelope"></i></span>
                            <div class="conts">
                                <h2>Get Our Latest News</h2>
                                <p>Subscribe our Newsletter Now !</p>
                            </div>
                            <form>
                                <input type="email" placeholder="Email Address">
                                <button type="submit" class="btn1">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Subscribe area End here-->
    @endsection
