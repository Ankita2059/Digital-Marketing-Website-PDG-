@extends('layouts.main')

@section('content')
<div class="contactimg">
    <div class="contactherotext">
      <h4>Home - Contacts</h4>
      <h2>CONTACT US</h2>
    </div>
</div>


 <section id="section-wrapper" >
        <div class="contact-info" >
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
                        <span>Email:</span> <br> <a href="mailto:info@yoursite.com">info@prashantdigitalgrowth.com</a>
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


    {{-- map --}}
    <div class="maplocation">
       <h2>Find Us On Google Map</h2>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.852993191818!2d83.45672558072593!3d27.69093811480467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x230f4567b50f2f3%3A0x4f9620c0fbc988ad!2sPDG%20-%20Prashant%20Digital%20Growth!5e0!3m2!1sen!2snp!4v1720064118120!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection