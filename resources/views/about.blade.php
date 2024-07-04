@extends('layouts.main')

@section('content')
<div class="aboutusimg">
    <div class="aboutherotext">
      <h4>Home - About</h4>
      <h2>ABOUT US </h2>
    </div>
</div>

 <section class="aboutus container flex" >
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

                <div class="info-container">
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
            </div>
            <img src="/images/about.png" alt="" id="aboutmainimg" /> 
        </section>


        <section id="why-choose-us" class="container flex">
            <div class="choose-us ">
                <div class="why-choose-col">
                    <h4>WHY CHOOSE US</h4>
                    <h2 class="textcolor">Why Our Customers Choose Working With Us</h2>
                    <p>Choose Prashant Digital Growth for a website development partner that combines technical excellence
                        with a
                        client-focused mindset. Let us transform your online presence into a powerful asset that drives
                        growth and
                        success for your business.</p>
                    <a href="{{route('contacts')}}"> <button type="submit" class="flex">
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

@endsection