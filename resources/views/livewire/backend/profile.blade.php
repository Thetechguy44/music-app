<div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
                <div class="card-body">
                   <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                <img src="{{ auth()->user()->picture }}" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100" loading="lazy">
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">{{$name}}</h4>
                                <span> - {{$artist_name}}</span>
                            </div>
                        </div>
                        <ul class="d-flex nav nav-pills mb-0 text-center profile-tab nav-slider" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $tab == 'profile_profile' ? 'active' : '' }}" data-bs-toggle="tab" wire:click.prevent='selectTab("profile_profile")' href="#profile_profile" role="tab" aria-selected="false" tabindex="-1">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $tab == 'profile_settings' ? 'active' : '' }}" data-bs-toggle="tab" wire:click.prevent='selectTab("profile_settings")' href="#profile_settings" role="tab" aria-selected="false" tabindex="-1">Edit Profile</a>
                            </li>
                            <div class="nav-slider-thumb position-absolute nav-link" aria-selected="false" tabindex="-1" role="tab" style="padding: 0px; width: 71px; height: 37px; transform: translate3d(0px, 0px, 0px); transition: 300ms ease-in-out;"><a class="nav-link active show" data-bs-toggle="tab" href="#profile-feed" role="tab" aria-selected="true"></a>
                            </div>
                        </ul>
                   </div>
                </div>
           </div>
        </div>
        <div class="col-lg-12">
           <div class="profile-content tab-content iq-tab-fade-up">
             <div id="profile_profile" class="tab-pane fade {{ $tab == 'profile_profile' ? 'active show' : '' }}" role="tabpanel">
                <div class="card">
                   <div class="card-header">
                      <div class="header-title">
                         <h4 class="card-title">Profile</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="text-center">
                         <div>
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/writer-5.png" alt="profile-img" class="rounded-pill avatar-130 img-fluid" loading="lazy">
                         </div>
                         <div class="mt-3">
                            <h3 class="d-inline-block">{{$name}}</h3>
                            <p class="d-inline-block pl-3"> {{$artist_name}}</p>
                            <p class="mb-0">{{$bio}}</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="card">
                   <div class="card-header">
                      <div class="header-title">
                         <h4 class="card-title">About User</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="user-bio">
                         <p>{{$bio}}</p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Joined:</h6>
                      <p>{{$created_on}}</p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Lives:</h6>
                      <p>{{$address}}</p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Email:</h6>
                      <p><a href="#" class="text-body"> {{$email}}</a></p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Url:</h6>
                      <p><a href="#" class="text-body" target="_blank"> www.bootstrap.com </a></p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Contact:</h6>
                      <p><a href="#" class="text-body">{{$phone}}</a></p>
                      </div>
                   </div>
                </div>
             </div>
             <div id="profile_settings" class="tab-pane fade {{ $tab == 'profile_settings' ? 'active show' : '' }}" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title"> Edit Profile</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Update Profile</p>
                        <form wire:submit.prevent="update()">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{session('message')}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault01">Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" wire:model="name" required>
                                    @error('name')
                                        <span class="alert text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="email" class="form-control" id="validationCustomUsername" aria-label="Email" aria-describedby="basic-addon1" wire:model="email" required>
                                        @error('email')
                                            <span class="alert text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault03">Phone</label>
                                    <input type="text" class="form-control" id="validationDefault03" wire:model="phone">
                                    @error('phone')
                                        <span class="alert text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                @if(auth()->user()->role === "artist")
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername" class="form-label">Artist Name</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-label="Username" aria-describedby="basic-addon1" wire:model="artist_name">
                                        @error('artist_name')
                                            <span class="alert text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationTextarea" class="form-label">Bio</label>
                                    <textarea class="form-control" id="validationTextarea" placeholder="Write a short bio about yourself" wire:model="bio">{{$bio}}</textarea>
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                @endif
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault04">Gender</label>
                                    <select class="form-select" id="validationDefault04" wire:model="selectedGender">
                                        <option selected>-- select --</option>
                                        @foreach ($genderOptions as $option)
                                            <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                                        @endforeach
                                    </select>
                                    @error('selectedGender')
                                        <span class="alert text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault05">Date of Birth</label>
                                    <input type="date" class="form-control" id="validationDefault05" wire:model="dob">
                                    @error('dob')
                                        <span class="alert text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault05">Address</label>
                                    <input type="text" class="form-control" id="validationDefault05" wire:model="address">
                                    @error('address')
                                        <span class="alert text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
          </div>
        </div>
    </div>
</div>
