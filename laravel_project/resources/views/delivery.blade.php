@extends('master')
@section('content')
<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-image:
            url("https://i.imgur.com/GMmCQHC.png");
        background-repeat: no-repeat;
        background-size: 100% 100%
    }

    .card {
        padding: 30px 40px;
        margin-top: 60px;
        margin-bottom: 60px;
        border: none !important;
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
    }

    .blue-text {
        color: #00BCD4
    }

    .form-control-label {
        margin-bottom: 0
    }

    input,
    textarea,
    button {
        padding: 8px 15px;
        border-radius: 5px !important;
        margin: 5px 0px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        font-size: 18px !important;
        font-weight: 300
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #00BCD4;
        outline-width: 0;
        font-weight:
            400
    }

    .btn-block {
        text-transform: uppercase;
        font-size: 15px !important;
        font-weight: 400;
        height: 43px;
        cursor:
            pointer
    }

    .btn-block:hover {
        color: #fff !important
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }
</style>
<script>
    function validate(val) {
    // v1 = document.getElementById("fname");
    v2 = document.getElementById("lname");
    // v3 = document.getElementById("email");
    v4 = document.getElementById("mob");
    v5 = document.getElementById("job");
    v6 = document.getElementById("ans");

    flag2 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

    return flag;
}


</script>




<div class="hero-wrap"
    style="background-image: url('https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/BkNYJ-q_giyyhrxcu/videoblocks-positive-volunteer-helping-wheelchaired-man-with-carring-products_bl9gcazlkiz_thumbnail-1080_01.png');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="index.html">Home</a></span> <span>Event</span></p> --}}
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Delivery
                    Volunteering</h1>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h1 style="color:#2F8F9D">Be a volunteer</h1>
                <div class="card">
                    <h5 class="text-center mb-4" style="color:#2F8F9D">Registration form</h5>
                    <form class="form-card"  method="POST" action="{{route('deliveryorders.store')}}">
                        @csrf
                        
                        <div class="row justify-content-between text-left">

                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">First name<span class="text-danger"> </span></label> <input
                                    type="text" id="fname" name="delivery_name" @foreach($data as $dates) value="  {{ Auth::user()->name }}" @endforeach
                                    onblur="validate(1)" disabled> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Last name<span class="text-danger"> *</span></label> <input
                                    type="text" id="lname" name="delivery_lname" placeholder="Enter your last name"
                                    onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Email<span class="text-danger"> </span></label> <input
                                    type="text" id="email" name="delivery_email"@foreach($data as $users) value="{{ $users->email}}" @endforeach onblur="validate(3)" disabled>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Phone number<span class="text-danger"> *</span></label> <input
                                    type="text" id="mob" name="delivery_mobile" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Address<span class="text-danger"> *</span></label> <input
                                    type="text" id="job" name="delivery_address" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3"
                                    style="color:#2F8F9D">Why do you want to be with us?<span class="text-danger">
                                        *</span></label> <input type="text" id="ans" name="delivery_message" placeholder=""
                                    onblur="validate(6)"> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary"
                                    style="color:white" >Submit</button> </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</section>



    
@endsection