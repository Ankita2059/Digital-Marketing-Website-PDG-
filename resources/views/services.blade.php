@extends('layouts.main')

@section('content')
<div class="servicesimg">
    <div class="servicesherotext">
      <h4>Home - Services</h4>
      <h2>SERVICES </h2>
    </div>
</div>

 <section class="services container" >
                <div class="servicescontent">
                    <h4>SERVICES</h4>
                    <h2>Services We Offer</h2>
                    <p>
                        From responsive web development and engaging mobile apps to
                        strategic digital marketing and advanced cybersecurity, we deliver
                        comprehensive solutions for your digital success.
                    </p>
                </div>
           
            <div class="box-service-container flex">
                <div class="box-service">
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

                <div class="box-service">
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

                <div class="box-service">
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

                <div class="box-service">
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


@endsection