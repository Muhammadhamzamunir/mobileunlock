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
    <link rel="stylesheet" href="css/headerStyles.css">

    <title>{{ $title ?? 'Home' }}</title>
</head>

<body>
    <div class="media-links-container">
        <div class="container media-link-content">
            <span>rimsha@gmail.com</span> | <span>+92 12345678 </span>
            <i class="fa-brands fa-facebook-f fa-lg" style="color: #0c56d4;"></i>
            <i class="fa-brands fa-instagram fa-lg" style="color: #c24b24;"> </i>
            <i class="fa-brands fa-whatsapp fa-lg" style="color: #24c234;"> </i>
        </div>
    </div>


    <div style="height: 1px;background-color: rgb(171, 168, 168);"></div>

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
                    <li><a href="#" class="nav__link">Home</a></li>

                    <!-- <li><a href="#" class="nav__link">Company</a></li> -->

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
                            <!-- <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Documents
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Payments
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> Refunds
                                 </a>
                              </li>
                           </ul>
                        </li> -->
                        </ul>
                    </li>

                    <li><a href="#" class="nav__link">Products</a></li>
                    <li><a href="#" class="nav__link">Contact</a></li>
                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
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


                </ul>
            </div>
        </nav>
    </header>

    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
    

   