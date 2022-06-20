@extends('master')
@section('content')

<style>
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
        /* font-size: 18px !important;
        font-weight: 300 */
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #00BCD4;
        outline-width: 0;
        /* font-weight:
            400 */
    }

    .btn-block {
        text-transform: uppercase;
        /* font-size: 15px !important;
        font-weight: 400; */
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




{{-- <div class="hero-wrap"
    style="background-image: url('https://d20umu42aunjpx.cloudfront.net/landingpages/volunteer-header.png');"
    data-stellar-background-ratio="0.5">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></h1>
            </div>
        </div>
    </div>
</div> --}}



<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" style="position: relative; top: 100px;">
	<li class="nav-item" role="presentation" >
	  <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="{{url('profile')}}">Profile</a></button>
	</li>
	<li class="nav-item" role="presentation">
	  <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('/profile-requests')}}">Your Requests</a></button>
	</li>
	<li class="nav-item" role="presentation">
	  <button  class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('/profile-donations')}}">Your Donations</a></button>
	</li>
	<li class="nav-item" role="presentation">
	  <button  class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('addprofile#myTab')}}">Donate Now</a></button>
	</li>
  </ul>

<div class="container">
    <div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" style="margin: 8% 0">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
								<img src="{{asset('storage/images/'.Auth::user()->image_name)}}" alt="">
                            </div>
							<h5 class="user-name">{{ Auth::user()->name }}</h5>
							<h6 class="user-email" style="font-size: 0.788rem;">{{ Auth::user()->email }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" style="margin: 8% 0">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="mb-2" style="color:#51B7C6">Personal Details</h6>
                    <form method="POST" action="{{ route('addprofile.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" style="color:#2F8F9D">Name of the medical equipment
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="job" name='item_name' placeholder="" onblur="validate(6)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label>Category  </label>
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <option selected>Choose Category..</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                   @endforeach
                                  </select>
                              </div>
                            </div>
                          </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> 
                                <label class="form-control-label px-3" style="color:#2F8F9D">Description
                                    <span class="text-danger">*</span>
                                </label> 
                                <textarea id="ans" name="item_description" placeholder="" onblur="validate(7)"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3" style="color:#2F8F9D">Image
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="file" id="job" name="item_image" placeholder="" onblur="validate(5)"> 
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-6">
                                <button type="submit" id="submit" name="submit" class="btn" style="background-color:#51B7C6;margin-left:100%">Donate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>

<style type="text/css">
	body {
		margin: 0;
		padding-top: 40px;
		color: #2e323c;
		background: #f5f6fa;
		position: relative;
		height: 100%;
	}

	.account-settings .user-profile {
		margin: 0 0 1rem 0;
		padding-bottom: 1rem;
		text-align: center;
	}

	.account-settings .user-profile .user-avatar {
		margin: 0 0 1rem 0;
	}

	.account-settings .user-profile .user-avatar img {
		width: 90px;
		height: 90px;
		-webkit-border-radius: 100px;
		-moz-border-radius: 100px;
		border-radius: 100px;
	}

	.account-settings .user-profile h5.user-name {
		margin: 0 0 0.5rem 0;
	}

<<<<<<< HEAD
    .account-settings .user-profile h6.user-email {
        margin: 0;
        font-size: 0.78rem;
        font-weight: 400;
        color: #9fa8b9;
    }
=======
	.account-settings .user-profile h6.user-email {
		margin: 0;
		font-size: 0.8rem;
		font-weight: 400;
		color: #9fa8b9;
	}
>>>>>>> 90ed253661c3fa862ea3d7636f650f006d5b77b3

	.account-settings .about {
		margin: 2rem 0 0 0;
		text-align: center;
	}

	.account-settings .about h5 {
		margin: 0 0 15px 0;
		color: #007ae1;
	}

	.account-settings .about p {
		font-size: 0.825rem;
	}

	.form-control {
		border: 1px solid #cfd1d8;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		font-size: .825rem;
		background: #ffffff;
		color: #2e323c;
	}

	.card {
		background: #ffffff;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		border: 0;
		margin-bottom: 1rem;
	}
</style>

<script type="text/javascript">

</script>
@endsection