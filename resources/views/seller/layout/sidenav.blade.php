<div class="settings-widget">
    <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
        <a href="{{ route('designer.profile') }}">
            <img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('assets/img/img-04.jpg') }}" alt="" class="avatar-lg rounded-circle">
        </a>
        <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
            <p class="mb-2">Welcome,</p>
            <h3 class="mb-0"><a href="{{ route('designer.profile') }}">{{ Auth::user()->name }}</a></h3>
            <p class="mb-0">@designer{{ Auth::user()->id }}</p>
        </div>
    </div>
    <div class="settings-menu">
        <ul>
            <li class="nav-item">
                <a href="{{ route('designer.dashboard') }}" class="nav-link">
                    <i class="material-icons">verified_user</i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('designer.projects') }}" class="nav-link">
                    <i class="material-icons">business_center</i> Find Projects
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('designer.proposals') }}" class="nav-link">
                    <i class="material-icons">business_center</i> My Projects
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('designer.favourites') }}" class="nav-link">
                    <i class="material-icons">local_play</i> Favourites
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('designer.review') }}" class="nav-link">
                    <i class="material-icons">record_voice_over</i> Reviews
                </a>
            </li>
            <li class="nav-item">
                <a href="freelancer-portfolio" class="nav-link">
                    <i class="material-icons">pie_chart</i> Portfolio
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('designer.chats') }}" class="nav-link">
                    <i class="material-icons">chat</i> Messages
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="freelancer-membership" class="nav-link">
                    <i class="material-icons">person_add</i> Membership
                </a>
            </li>
            <li class="nav-item">
                <a href="freelancer-verify-identity" class="nav-link">
                    <i class="material-icons">person_pin</i> Verify Identity
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('designer.withdraw_payment') }}" class="nav-link">
                    <i class="material-icons">wifi_tethering</i> Payments
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('designer.profile-settings') }}" class="nav-link active">
                    <i class="material-icons">settings</i>  Settings
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="material-icons">power_settings_new</i> Logout
                </a>
            </li>
        </ul>
    </div>
</div>
