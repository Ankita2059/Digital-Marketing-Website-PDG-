@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - App Development</h4>
            <h2>APP DEVELOPMENT</h2>
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
                        <li class="active"><a href="{{ route('appservices') }}">App Development <i  class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('webservices') }}">Web Development<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('socialservices') }}">Social Media Marketing<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('graphicservices') }}">Graphic Designing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('payservices') }}">Pay Per Click<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/app1.jpeg" alt="" id="appimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/app2.jpeg" alt="">
            </div>

            <div class="down-appdetail">
                <h2>App Development</h2>
                <p>Dive into the world of innovation with Prashant Digital Growth's Mobile App Marvels! Our expert
                    app developers craft stunning, high-performance mobile applications tailored to elevate your
                    business to new heights. From sleek user interfaces to robust functionalities, we ensure your
                    app stands out in the crowded digital landscape.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
               <div class="timelineimg-content">
                <div class="timeline-title">
                    <h2>Tailored Solutions For Success:</h2>
                    <p>At Prashant Digital Growth, we understand that one size doesn't fit all. That's why our app development team specializes in creating tailor-made solutions for your unique business needs. Whether you're a startup or an enterprise, we design and develop apps that align perfectly with your objectives, ensuring a seamless user experience</p>
                </div>  

                <div class="timelineimg">
                 <img src="/images/timeline.jpeg" src="">
                 </div> 
                 </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>Cross-Platform Excellence</h3>
                            <p>Reach a wider audience without compromising quality! Our cross-platform app development
                                expertise enables your business to thrive on multiple devices and operating systems. We
                                leverage the latest frameworks and technologies to build apps that seamlessly run on iOS,
                                Android, and beyond, ensuring maximum market penetration. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>Innovative Features, Seamless Functionality</h3>
                            <p>Elevate your app with innovative features that captivate and engage users. Prashant Digital
                                Growth is at the forefront of incorporating cutting-edge functionalities into our apps. From
                                augmented reality to machine learning, we turn your app into a powerful tool that not only
                                meets user expectations but exceeds them. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>User-Centric Design</h3>
                            <p>User experience is at the core of our app development philosophy. Our designers and
                                developers work in tandem to create intuitive interfaces and engaging experiences. Prashant
                                Digital Growth ensures that every tap and swipe aligns with user expectations, resulting in
                                apps that users love to interact with. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Agile Development, Swift Delivery:</h3>
                            <p>Time is of the essence in the digital realm. With our agile development methodology, we
                                prioritize efficiency without compromising quality. Prashant Digital Growth ensures swift
                                delivery of your app, allowing you to capitalize on market opportunities and stay ahead of
                                the competition. </p>
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
