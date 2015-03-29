@extends('auth_template.temp')
@section('content')
    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="riesling" style="font-size: 2em">REGISTER</p>
            </div>
        </div>
        <br>
        <div class="line-dashed"></div>
        <br><br>
        <div class="row">

            <div class="col-md-4">
                <img src="img/banner_left_food.jpg" height="254" width="236" alt=""><br><br>
                <img src="img/poster.jpg" height="305" width="236" alt="">
            </div>

            <!-- Register Form Starter -->
            <div class="col-md-8">
                <div class="customer">
                    <p class="riesling" style="font-size: 2em">REGISTER FORM</p>
                    <br>
                    <div class="line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="ribon">Full Name</div>
                        </div>
                        <div class="col-sm-9"><input type="text" class="form-control" id="fullname" placeholder="Enter Your Full Name"></div>
                    </div>
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
                        <div class="col-sm-9"><input type="password" class="form-control" id="password" placeholder="Enter Password"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="ribon">Re-Password</div>
                        </div>
                        <div class="col-sm-9"><input type="password" class="form-control" id="repassword" placeholder="Enter Confirm Password"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="ribon">Address</div>
                        </div>
                        <div class="col-sm-9"><input type="text" class="form-control" id="address" placeholder="Enter Your Address"></div>
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
                            <a href="index.html" type="button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br><br><br><br>
@stop