@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - API</h4>
            <h2>API</h2>
        </div>
    </div>

    <section class="service__details p_relative ">
        <div class="auto-container">
            <div class="row flex">
                <div class="sidebar__widget">
                    <div class="all__service">
                        <h4>All Services</h4>
                    </div>
                    <ul class="service__details__1__cat">
                       <li ><a href="{{ route('appservices') }}">App Development <i  class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('webservices') }}">Web Development<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('socialservices') }}">Social Media Marketing<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('graphicservices') }}">Graphic Designing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('payservices') }}">Pay Per Click<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/api1.jpeg" alt="" id="apiimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/api2.jpg" alt="">
            </div>

            <div class="down-appdetail">
                <h2>API</h2>
                <p>Prashant Digital Growth is your gateway to seamless connectivity and unparalleled integration with our
                    advanced API services. Our expert team ensures that your systems, applications, and platforms
                    communicate effortlessly, fostering a cohesive and efficient digital ecosystem.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
                <div class="timelineimg-content">
                    <div class="timeline-title">
                        <h2>Custom Solutions For Unique Needs:</h2>
                        <p>Recognizing that every business has unique requirements, Prashant Digital Growth specializes in
                            crafting custom API solutions. Our APIs are tailored to align with your specific business needs,
                            ensuring a perfect fit for your operations, regardless of industry or scale.</p>
                    </div>

                    <div class="timelineimg">
                        <img src="/images/api3.jpg" src="">
                    </div>
                </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>RESTful API Development:</h3>
                            <p>Experience the power of RESTful APIs designed for optimum performance and simplicity. Prashant Digital Growth excels in developing APIs that adhere to industry standards, providing a reliable and efficient way for your applications to communicate and share data. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>Cross-Platform Integration Mastery:</h3>
                            <p>Expand your reach with Prashant Digital Growth's cross-platform API integration expertise. Whether your applications run on iOS, Android, or other platforms, our APIs facilitate smooth communication, allowing you to deliver a consistent experience across diverse devices and operating systems. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>Secure Data Transactions:</h3>
                            <p>Trust is paramount when it comes to data transactions. Prashant Digital Growth prioritizes the security of your data. Our APIs are fortified with robust security measures, including encryption and authentication, ensuring the confidentiality and integrity of your sensitive information. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3> Real-Time Communication Solutions:</h3>
                            <p>In the fast-paced digital era, real-time communication is non-negotiable. Prashant Digital Growth's APIs facilitate instantaneous data exchange, enabling your applications to operate with the speed and responsiveness required to meet the expectations of today's users.</p>
                        </div>
                    </div>
                </div>
            </section>




            <section id="section-wrapper">
                <div class="contact-info">
                    <div class="contactinfo-wrap">
                        <h2 class="info-title">Contact Information</h2>
                        <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                        <ul class="info-details">
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span>Phone:</span> <br> <a href="tel:+ 1235 2355 98">+977 982-5433209</a>
                            </li>
                            <li>
                                <i class="fas fa-paper-plane"></i>
                                <span>Email:</span> <br> <a
                                    href="mailto:info@yoursite.com">info@prashantdigitalgrowth.com</a>
                            </li>
                            <li>
                                <i class="fas fa-globe"></i>
                                <span>Website:</span> <br> <a href="#">prashantdigitalgrowth.com</a>
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="form-wrap">
                        <form action="#" method="POST">
                            <h2 class="form-title">Send us a message</h2>
                            <div class="form-fields">
                                <div class="form-group">
                                    <input type="text" class="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email" placeholder="Mail">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <input type="submit" value="Send Message" class="submit-button">
                        </form>
                    </div>
                </div>
            </section>
        @endsection
