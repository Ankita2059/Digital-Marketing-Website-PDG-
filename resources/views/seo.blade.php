@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - SEO and Content Writing</h4>
            <h2>SEO AND CONTENT WRITING</h2>
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
                        <li class="active"><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('payservices') }}">Pay Per Click<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/seo1.jpg" alt="" id="seoimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/seo2.jpg" alt="">
            </div>

            <div class="down-appdetail">
                <h2>SEO & CONTENTWRITING</h2>
                <p>Prashant Digital Growth is your key to unlocking heightened online visibility through our top-notch SEO
                    services. Our experts meticulously optimize your website, ensuring it ranks prominently in search engine
                    results. Get ready to stand out in the digital crowd and attract the right audience.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
                <div class="timelineimg-content">
                    <div class="timeline-title">
                        <h2>Strategic SEO Planning:</h2>
                        <p>Success in the digital landscape starts with a strategic SEO plan. Prashant Digital Growth's SEO
                            services are rooted in data-driven strategies, keyword research, and competitor analysis. We
                            craft a roadmap that ensures your website not only reaches but maintains a top position in
                            search engine rankings.</p>
                    </div>

                    <div class="timelineimg">
                        <img src="/images/seo3.jpg" src="">
                    </div>
                </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>On-Page And Off-Page Excellence:</h3>
                            <p>Achieve holistic SEO success with Prashant Digital Growth's comprehensive on-page and
                                off-page optimization strategies. From optimizing meta tags and content structure to
                                building high-quality backlinks, we cover all aspects to enhance your website's authority
                                and relevance. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>Local SEO Dominance:</h3>
                            <p>Capture the local market with precision through our Local SEO expertise. Prashant Digital
                                Growth ensures that your business is prominently featured in local search results, helping
                                you connect with potential customers in your geographical area and drive foot traffic to
                                your physical locations.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>SEO Analytics For Continuous Improvement:</h3>
                            <p>SEO is an evolving journey, and we believe in continuous improvement. Prashant Digital Growth
                                utilizes advanced analytics to monitor and analyze the performance of your SEO strategies.
                                We refine our approach based on real-time data, ensuring your website remains optimized for
                                ongoing success. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Mobile SEO Mastery:</h3>
                            <p>In the era of mobile dominance, Prashant Digital Growth ensures your website is optimized for
                                mobile devices. Our mobile SEO strategies enhance the user experience on smartphones and
                                tablets, contributing to improved rankings and increased user engagement. </p>
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
