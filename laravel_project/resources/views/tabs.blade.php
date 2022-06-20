<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" >
  <li class="nav-item" role="presentation" >
    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="{{url('profile')}}">Profile</a></button>
  </li>
  <li class="nav-item" role="presentation">
    <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('/profile-requests')}}">Your Requests</a></button>
  </li>
  <li class="nav-item" role="presentation">
    <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('/profile-donations')}}">Your Donations</a></button>
  </li>
  <li class="nav-item" role="presentation">
    <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('addprofile#myTab')}}">Donate</a></button>
  </li>
</ul>