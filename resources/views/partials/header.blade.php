<header class="header my-40">
    <div class="container-fluid">
        <nav class="navigation d-flex align-items-center justify-content-between">
            <a href="index-2.html" class="d-flex align-items-center">
                <img src="{{ asset('front/assets/media/user/logo.png')}}" alt="/logo" class="header-logo">
            </a>
            <div class="menu-button-right">
                <div class="main-menu__nav">
                    <ul class="main-menu__list">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('rental') }}">Rental</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-menu__right">
                <div class="search-heart-icon d-md-flex d-none align-items-center gap-24">
                    <a href="book-now.html" class="cus-btn">
                        <span class="btn-text">
                            Book now
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path
                                    d="M18.0098 6.62C17.9083 6.37565 17.7141 6.18147 17.4698 6.08C17.3496 6.02876 17.2205 6.00158 17.0898 6H7.08978C6.82457 6 6.57021 6.10536 6.38268 6.29289C6.19514 6.48043 6.08978 6.73478 6.08978 7C6.08978 7.26522 6.19514 7.51957 6.38268 7.70711C6.57021 7.89464 6.82457 8 7.08978 8H14.6798L6.37978 16.29C6.28605 16.383 6.21166 16.4936 6.16089 16.6154C6.11012 16.7373 6.08398 16.868 6.08398 17C6.08398 17.132 6.11012 17.2627 6.16089 17.3846C6.21166 17.5064 6.28605 17.617 6.37978 17.71C6.47275 17.8037 6.58335 17.8781 6.70521 17.9289C6.82707 17.9797 6.95777 18.0058 7.08978 18.0058C7.22179 18.0058 7.3525 17.9797 7.47436 17.9289C7.59622 17.8781 7.70682 17.8037 7.79978 17.71L16.0898 9.41V17C16.0898 17.2652 16.1951 17.5196 16.3827 17.7071C16.5702 17.8946 16.8246 18 17.0898 18C17.355 18 17.6094 17.8946 17.7969 17.7071C17.9844 17.5196 18.0898 17.2652 18.0898 17V7C18.0882 6.86932 18.061 6.74022 18.0098 6.62Z" />
                            </svg>
                        </span>
                        <span>
                            Book now
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path
                                    d="M18.0098 6.62C17.9083 6.37565 17.7141 6.18147 17.4698 6.08C17.3496 6.02876 17.2205 6.00158 17.0898 6H7.08978C6.82457 6 6.57021 6.10536 6.38268 6.29289C6.19514 6.48043 6.08978 6.73478 6.08978 7C6.08978 7.26522 6.19514 7.51957 6.38268 7.70711C6.57021 7.89464 6.82457 8 7.08978 8H14.6798L6.37978 16.29C6.28605 16.383 6.21166 16.4936 6.16089 16.6154C6.11012 16.7373 6.08398 16.868 6.08398 17C6.08398 17.132 6.11012 17.2627 6.16089 17.3846C6.21166 17.5064 6.28605 17.617 6.37978 17.71C6.47275 17.8037 6.58335 17.8781 6.70521 17.9289C6.82707 17.9797 6.95777 18.0058 7.08978 18.0058C7.22179 18.0058 7.3525 17.9797 7.47436 17.9289C7.59622 17.8781 7.70682 17.8037 7.79978 17.71L16.0898 9.41V17C16.0898 17.2652 16.1951 17.5196 16.3827 17.7071C16.5702 17.8946 16.8246 18 17.0898 18C17.355 18 17.6094 17.8946 17.7969 17.7071C17.9844 17.5196 18.0898 17.2652 18.0898 17V7C18.0882 6.86932 18.061 6.74022 18.0098 6.62Z" />
                            </svg>
                        </span>
                    </a>
                </div>
                <a href="#" class="d-xl-none d-flex main-menu__toggler mobile-nav__toggler">
                    <i class="fa-light fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
</header>
