@extends('master')
@section('content')

<br><br><br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" >
  <li class="nav-item" role="presentation" >
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="{{url('profile')}}">Profile</a></button>
  </li>
  <li>
  <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('profile-requests')}}">Your Requests</a></button>
  </li>
  <li class="nav-item" role="presentation">
    <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('/profile-donations')}}">Your Donations</a></button>
  </li>
  <li class="nav-item" role="presentation">
    <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true"><a href="{{url('addprofile')}}">Donate now</a></button>
  </li>
</ul>

<div class="container">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" style="margin: 4% 0">
			<div class="card h-100">
				<div class="card-body">
					<div class="account-settings">
						<div class="user-profile">
							<div class="user-avatar"  >
								<img src="{{asset('storage/images/'.Auth::user()->image_name)}}" alt="">
							</div>
							<h5 class="user-name">{{ Auth::user()->name }}</h5>
							<h6 class="user-email">{{ Auth::user()->email}}</h6>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" style="margin: 4% 0">
			<div class="card h-100">
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2" style="color:#51B7C6">Personal Details</h6><br>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<form method="POST" action="{{route('profile.update',Auth::user()->id)}}"enctype="multipart/form-data">

								@csrf
								@method('PUT')
								</div>
								<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="name">Full Name</label>
								<input type="text" value="{{ Auth::user()->name }}" class="form-control" id="eMail" name="user_name" >
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="eMail">Email</label>
								<input type="email" value="{{ Auth::user()->email}}"  class="form-control" id="eMail" name="user_email" >
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="ciTy">Password</label>
								<input type="password" class="form-control" id="ciTy" placeholder="Password"
								value=""	name="password">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" value="{{Auth::user()->phone}}" class="form-control" id="phone" name="user_mobile">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="Street">Address</label>
								<input type="text" class="form-control" id="Street" 
								value="{{Auth::user()->user_address}}"	name="user_address">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="zIp">image</label>
								<input type="file" value="{{ Auth::user()->image_path, Auth::user()->image_name}}" class="form-control" id="zIp" placeholder="Zip Code"
									name="image_name">
									
							</div>
						</div>
					</div>
</div>
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-right">
								<button type="submit" id="submit" name="submit" class="btn"
									style="background-color:#51B7C6">Save</button>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div> <br><br>

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

	.account-settings .user-profile h6.user-email {
		margin: 0;
		font-size: 0.8rem;
		font-weight: 400;
		color: #9fa8b9;
	}

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