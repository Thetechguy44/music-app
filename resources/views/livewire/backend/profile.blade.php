<div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
                <div class="card-body">
                   <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/64.jpg" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100" loading="lazy">
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Austin Robertson</h4>
                                <span> - Web Developer</span>
                            </div>
                        </div>
                        <ul class="d-flex nav nav-pills mb-0 text-center profile-tab nav-slider" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $tab == 'profile_profile' ? 'active' : '' }}" data-bs-toggle="tab" wire:click.prevent='selectTab("profile_profile")' href="#profile_profile" role="tab" aria-selected="false" tabindex="-1">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $tab == 'profile_settings' ? 'active' : '' }}" data-bs-toggle="tab" wire:click.prevent='selectTab("profile_settings")' href="#profile_settings" role="tab" aria-selected="false" tabindex="-1">Friends</a>
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
                            <h3 class="d-inline-block">Austin Robertson</h3>
                            <p class="d-inline-block pl-3"> - Web developer</p>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
                         <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Joined:</h6>
                      <p>Feb 15, 2021</p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Lives:</h6>
                      <p>United States of America</p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Email:</h6>
                      <p><a href="#" class="text-body"> austin@gmail.com</a></p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Url:</h6>
                      <p><a href="#" class="text-body" target="_blank"> www.bootstrap.com </a></p>
                      </div>
                      <div class="mt-2">
                      <h6 class="mb-1">Contact:</h6>
                      <p><a href="#" class="text-body">(001) 4544 565 456</a></p>
                      </div>
                   </div>
                </div>
             </div>
             <div id="profile_settings" class="tab-pane fade {{ $tab == 'profile_settings' ? 'active show' : '' }}" role="tabpanel">
                <div class="card">
                   <div class="card-header">
                      <div class="header-title">
                         <h4 class="card-title">Friends</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <ul class="list-inline m-0 p-0">
                         <li class="d-flex mb-4 align-items-center">
                            <img src="https://templates.iqonic.design/muzik/html/assets/images/dashboard/55.png" alt="story-img" class="rounded-pill avatar-40" loading="lazy">
                            <div class="ms-3 flex-grow-1">
                               <h6>Paul Molive</h6>
                               <p class="mb-0">Web Designer</p>
                            </div>
                            <div class="dropdown">
                               <span class="dropdown-toggle" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                               </span>
                               <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton9">
                                  <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                  <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                  <a class="dropdown-item " href="javascript:void(0);">block</a>
                               </div>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
        </div>
    </div>
</div>
