@extends('layouts.main')

@section('content')
    <main id="main">
        
        <section class="biosec container flex" id="homesec" >

            <div class="bio">
                <h4>IT SOLUTIONS</h4>
                <h1>
                    PDG
                    <div>
                        <span class="multi-text"></span>
                        <span class="blink"></span>
                    </div>
                </h1>
                <p>
                    By partnering with Prashant Digital Growth and leveraging our
                    expertise in website content, you can enjoy enhanced online
                    presence, increased website traffic, improved user experience,
                    stronger brand identity, lead generation and conversion, thought
                    leadership and industry authority, and data-driven optimization.
                    These benefits collectively contribute to the success of your
                    digital marketing efforts, helping you achieve your business goals
                    and drive sustainable growth.
                </p>
                <div class="emailsub">
                    <form action="#" class="flex">
                        <input type="email" name="email" id="email" placeholder="Type your email address" />
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="bioimg">
                <img src="/images/home.png" alt="" />
                <div class="pattern-1"><img src="/svg/pattern-1.svg" alt="" /></div>
                <div class="pattern-2"><img src="/svg/pattern-2.svg" alt="" /></div>
                <div class="pattern-3"><img src="/svg/pattern-3.svg" alt="" /></div>
                <div class="pattern-4"><img src="/svg/pattern-4.svg" alt="" /></div>
            </div>
        </section>
        <section class="container hottopicssec flex" >
            <div class="success" >
                <img src="/images/innovation.png" alt="" />
                <p class="number">750+</p>
                <p>Finished Projects</p>
            </div>

            <div class="success" >
                <img src="/images/business-service.png" alt="" />
                <p class="number">23+</p>
                <p>Created Jobs</p>
            </div>

            <div class="success" >
                <img src="/images/user.png" alt="" />
                <p class="number">200+</p>
                <p>Happy Customers</p>
            </div>

            <div class="success" >
                <img src="/images/target.png" alt="" />
                <p class="number">28+</p>
                <p>Years Of Experience</p>
            </div>
        </section>

        <!-- about us -->

        <section class="aboutus container flex">
            <div class="aboutus-left">
                <div class="aboutcontent">
                    <h4>ABOUT US</h4>
                    <h2>
                        Trusted By Worldwide <br />
                        Clients Since <span> 2015.</span>
                    </h2>
                    <p>
                        As a leading Digital marketing agency in Nepal, we are committed
                        to delivering brand-specific, audience targeted and conversion
                        oriented SEO, Web Design, Social media marketing, Business
                        branding & Online reputation management services to our clients to
                        meet their Digital marketing goals. We call ourselves the
                        innovative & problem-solving firm that gets your business to the
                        next level.
                    </p>
                   
                </div>

                <div class="info-container" >
                    <div class="info-up">
                        <div class="info-item">
                            <img src="/images/growth.png" alt="" />
                            <div class="info-content">
                                <h5>STAY SUCCESSFULL</h5>
                                <p>
                                    The correct audience must be attracted if firms are to make
                                    the most of social media for online growth.
                                </p>
                            </div>
                        </div>

                        <div class="info-item">
                            <img src="/images/group.png" alt="" />
                            <div class="info-content">
                                <h5>EFFECTIVE TEAM</h5>
                                <p>
                                    Right now, the focus is on using social media to locate and
                                    engage with the appropriate audience rather than selling the
                                    goods or services.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="info-down">
                        <div class="info-item">
                            <img src="/images/file-management.png" alt="" />
                            <div class="info-content">
                                <h5>A UNIQUE PROJECT</h5>
                                <p>
                                    Which social networking platforms should I use? What sort of
                                    material should I write? How much money should be invested
                                    in what kind of advertising? We create a comprehensive
                                    strategic plan based on your target audience, budget, and
                                    goals.
                                </p>
                            </div>
                        </div>

                        <div class="info-item">
                            <img src="/images/checked.png" alt="" />
                            <div class="info-content">
                                <h5>ACHIEVE YOUR TARGETS</h5>
                                <p>
                                    According to a marketing study, the average individual
                                    doesn't decide to buy something until they've seen the brand
                                    at least four times.Re-targeting is useful because online
                                    selling is never simple.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                   <a href="{{ route('aboutus') }}"> <button type="submit" class="flex">
                        Get In Touch<i class="fa-solid fa-arrow-right"></i>
                    </button></a>
            </div>
            <img src="/images/about.png" alt="" id="aboutmainimg" />
        </section>

        <!-- services section -->
        <section class="services container" >
            <div class="service-c flex">
                <div class="servicescontent">
                    <h4>SERVICES</h4>
                    <h2>Services We Offer</h2>
                    <p>
                        From responsive web development and engaging mobile apps to
                        strategic digital marketing and advanced cybersecurity, we deliver
                        comprehensive solutions for your digital success.
                    </p>
                </div>
                <a href="{{ route('services') }}"><button type="submit" class="flex">
                    See All Services<i class="fa-solid fa-arrow-right"></i>
                </button></a>
            </div>
            <div class="box-service-container flex">
                <div class="box-service" >
                    <img src="/images/app-development.png" alt="" />
                    <h3>APP DEVELOPMENT</h3>
                    <p>
                        Dive into the world of innovation with Prashant Digital Growth's
                        Mobile App Marvels! Our expert app developers craft stunning,
                        high-performance mobile applications tailored to elevate your
                        business to new heights. From sleek user interfaces to robust
                        functionalities, we ensure your app stands out in the crowded
                        digital landscape.
                    </p>

                    <p class="servicesreadmore">
                        <a href="{{route('appservices')}}">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    </p>
                </div>

                <div class="box-service">
                    <img src="/images/coding.png" alt="" />
                    <h3>WEBSITE DEVELOPMENT</h3>
                    <p>
                        At Prashant Digital Growth, we create websites that reflect your
                        brand and convert visitors into committed customers. Our creative
                        design process ensures that your online presence is one-of-a-kind
                        and aligned with your business objectives.
                    </p>

                    <p class="servicesreadmore">
                        <a href="{{route('webservices')}}">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    </p>
                </div>

                <div class="box-service" >
                    <img src="/images/subscription.png" alt="" />
                    <h3>DIGITAL MARKETING</h3>
                    <p>
                        SEO is the art of optimising your website using a variety of
                        tools, tactics, and strategies so that it shows up at the top of
                        search engine results whenever a user types in keywords related to
                        your company or brand. It is one of the best strategies to drive
                        targeted traffic and leads to your website.
                    </p>

                    <p class="servicesreadmore">
                        <a href="{{route('digitalmarket')}}">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    </p>
                </div>

                <div class="box-service">
                    <img src="/images/social-media.png" alt="" />
                    <h3>SOCIAL MEDIA MARKETING</h3>
                    <p>
                        Prashant Digital Growth, headquartered in Delhi's Tagore Garden,
                        is a full-service social media marketing agency. We offer
                        comprehensive 360° solutions to help you exploit social media for
                        your business, whether your goal is to increase brand awareness,
                        engage your audience, or create leads.
                    </p>

                    <p class="servicesreadmore">
                        <a href="{{route('socialservices')}}">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    </p>
                </div>

                <div class="box-service" >
                    <img src="/images/edit.png" alt="" />
                    <h3>GRAPHIC DESIGNING</h3>
                    <p>
                        Great design may help you reach your company objectives, whether
                        you're a little firm selling things online or a major organization
                        establishing a brand. Digital, a renowned graphic design studio,
                        specializes in logo design, brochures, landing sites, business
                        cards, and banners to help you grow your brand.
                    </p>

                    <p class="servicesreadmore">
                        <a href="{{route('graphicservices')}}">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    </p>
                </div>

                <div class="box-service" >
                    <img src="/images/content-writing.png" alt="" />
                    <h3>SEO & CONTENT WRITING</h3>
                    <p>
                        SEO is the art of optimising your website using a variety of
                        tools, tactics, and strategies so that it shows up at the top of
                        search engine results whenever a user types in keywords related to
                        your company or brand. It is one of the best strategies to drive
                        targeted traffic and leads to your website.
                    </p>

                    <p class="servicesreadmore">
                        <a href="{{route('seoservices')}}">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </section>
        {{-- why choose us --}}
        <section id="why-choose-us" class="container flex" >
            <div class="choose-us ">
                <div class="why-choose-col">
                    <h4>WHY CHOOSE US</h4>
                    <h2 class="textcolor">Why Our Customers Choose Working With Us</h2>
                    <p>Choose Prashant Digital Growth for a website development partner that combines technical excellence
                        with a
                        client-focused mindset. Let us transform your online presence into a powerful asset that drives
                        growth and
                        success for your business.</p>
                  <a href="{{ route('aboutus') }}">  <button type="submit" class="flex">
                        Get In Touch<i class="fa-solid fa-arrow-right"></i>
                    </button></a>
                </div>
                <div class="count-col">
                    <!--stat-->
                    <div class="stat-info-par">
                        <div class="stat-info-sub-par">
                            <div class="stat-info-div">
                                <h3>Expertise And Experience</h3>
                                <p>At Prashant Digital Growth, we bring a wealth of expertise and experience to the table.
                                    Our seasoned
                                    team of developers has a proven track record of creating successful websites across
                                    diverse
                                    industries.</p>
                            </div>
                            <!--stat-info-div-->
                        </div>
                        <!--stat-info-sub-par-->
                        <div class="stat-info-sub-par">
                            <div class="stat-info-div">
                                <h3>Tailored Solutions For Your Business</h3>
                                <p>We understand that every business is unique. That's why we take a personalized approach
                                    to website
                                    development.</p>
                            </div>
                            <!--stat-info-div-->
                        </div>
                        <!--stat-info-sub-par-->
                        <div class="stat-info-sub-par">
                            <div class="stat-info-div">
                                <h3>Timely Delivery And Cost-Effective Solutions</h3>
                                <p>We understand the importance of deadlines and budget constraints. Our team is dedicated
                                    to delivering
                                    projects on time and within budget, without compromising on quality.</p>
                            </div>
                            <!--stat-info-div-->
                        </div>
                        <!--stat-info-sub-par-->
                    </div>
                    <!--stat-info-par-->
                </div>
                <!--count-col-->
                <div class="clear"></div>
            </div>
            <!--container-->
        </section>

        {{-- team --}}

        <section class="team container " >
            <div class="container bigtitle-team">
                <h4>TEAMS</h4>
                <h2 class="textcolor">We Have Expert Members</h2>
            </div>
            <div class="card_Container ">
                <div class="card">
                    <div class="imgBx">
                        <img src="/images/team1.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Rohan Pandey <br><span>CEO</span></h3>
                        </div>
                        {{-- <ul class="sci">
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul> --}}
                    </div>

                </div>

                <div class="card">

                    <div class="imbBx">
                        <img src="/images/team2.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Niraj Bhandai<br><span>Senior Full Stack Developer</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 2">
                                <a href="https://github.com/its-me-niraj"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">

                    <div class="imbBx">
                        <img src="/images/team3.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Ankita K.C.<br><span>Front-End Web Developer</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 2">
                                <a href="https://github.com/Ankita2059"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="https://www.linkedin.com/in/ankita-khatri-chhetri-35b628288/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">

                    <div class="imbBx">
                        <img src="/images/team4.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Shrijan Neupane <br><span>Back-End Web Developer</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 2">
                                <a href="https://github.com/aryan20021"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="https://www.linkedin.com/in/shrijan-neupane-597906214/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">
                    <div class="imgBx">
                        <img src="/images/team5.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Bijesh Thapa <br><span>Graphic Designer & SEO</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 2">
                                <a href="https://github.com/Bijesh7"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="https://www.linkedin.com/in/bijesh-thapa-406970317/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">
                    <div class="imgBx">
                        {{-- <img src="/images/team1.png" alt=""> --}}
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Nikhil Rajput <br><span>Digital Marketing </span></h3>
                        </div>
                        {{-- <ul class="sci">
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul> --}}
                    </div>

                </div>

                <div class="card">
                    <div class="imgBx">
                        <img src="/images/team7.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Sumit<br><span>Front-End Web Designer</span></h3>
                        </div>
                        {{-- <ul class="sci">
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul> --}}
                    </div>

                </div>

                {{-- <div class="card">
                    <div class="imgBx">
                        <img src="/images/team1.png" alt="">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3> <br><span>Web Analyst</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div> --}}
            </div>

            </div>

        </section>

        <!-- FAQ section -->
        <section class="faq container " >
            <div class="faqcontent">
                <div class="center">
                    <div class="faqs">
                        <h4>FAQ</h4>
                        <h2>Frequently Asked Question</h2>
                    </div>
                </div>
            </div>

            <div class="faq-questions">

                <div class="faq-question">
                    <button class="accordion"><span>1.)</span> What types of websites does Prashant Digital Growth
                        specialize in
                        developing?</button>

                    <div class="panel">
                        <p>Prashant Digital Growth specializes in developing a wide range of websites, including but not
                            limited to
                            business websites, e-commerce platforms, blogs, portfolios, and custom web applications. Our
                            team is
                            versatile
                            and experienced in catering to diverse industry needs..</p>
                    </div>
                </div>
                <div class="faq-question">
                    <button class="accordion"><span>2.)</span> What technologies and platforms does Prashant Digital Growth
                        use
                        for website
                        development?</button>
                    <div class="panel">
                        <p>Prashant Digital Growth is proficient in a variety of technologies and platforms, including
                            popular
                            content
                            management systems (CMS) like WordPress, Drupal, and Joomla. We also use a range of programming
                            languages
                            and
                            frameworks based on the specific needs of your project</p>
                    </div>
                </div>
                <div class="faq-question">
                    <button class="accordion"><span>3.)</span> How long does it take to develop a website with Prashant
                        Digital
                        Growth?</button>
                    <div class="panel">
                        <p>The timeline for website development can vary based on the complexity and features required.
                            During the
                            initial consultation, we discuss your project's scope and provide a detailed timeline. Our goal
                            is to
                            deliver
                            high-quality websites within a reasonable timeframe, ensuring a balance between speed and
                            precision.</p>
                    </div>
                </div>
                <div class="faq-question">
                    <button class="accordion"><span>4.)</span> How do you ensure the security of the websites you
                        develop?</button>
                    <div class="panel">
                        <p>Security is a top priority at Prashant Digital Growth. We implement industry best practices for
                            website
                            security, including SSL encryption, regular security audits, and updates. Our team stays
                            informed about
                            the
                            latest security threats to proactively protect your website against potential risks.</p>
                    </div>
                </div>
                <div class="faq-question">
                    <button class="accordion"><span>5.)</span> Do I need to have technical knowledge for the website
                        development
                        process?</button>
                    <div class="panel">
                        <p>No, you don't need technical knowledge. At Prashant Digital Growth, we guide you through the
                            entire
                            process.
                            We communicate in a clear, non-technical language, ensuring you understand each step. We
                            encourage
                            collaboration and welcome your input throughout the development journey.</p>
                    </div>
                </div>
                <div class="faq-question">
                    <button class="accordion"><span>6.)</span> What ongoing support and maintenance services do you
                        offer?</button>
                    <div class="panel">
                        <p>Prashant Digital Growth provides comprehensive support and maintenance services post-launch. This
                            includes
                            regular updates, security monitoring, and addressing any issues that may arise. We offer service
                            packages
                            tailored to your needs to ensure your website remains secure and performs optimally.</p>
                    </div>
                </div>
            </div>
            </div>
        </section>



        <!-- Testimonials -->
        <div class="testimonials container">

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
                        <img src="/images/avatar1.png" alt="customersImg">
                    </div>
                    <div class="text">"The positive experience I've had with your company has restored my
                        faith in great customer service." </div>
                </div>

                <div class="mySlides fade">

                    <div class="customer-img">
                        <img src="/images/avatar2.png" alt="customersImg">
                    </div>
                    <div class="text"> "I love doing business with you because I can trust that you always
                        deliver on your promises."</div>
                </div>

                <div class="mySlides fade">

                    <div class="customer-img">
                        <img src="/images/avatar3.png" alt="customersImg">
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

        <!-- End testimonials -->



        <!-- blogs -->

        <div class="rightshadowimg"></div>
        <div class="container bigtitle" >
            <h4>BLOGS</h4>
            <h2 class="textcolor">Latest News</h2>
        </div>
        <section class="editorcards container flex" >
            <div class="edcard">
                <a href="/">
                    <img src="/images/blog1.jpeg" alt="" />
                    <div class="edcarddetl">
                        <div class="tegtime flex">
                            <h5>#Web Dev</h5>
                            <h5 class="flex">
                                <i class="fa-regular fa-clock"></i>
                                <span>5</span>mins read
                            </h5>
                        </div>
                        <a href="/">
                            <h2>
                                How Litespeed Technology Works To Speed Up Your Site
                            </h2>
                        </a>
                        <div class="postby flex">
                            <div class="flex authorbx">
                                <img src="/images/author.png" alt="" />
                                <div class="authorname">
                                    <h4>Coder</h4>
                                    <span>23 August 2023</span>
                                </div>
                            </div>
                            <a href="{{route('blogdetail')}}" class="readmore"><span>Read more</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="edcard">
                <a href="/">
                    <img src="/images/blog2.jpeg" alt="" />
                    <div class="edcarddetl">
                        <div class="tegtime flex">
                            <h5>#Hosting</h5>
                            <h5 class="flex">
                                <i class="fa-regular fa-clock"></i>
                                <span>5</span>mins read
                            </h5>
                        </div>
                        <a href="/">
                            <h2>
                                Elevating Your Digital Presence Through App Development Mastery
                            </h2>
                        </a>
                        <div class="postby flex">
                            <div class="flex authorbx">
                                <img src="/images/author.png" alt="" />
                                <div class="authorname">
                                    <h4>Coder</h4>
                                    <span>23 August 2023</span>
                                </div>
                            </div>
                            <a href="{{route('blogdetail1')}}" class="readmore"><span>Read more</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="edcard">
                <a href="/">
                    <img src="/images/blog3.jpeg" alt="" />
                    <div class="edcarddetl">
                        <div class="tegtime flex">
                            <h5>#SEO</h5>
                            <h5 class="flex">
                                <i class="fa-regular fa-clock"></i>
                                <span>5</span>mins read
                            </h5>
                        </div>
                        <a href="/">
                            <h2>The Role Of Domain Names In SEO World Explained</h2>
                        </a>
                        <div class="postby flex">
                            <div class="flex authorbx">
                                <img src="/images/author.png" alt="" />
                                <div class="authorname">
                                    <h4>Coder</h4>
                                    <span>23 August 2023</span>
                                </div>
                            </div>
                            <a href="{{route('blogdetail2')}}" class="readmore"><span>Read more</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="edcard">
                <a href="/">
                    <img src="/images/blog4.jpeg" alt="" />
                    <div class="edcarddetl">
                        <div class="tegtime flex">
                            <h5>#Freelancer</h5>
                            <h5 class="flex">
                                <i class="fa-regular fa-clock"></i>
                                <span>5</span>mins read
                            </h5>
                        </div>
                        <a href="/">
                            <h2>Helpful Tips for Working from Home as a Freelancer</h2>
                        </a>
                        <div class="postby flex">
                            <div class="flex authorbx">
                                <img src="/images/author.png" alt="" />
                                <div class="authorname">
                                    <h4>Coder</h4>
                                    <span>23 August 2023</span>
                                </div>
                            </div>
                            <a href="{{route('blogdetail3')}}" class="readmore"><span>Read more</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="edcard">
                <a href="/">
                    <img src="/images/blog5.jpeg" alt="" />
                    <div class="edcarddetl">
                        <div class="tegtime flex">
                            <h5>#Themes</h5>
                            <h5 class="flex">
                                <i class="fa-regular fa-clock"></i>
                                <span>5</span>mins read
                            </h5>
                        </div>
                        <a href="/">
                            <h2>Give Your Website A New Look And Feel With Themes</h2>
                        </a>
                        <div class="postby flex">
                            <div class="flex authorbx">
                                <img src="/images/author.png" alt="" />
                                <div class="authorname">
                                    <h4>Coder</h4>
                                    <span>23 August 2023</span>
                                </div>
                            </div>
                            <a href="{{route('blogs')}}" class="readmore"><span>Read more</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="showmorepost flex">
                <a href="{{ route('blogs') }}">Show More Posts<i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>



        <div class="leftshadowimg"></div>




    </main>
@endsection
