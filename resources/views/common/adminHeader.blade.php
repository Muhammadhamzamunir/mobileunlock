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
    
    <div class="adminheader p-2" style=" background-color: var(--black-color) !important;">
        <button class="btn btn-primary p-2 rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
            <i class="ri-menu-line"></i> <!-- Add Remix Icon toggle button icon -->
        </button>
    </div>
    
    
    
    <div class="offcanvas offcanvas-start bg-black text-white" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Menu</h5>
            <button type="button" class="btn-close  text-reset"   data-bs-dismiss="offcanvas" aria-label="Close"> <i class="ri-close-line text-white " style=" font-size: 20px !important;"></i></button>
        </div>
        <div class="offcanvas-body">
            <!-- Client Dropdown -->
            <ul class="nav flex-column">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%;">
                        Client
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="clientDropdown">
                        <li><a class="dropdown-item" href="{{route('allclients.show')}}" style="width: 100%;">Clients Record</a></li>
                        <li><a class="dropdown-item" href="#" style="width: 100%;">Add New User</a></li>
                    </ul>
                </li>
            </ul>
    
            <!-- Services Dropdown -->
            <ul class="nav flex-column">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%;">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="#" style="width: 100%;">All Services</a></li>
                        <li><a class="dropdown-item" href="#" style="width: 100%;">Add Services</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    