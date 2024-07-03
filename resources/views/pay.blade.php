@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - Pay Per Click</h4>
            <h2>PAY PER CLICK</h2>
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
                        <li><a href="{{ route('appservices') }}">App Development <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li><a href="{{ route('webservices') }}">Web Development<i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li><a href="{{ route('socialservices') }}">Social Media Marketing<i
                                    class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('graphicservices') }}">Graphic Designing <i
                                    class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li class="active"><a href="{{ route('payservices') }}">Pay Per Click<i
                                    class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
                <img src="/images/pay1.jpeg" alt="" id="payimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/pay2.jpeg" alt="">
            </div>

            <div class="down-appdetail">
                <h2>Pay Per Click</h2>
                <p>Prashant Digital Growth takes your online advertising to the next level with our PPC services. Experience
                    the power of driving instant, targeted traffic to your website while ensuring every click is a potential
                    conversion. Maximize your ROI with our expertly crafted PPC campaigns.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
                <div class="timelineimg-content">
                    <div class="timeline-title">
                        <h2>Strategic Campaign Planning:</h2>
                        <p>Success in PPC advertising starts with a solid plan. Prashant Digital Growth's experts develop
                            strategic PPC campaigns tailored to your business goals. From keyword selection to ad creatives,
                            we meticulously plan every aspect to ensure your ads reach the right audience at the right time.
                        </p>
                    </div>

                    <div class="timelineimg">
                        <img src="/images/pay3.jpg" src="">
                    </div>
                </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>
                                Google Ads Excellence:</h3>
                            <p>Dominate search engine results with our Google Ads expertise. Prashant Digital Growth's PPC
                                specialists are adept at crafting compelling ads that stand out on the world's largest
                                search engine. We optimize your campaigns for maximum visibility, clicks, and conversions.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>
                                Social Media PPC Prowess:</h3>
                            <p>Leverage the immense reach of social media platforms with Prashant Digital Growth's social
                                media PPC services. Whether it's Facebook, Instagram, LinkedIn, or Twitter, our specialists
                                create highly targeted ads that engage your audience and drive desired actions. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>Budget Optimization For ROI:</h3>
                            <p>Prashant Digital Growth understands the importance of a well-optimized budget. We ensure your
                                ad spend is utilized efficiently, focusing on high-performing keywords and audience
                                segments. Experience maximum return on investment with our budget-conscious PPC strategies
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Ad Copy That Converts:</h3>
                            <p>Craft compelling narratives that drive action with Prashant Digital Growth's ad copywriting
                                expertise. Our team ensures that your ad copies are not just informative but also
                                persuasive, encouraging users to click and convert. Captivate your audience from the first
                                impression. </p>
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
