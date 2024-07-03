@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - Web Development</h4>
            <h2>WEB DEVELOPMENT</h2>
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
                        <li class="active"><a href="{{ route('webservices') }}">Web Development<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('socialservices') }}">Social Media Marketing<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('graphicservices') }}">Graphic Designing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('payservices') }}">Pay Per Click<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/web1.jpg" alt="" id="webimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/web2.png" alt="">
            </div>

            <div class="down-appdetail">
                <h2>Web Development</h2>
                <p>Prashant Digital Growth takes your online presence to the next level with our exceptional website development services. From concept to execution, our expert team crafts visually stunning, responsive, and high-performance websites that leave a lasting impression on your audience.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
               <div class="timelineimg-content">
                <div class="timeline-title">
                    <h2>Bespoke Web Solutions</h2>
                    <p>Your business is unique, and so should be your website. Prashant Digital Growth specializes in creating bespoke web solutions tailored to your specific needs and brand identity. We bring your vision to life, ensuring that your website is a true reflection of your business values and objectives.</p>
                </div>  

                <div class="timelineimg">
                 <img src="/images/web3.jpg" src="">
                 </div> 
                 </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>Mobile-First Design:</h3>
                            <p>In an era dominated by mobile devices, we prioritize mobile-first design principles. Prashant Digital Growth ensures that your website not only looks exceptional on desktops but also provides a seamless and engaging experience across a diverse range of smartphones and tablets. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>E-Commerce Excellence</h3>
                            <p>Open new avenues for revenue generation with Prashant Digital Growth's e-commerce website development. We create secure, user-friendly, and visually appealing online stores that not only showcase your products or services but also facilitate a smooth and enjoyable shopping experience for your customers. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>Content Management Mastery</h3>
                            <p>Take control of your website's content effortlessly with our user-friendly content management systems (CMS). Prashant Digital Growth integrates robust CMS solutions, allowing you to update, modify, and expand your website's content with ease, ensuring it stays fresh and relevant. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Responsive Support And Maintenance</h3>
                            <p>Prashant Digital Growth is not just a one-stop solution; we're your long-term digital partner. Our responsive support and maintenance services ensure that your website remains up-to-date, secure, and operates at peak performance. Count on us for ongoing excellence. </p>
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
