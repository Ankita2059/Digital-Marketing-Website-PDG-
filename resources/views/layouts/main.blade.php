<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDG | Prashant Digital Growth</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/services.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/digitalmarketing.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />


    {{-- php --}}
    <link rel="stylesheet" href="{{ asset('views/about.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/services.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/app.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/web.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/digital.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/graphic.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/seo.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/api.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/pay.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/social.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/data.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/faq.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/blog.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/contactus.blade.php') }}" />
    <link rel="stylesheet" href="{{ asset('views/digitalmarketing.blade.php') }}" />
     
     
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id="header">
        <nav class="flex container1">
            <div class="logo">
                <div class="logoimg">
                  <a href="{{route('dashboardpage')}}">  <img src="/images/logo.png" alt="" />
                </div>
            </div>
            <div class="navlist flex">
                <ul class="flex">
                    <li><a href="{{route('dashboardpage')}}" class="liactive">Home</a></li>
                    <li><a href="{{ route('aboutus') }}">About Us</a></li>

                    <li>
                        <div class="dropdown">
                            <a href="{{ route('services') }}"><button class="dropbtn">Services +<i
                                        class="fa-solid fa-sort-down"></i> </button> </a>
                            <div class="dropdown-content">
                                <a href="{{ route('appservices') }}">APP DEVELOPMENT</a>
                                <a href="{{ route('webservices') }}">WEBSITE DEVELOPMENT</a>
                                <a href="{{ route('socialservices') }}">SOCIAL MEDIA MARKETING</a>
                                <a href="{{ route('graphicservices') }}">GRAPHIC DESIGNING</a>
                                <a href="{{ route('seoservices') }}">SEO & CONTENTWRITING</a>
                                <a href="{{ route('payservices') }}">PAY PER CLICK</a>
                                <a href="{{ route('apiservices') }}">API</a>
                                <a href="{{ route('dataservices') }}">DATA ANALYTICS</a>
                            </div>

                        </div>

                    </li>


                    <li>
                        <a href="{{ route('digitalmarket') }}">Digital Marketing</a>
                    </li>
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li><a href="{{ route('faqs') }}">Faq</a></li>
                </ul>
            </div>
            <div class="searchdarksub flex">
                <div class="searchbar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="searchclick">
                        <form action="#">
                            <input class="form-control" type="text" placeholder="Search" />
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                        <div class="tagssec">
                            <h3>Popular tags:</h3>
                            <div class="tegs flex">
                                <a href="/">#API<span>,</span></a>
                                <a href="/">#SEO<span>,</span></a>
                                <a href="/">#Graphic Designing </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toggle-switch">
                    <input type="checkbox" class="l toggle-checkbox" id="dark-mode-toggle" />
                    <label class="toggle-label" for="dark-mode-toggle"></label>
                </div>
                <button class="subbtn"><a href="{{ route('contacts') }}">Contact Us</a></button>
                <input type="checkbox" id="checkbox" />
                <label for="checkbox" class="toggle">
                    <div class="bars" id="bar1"></div>
                    <div class="bars" id="bar2"></div>
                    <div class="bars" id="bar3"></div>
                </label>
            </div>
        </nav>
    </header>

    <div class="arrow--">
            <a href="#homesec"><img src="/images/up-arrow.png" alt="" id="uparrow"></a>
        </div>

    @yield('content')


    {{-- footer --}}
    <footer class="container footer" >

        <section class="footersec flex">
            <div class="logofooter">
                <div class="logof">
                    <a href="/" class="flex">
                        <img src="/images/logo.png" alt="" />
                    </a>
                </div>
                <p>
                    We will be glad to any cooperation, including the creation of a
                    franchise. Fill in the form and we shall discuss this in more
                    detail.
                </p>
                <h4>Address</h4>
                <p>Kawasoti-2, Panchakanya Chowk</p>
                <p>Nawalpur District, Nepal</p>
            </div>

            <div class="categoriesfooter">
                <div class="flex">
                    <div class="catefbx" id="catefbx1">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="/">Linkedin</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="/">Wikipedia</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="/">Google</a>
                            </li>

                        </ul>
                    </div>

                    <div class="catefbx" id="catefbx2">
                        <h3>Resources</h3>
                        <ul>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="/">Home</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="{{route('aboutus')}}">About Us</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="{{route('services')}}">Services</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="{{route('blogs')}}">Blogs</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i><a href="{{route('contacts')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="newsletterfooter" id="subform">
                <h3>Newsletter</h3>

                <p>
                    <i class="fa-solid fa-arrow-right"></i>info@prashantdigitalgrowth.com
                </p>
                <p>
                    <i class="fa-solid fa-arrow-right"></i>kawasoti-2, panchakanya chowk
                    in nawalpur district
                </p>
                <p><i class="fa-solid fa-arrow-right"></i>+977 982-5433209</p>

                <form action="" class="flex">
                    <div class="flex">
                        <i class="fa-regular fa-user"></i>
                        <input type="name" placeholder="Your name" />
                    </div>
                    <div class="flex">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" placeholder="Email address" />
                    </div>
                    <button type="submit" class="flex">
                        Subcribe<i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </section>
        <div class="themeauthor container flex">
            <div class="createdby">
                <h4>
                    &copy; 2023 Created by
                    <a href="https://www.codingwebstudio.com/" target="_blank" title="codingwebstudio">AK.com</a>
                </h4>
            </div>
            <div class="social flex">
                <div class="socialicon">
                    <i class="fa-brands fa-twitter"></i>
                    <h4>Twitter</h4>
                </div>
                <div class="socialicon">
                    <i class="fa-brands fa-facebook"></i>
                    <h4>Facebook</h4>
                </div>
                <div class="socialicon">
                    <i class="fa-brands fa-square-instagram"></i>
                    <h4>Instagram</h4>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cursor Html -->
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <!-- JS links -->
    <script src="/js/cursor.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/testimonials.js"></script>
    <script src="/js/faq.js"></script>



</body>

</html>
