@extends('layouts.main')

@section('content')
    <div class="digitalimg">
        <div class="digitalherotext">
            <h4>Home - Digital Marketing</h4>
            <h2>DIGITAL MARKETING</h2>
        </div>
    </div>


    <section class="digitalmarket container flex" >
        <div class="digital-contentimages ">
            <div class="digitalcontent ">
                <h2>Digital Marketing</h2>
                <h4>Story About This Work</h4>
                <p>Welcome to Prashant Digital Growth, a leading digital marketing firm in Delhi that assists clients in
                    increasing leads and sales as they expand their businesses online. Located in Delhi's Tagore Garden, we
                    strive to create a campaign with a high return on investment for our clients. We enjoy developing a
                    tight
                    working relationship with our clients so that we can better understand their business model, needs, and
                    expectations in order to design our tactics appropriately.Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Quasi et recusandae tempora repudiandae animi, placeat tempore blanditiis assumenda
                    voluptas officia soluta nihil nam vitae. Magni facere, eum dolore optio et. The services of SEO, social
                    media marketing, pay-per-click advertising, website design, and web development are all available from
                    our
                    team at any time. We help your brand and business succeed to the fullest by utilising our best practises
                    and
                    most effective digital marketing strategies.Every new trend in digital marketing sees us at the
                    forefront.
                    We provide specialised digital marketing solutions by comprehending the various problems and particular
                    needs of every type of company. Our primary objective is to assist our clients in enhancing their
                    operational performance and expanding their businesses through the more effective and efficient delivery
                    of
                    their goods and services in both current and emerging markets.</p>
            </div>

            <div class="digitalmarketimages">
                <img src="/images/digitalmarket1.jpeg" alt="">
                <img src="/images/digitalmarket2.jpeg" alt="">
                <img src="/images/digitalmarket3.jpeg" alt="">
                <img src="/images/digitalmarket4.jpeg" alt="">
                <img src="/images/digitalmarket5.jpeg" alt="">
                <img src="/images/digitalmarket6.jpeg" alt="">
            </div>
        </div>
    </section>

    {{-- recent post --}}
    <section class="recentpostsec container flex" >
        <div class="recentposts">
            <div class="bigtitle">
                <h2 class="textcolor">Recent posts</h2>
                <p>Don't miss the latest trends</p>
            </div>
            <div class="posts">
                <div class="post flex">
                    <a href="/">
                        <img src="/images/post1.jpeg" alt="">
                    </a>
                    <div class="postdetails">
                        <div class="postlabel">
                            <a href="/">APP DEVELOPMENT</a>
                        </div>
                        <a href="{{route('blogdetail')}}">
                            <h2>Prashant Digital Growth CodeSphere - Elevating Your Digital Presence Through App Development
                                Mastery</h2>
                        </a>
                        <p>Embark on a transformative journey in the realm of app development with Prashant Digital Growth.
                            We are your digital growth partners, and our blog, CodeSphere, is your gateway to unlocking the
                            full potential of app development for unprecedented digital success.</p>
                        <div class="posttimeteg flex">
                            <div class="flex" >
                             <a href="{{route('blogdetail')}}">Read More<i id="readarrow" class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="tegtime">
                                <h5 class="flex">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>5</span>mins read
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post flex">
                    <a href="/">
                        <img src="/images/post2.jpeg" alt="">
                    </a>
                    <div class="postdetails">
                        <div class="postlabel">
                            <a href="/">Website Development</a>
                        </div>
                        <a href="{{route('blogdetail1')}}">
                            <h2>Prashant Digital Growth WebForge - Building Digital Fortresses through Website Development
                                Prowess</h2>
                        </a>
                        <p>At Prashant Digital Growth, we recognize the pivotal role that a well-crafted website plays in
                            the digital landscape. Enter WebForge, our dedicated blog to guide you through the intricate
                            world of website development, designed to fortify your online presence and propel your brand to
                            new digital heights.</p>
                        <div class="posttimeteg flex">
                            <div class="flex">
                             <a href="{{route('blogdetail1')}}">Read More<i id="readarrow" class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="tegtime">
                                <h5 class="flex">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>5</span>mins read
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post flex">
                    <a href="/">
                        <img src="/images/post3.jpeg" alt="">
                    </a>
                    <div class="postdetails">
                        <div class="postlabel">
                            <a href="/">Digital Marketing</a>
                        </div>
                        <a href="{{route('blogdetail2')}}">
                            <h2>Prashant Digital Growth Propel360 - Navigating the Digital Marketing Cosmos</h2>
                        </a>
                        <p>At Prashant Digital Growth, we understand that in the ever-evolving digital landscape, mastering
                            the art of digital marketing is the key to propelling your brand to new heights. Enter
                            Propel360, our dedicated blog designed to be your compass in the vast cosmos of digital
                            marketing, guiding you through strategies, insights, and innovations to accelerate your brand's
                            digital journey.</p>
                        <div class="posttimeteg flex">
                            <div class="flex">
                              <a href="{{route('blogdetail2')}}">Read More<i id="readarrow" class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="tegtime">
                                <h5 class="flex">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>5</span>mins read
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post flex">
                    <a href="/">
                        <img src="/images/post4.jpeg" alt="">
                    </a>
                    <div class="postdetails">
                        <div class="postlabel">
                            <a href="/">Social Media Marketing</a>
                        </div>
                        <a href="{{route('blogdetail3')}}">
                            <h2>Prashant Digital Growth SocialSway - Navigating the Waves of Social Media Marketing</h2>
                        </a>
                        <p>Shaping digital landscapes. Enter SocialSway, our dedicated blog committed to guiding you through
                            the dynamic waves of social media marketing, unveiling strategies, insights, and innovations to
                            propel your brand to the forefront of the social sphere.</p>
                        <div class="posttimeteg flex">
                            <div class="flex">
                             <a href="{{route('blogdetail3')}}">Read More<i id="readarrow" class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="tegtime">
                                <h5 class="flex">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>5</span>mins read
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="postslider">
            <div class="popularposts">
                <div class="poptitle">  
                    <h3>Popular Posts</h3>
                </div>
                <div class="populposts">
                    <div class="popupost flex">
                        <img src="/images/popular1.png" alt="">
                        <div class="popupostde">
                            <a href="/">
                                <h4>Prashant Digital Growth DesignCanvas - Crafting Digital Masterpieces through Graphic
                                    Design Brilliance</h4>
                            </a>
                            <div class="poputime flex">
                                <h5><span>5</span>mins read</h5>
                                <p>▪</p>
                                <h5>25 April 2023</h5>
                            </div>
                        </div>
                    </div>
                    <div class="popupost flex">
                        <img src="/images/popular2.png" alt="">
                        <div class="popupostde">
                            <a href="/">
                                <h4>Prashant Digital Growth SEOscribe - Crafting Success with the Art of SEO and Content
                                    Writing</h4>
                            </a>
                            <div class="poputime flex">
                                <h5><span>5</span>mins read</h5>
                                <p>▪</p>
                                <h5>25 April 2023</h5>
                            </div>
                        </div>
                    </div>
                    <div class="popupost flex">
                        <img src="/images/popular3.png" alt="">
                        <div class="popupostde">
                            <a href="/">
                                <h4>Prashant Digital Growth ClickCraft - Navigating the Digital Landscape with Precision
                                    through Pay-Per-Click Mastery</h4>
                            </a>
                            <div class="poputime flex">
                                <h5><span>5</span>mins read</h5>
                                <p>▪</p>
                                <h5>25 April 2023</h5>
                            </div>
                        </div>
                    </div>
                    <div class="popupost flex">
                        <img src="/images/popular4.png" alt="">
                        <div class="popupostde">
                            <a href="/">
                                <h4>Prashant Digital Growth APIforge - Shaping Digital Excellence Through the Power of APIs
                                </h4>
                            </a>
                            <div class="poputime flex">
                                <h5><span>5</span>mins read</h5>
                                <p>▪</p>
                                <h5>25 April 2023</h5>
                            </div>
                        </div>
                    </div>
                    <div class="popupost flex">
                        <img src="/images/popular5.png" alt="">
                        <div class="popupostde">
                            <a href="/">
                                <h4>Prashant Digital Growth DataLens - Illuminating Pathways to Digital Success through Data
                                    Analytics</h4>
                            </a>
                            <div class="poputime flex">
                                <h5><span>5</span>mins read</h5>
                                <p>▪</p>
                                <h5>25 April 2023</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popularposts">
                <div class="poptitle">
                    <h3>Last Comment</h3>
                </div>
                <div class="postcomments">
                    <div class="comment">
                        <p><span>"</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio blanditiis
                            rerum suscipit quisquam quaerat odio repudiandae perspiciatis veritatis?<span>"</span>
                        </p>
                        <div class="authorcomment flex">
                            <img src="/images/author.png" alt="">
                            <div class="authortimename">
                                <h5>Coder</h5>
                                <span>25 August 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <p><span>"</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio blanditiis
                            rerum suscipit quisquam quaerat odio repudiandae perspiciatis veritatis?<span>"</span>
                        </p>
                        <div class="authorcomment flex">
                            <img src="/images/author.png" alt="">
                            <div class="authortimename">
                                <h5>Coder</h5>
                                <span>25 August 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <p><span>"</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio blanditiis
                            rerum suscipit quisquam quaerat odio repudiandae perspiciatis veritatis?<span>"</span>
                        </p>
                        <div class="authorcomment flex">
                            <img src="/images/author.png" alt="">
                            <div class="authortimename">
                                <h5>Coder</h5>
                                <span>25 August 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    {{-- testimonials --}}
    <div class="testimonials container" >
        <div class="center">
            <div class="testimonial">
                <h4>TESTIMONIALS</h4>
                <h2>Customers Testimonials</h2>
            </div>
        </div>

        <div class="slideshow-container">
            <div class="testimonialsDetails"></div>
            <div class="mySlides fade">

                <div class="customer-img">
                    <img src="/images/avatar_1.png" alt="customersImg">
                </div>
                <div class="text">"The positive experience I've had with your company has restored my
                    faith in great customer service." </div>
            </div>

            <div class="mySlides fade">

                <div class="customer-img">
                    <img src="/images/avatar2.jpg" alt="customersImg">
                </div>
                <div class="text"> "I love doing business with you because I can trust that you always
                    deliver on your promises."</div>
            </div>

            <div class="mySlides fade">

                <div class="customer-img">
                    <img src="/images/avatar3.webp" alt="customersImg">
                </div>
                <div class="text"> "Your product/service has made a significant impact on my business,
                    and I can't thank you enough for that."</div>
            </div>
        </div>
    </div>
    <br>

    <div style="text-align:center" >
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    </div>
@endsection
