<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== Font Awesome  ===============-->
    <script src="https://kit.fontawesome.com/06bbfbb501.js" crossorigin="anonymous"></script>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

          <!--=============== CSS ===============-->
          <link rel="stylesheet" href="{{ asset('css/headerStyles.css') }}">
    <!--=============== Bootstrap ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Include CSS and JavaScript files for intl-tel-input -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



    <title>{{ $title ?? 'Home' }}</title>

</head>

<body>
   

   

    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-planet-line"></i> Mobile Unlock
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="{{route('home.show')}}" class="nav__link">Home</a></li>

                    

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> IEMI Services
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Major Services
                                </a>
                            </li>

                            <!--=============== DROPDOWN SUBMENU ===============-->

                        </ul>
                    </li>

                    {{-- <li><a href="#" class="nav__link">Products</a></li>
                    <li><a href="#" class="nav__link">Contact</a></li> --}}
                    <!--=============== DROPDOWN 2 ===============-->
                   @if (session()->has('user'))
                   <li class="dropdown__item">
                    <div class="nav__link">
                        {{session()->get('user')->username}} <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-user-line"></i> Profiles
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-lock-line"></i> Accounts
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-message-3-line"></i> Messages
                            </a>
                        </li>
                    </ul>
                </li>
                   @endif
                    
                   @if (!session()->has('user'))
                   <div class="d-flex justify-center align-items-center gap-2 ">
                            
                       <a href="{{route('login.show')}}" class="text-white btn btn-dark">Login</a>
                        <a href="{{route('register.show')}}"  class="text-white btn btn-primary" >Sign Up</a>
                    </div>
                    @endif
                    @if (session()->has('user'))
                   <div class="d-flex justify-center align-items-center gap-2 ">
                            
                       <a href="{{route('logout')}}" class="text-white btn btn-dark">Logout</a>
                    </div>
                    @endif
                </ul>


            </div>

        </nav>
    </header>
