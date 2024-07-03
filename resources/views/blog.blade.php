  @extends('layouts.main')

@section('content')
<div class="blogimg">
    <div class="blogherotext">
      <h4>Home - Blog</h4>
      <h2>BLOGS</h2>
    </div>
</div>
  
  
  <div class="rightshadowimg"></div>
        <div class="container bigtitle">
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
                <a href="/">Show More Posts<i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>



        <div class="leftshadowimg"></div>
@endsection