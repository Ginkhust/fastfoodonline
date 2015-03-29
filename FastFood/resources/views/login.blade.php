@extends('auth_template.temp')

@section('content')

    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="riesling" style="font-size: 2em">LOGIN OR CREATE AN ACCOUNT</p>
            </div>
        </div>
        <br>
        <div class="line-dashed"></div>
        <br><br>
        <div class="row">
            <!-- If you are a customer -->
            <div class="col-md-7">
                <div class="customer">
                    <p class="riesling" style="font-size: 2em">LOGIN FORM</p>
                    <br>
                    <div class="line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="ribon">Email</div>
                        </div>
                        <div class="col-sm-9"><input type="email" class="form-control" id="email" placeholder="Enter Email Address"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="ribon">Password</div>
                        </div>
                        <div class="col-sm-9"><input type="password" class="form-control" id="password" placeholder="Enter Passwrod"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-5"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <a href="index.html" type="button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If you are a guest -->
            <div class="col-md-5">
                <div class="guest">
                    <p class="riesling" style="font-size: 2em">NEW CUSTOMERS</p>
                    <br>
                    <div class="line-dashed"></div>
                    <br><br>
                    <p class="lead">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.
                    </p>
                    <br><br><br>
                    <a href="register.html" type="button" class="btn btn-success">CREATE AN ACCOUNT</a>
                </div>
            </div>

        </div>
    </div>
    <br><br><br><br><br>
    @stop