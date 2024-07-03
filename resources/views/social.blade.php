@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - Social Media Marketing</h4>
            <h2>SOCIAL MEDIA MARKETING</h2>
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
                        <li class="active"><a href="{{ route('socialservices') }}">Social Media Marketing<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('graphicservices') }}">Graphic Designing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('payservices') }}">Pay Per Click<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/socialmedia.jpg" alt="" id="socialimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/socialmedia1.jpg" alt="">
            </div>

            <div class="down-appdetail">
                <h2>SOCIAL MEDIA MARKETING</h2>
                <p>Prashant Digital Growth transforms your social media presence into a dynamic force with our unparalleled social media marketing services. From strategy development to execution, we harness the power of social platforms to elevate your brand, engage your audience, and drive tangible results.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
               <div class="timelineimg-content">
                <div class="timeline-title">
                    <h2>Strategic Social Media Planning</h2>
                    <p>Your social media success starts with a solid plan. Prashant Digital Growth crafts bespoke social media strategies tailored to your brand's goals. Whether it's brand awareness, lead generation, or community building, our strategic planning ensures your social efforts align with your business objectives.</p>
                </div>  

                <div class="timelineimg">
                 <img src="/images/socialmedia2.jpg" src="">
                 </div> 
                 </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>Content That Captivates:</h3>
                            <p>Stand out in the social media crowd with captivating content. Prashant Digital Growth's content creators produce compelling visuals, engaging copy, and multimedia content that resonates with your audience. We craft a cohesive narrative across platforms, fostering a strong and memorable brand identity. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>Targeted Audience Engagement:</h3>
                            <p>It's not just about followers; it's about meaningful connections. Prashant Digital Growth focuses on targeted audience engagement, creating interactions that matter. We identify and reach your ideal audience, fostering a community that is not just large but genuinely interested in your brand. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>Ad Campaign Mastery:</h3>
                            <p>Amplify your reach and conversions with Prashant Digital Growth's expertly crafted social media ad campaigns. Whether it's on Facebook, Instagram, LinkedIn, or Twitter, we design and execute targeted campaigns that drive traffic, conversions, and measurable returns on investment. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Social Listening And Analytics:</h3>
                            <p>Understanding your audience is key to success. Prashant Digital Growth employs social listening tools and analytics to gain insights into audience sentiments, preferences, and behavior. We leverage this data to refine strategies, ensuring your brand stays relevant and responsive </p>
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
