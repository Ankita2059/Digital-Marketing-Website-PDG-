@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - Data Analytics</h4>
            <h2>DATA ANALYTICS</h2>
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
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/Dataanalytic1.jpeg" alt="" id="dataimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/Dataanalytic2.png" alt="">
            </div>

            <div class="down-appdetail">
                <h2>Data Analytics</h2>
                <p>Prashant Digital Growth is your trusted partner in unlocking the power of data analytics. Our services are designed to turn raw data into actionable insights, driving strategic decisions and fostering success for your business in the digital era.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
               <div class="timelineimg-content">
                <div class="timeline-title">
                    <h2>Customized Analytics Solutions:</h2>
                    <p>Embrace the uniqueness of your business with Prashant Digital Growth's customized analytics solutions. We understand that one size doesn't fit all, and our analytics services are tailored to address your specific needs, objectives, and industry nuances.</p>
                </div>  

                <div class="timelineimg">
                 <img src="/images/Dataanalytic3.jpg" src="">
                 </div> 
                 </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>Predictive Analytics For Future Success:</h3>
                            <p>Stay ahead of the curve with Prashant Digital Growth's predictive analytics expertise. We leverage advanced algorithms and machine learning models to forecast trends, customer behavior, and market dynamics, empowering you to make informed decisions and position your business for future success. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>Actionable Business Intelligence:</h3>
                            <p>Data is valuable when it leads to action. Prashant Digital Growth ensures that the insights derived from your data are not only informative but actionable. From identifying opportunities to optimizing operations, our analytics solutions guide your business towards tangible and impactful outcomes. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>Real-Time Data Insights:</h3>
                            <p>In the fast-paced digital landscape, real-time insights are essential. Prashant Digital Growth's data analytics solutions provide real-time monitoring and analysis, allowing you to make timely decisions and respond swiftly to emerging opportunities or challenges. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Data Security And Compliance:</h3>
                            <p>Trust is paramount in data analytics. Prashant Digital Growth prioritizes the security and privacy of your data. Our analytics solutions adhere to industry standards and compliance requirements, ensuring that sensitive information is handled with the utmost care and confidentiality. </p>
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
