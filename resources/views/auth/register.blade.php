@extends('layouts.app')

@section('content')
    <!--Breadcumb area start here-->
    <section class="breadcumb-area jarallax bg-img af">
        <div class="breadcumb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content">
                            <h2>register</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="javascript:void(0)">register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcumb area end here-->
    <!--register area start here-->
    <div class="register_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <h2>new customer register here</h2>
                        <p>Register got your account with weapon store is free,quick and easy.</p>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="register_wrapper_box">
                        <div class="register_left_form">

                            <div class="jp_regiter_top_heading">
                                <p>Fields with * are mandetory </p>
                            </div>
                            <form action="{{ route('reg') }}" method="post">
                                @csrf
                                <div class="row clearfix">
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="username" value="" placeholder="Username*">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="full_name" value="" placeholder="Full name">

                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Email*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="phone" value="" placeholder="Phone">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="password" name="password" value="" placeholder="password*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="password" name="password_confirmation" value=""
                                            placeholder="re-enter password*">
                                    </div>
                                </div>

                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper register_wrapper_btn">
                                    <button class="btn btn-primary login_btn"> register </button>
                                </div>
                            </form>

                            <div class="login_message">
                                <p>Already a member? <a href="/login"> Login Here </a> </p>
                            </div>
                        </div>

                    </div>
                    <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you
                        logout to prevent any un-authorized access to your account</p>
                </div>
            </div>
        </div>
    </div>
    <!--register area start end-->
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
