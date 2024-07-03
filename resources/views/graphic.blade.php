@extends('layouts.main')

@section('content')
    <div class="allserviceimg">
        <div class="allserviceherotext">
            <h4>Home - Graphic Design</h4>
            <h2>GRAPHIC DESIGNING</h2>
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
                        <li class="active"><a href="{{ route('graphicservices') }}">Graphic Designing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('seoservices') }}">SEO Marketing <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('payservices') }}">Pay Per Click<i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('apiservices') }}">API <i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><a href="{{ route('dataservices') }}">Data Analytics<i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <img src="/images/graphics1.jpg" alt="" id="graphicsimage1">
            </div>
        </div>
    </section>


    <section class="appcontents ">
        <div class="appimg-content">
            <div class="downappimg">
                <img src="/images/graphics2.jpg" alt="">
            </div>

            <div class="down-appdetail">
                <h2>GRAPHIC_DESIGNING</h2>
                <p>Prashant Digital Growth elevates your brand aesthetics with our captivating graphic designing services. From eye-catching logos to stunning marketing collateral, our expert designers craft visuals that not only resonate with your audience but also leave a lasting impression.</p>
            </div>
        </div>
        <section>

            <section class="timeline-section">
               <div class="timelineimg-content">
                <div class="timeline-title">
                    <h2>Strategic Brand Identity:</h2>
                    <p>Your brand's visual identity is its first impression. Prashant Digital Growth takes a strategic approach to graphic design, creating visual elements that seamlessly align with your brand's personality, values, and messaging. We ensure consistency across all touchpoints for a cohesive brand experience.</p>
                </div>  

                <div class="timelineimg">
                 <img src="/images/graphics3.jpg" src="">
                 </div> 
                 </div>

                <div class="timeline-items">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">01.</div>
                        <div class="timeline-content">
                            <h3>Customized Creativity:</h3>
                            <p>One size does not fit all. Prashant Digital Growth's graphic designers specialize in customized creativity, tailoring visuals to suit your unique brand requirements. Whether it's a logo, brochure, or social media post, our designs are crafted to stand out and make an impact.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">02.</div>
                        <div class="timeline-content">
                            <h3>Compelling Marketing Collateral:</h3>
                            <p>Transform your marketing materials into compelling assets that drive engagement and conversions. Prashant Digital Growth designs impactful brochures, flyers, posters, and more, ensuring your brand is represented with excellence across both digital and print channels </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">03.</div>
                        <div class="timeline-content">
                            <h3>Web Design Elegance:</h3>
                            <p>Your website is your digital storefront. Prashant Digital Growth's graphic design team ensures that your website is not only visually appealing but also user-friendly. From layout design to iconography, we enhance the overall user experience, keeping visitors engaged and navigating seamlessly. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">04.</div>
                        <div class="timeline-content">
                            <h3>Social Media Visuals That Pop</h3>
                            <p>Cut through the social media noise with visuals that pop. Prashant Digital Growth creates stunning graphics for your social media channels, ensuring your brand remains visually consistent and compelling across platforms. From cover photos to shareable content, we've got your social presence covered.</p>
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
