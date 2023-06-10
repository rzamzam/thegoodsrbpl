@extends('layouts.layout')

@section('isi')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>Welcome to THEGOODS</h1>
                <h2>Your trusted inventory management system</h2>
            </div>
        </div>
        <div class="text-center">
            @if (Auth::check())
            <a href="/katalog" class="btn-get-started scrollto">Buy Product</a>
            @else
            <a href="/login" class="btn-get-started scrollto">Login to Buy Product</a>
            @endif
            
           
        </div>
    </div>
</section>
@endsection

@section('main')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6272106972738!2d112.79009158885495!3d-7.283187300000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd791aa7ea9%3A0xd1568e345238695f!2sITS%20Global%20Kampong!5e0!3m2!1sen!2sid!4v1686314875361!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Institut Teknologi Sepuluh Nopember. Kampus ITS Sukolilo, Surabaya 60111.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>thegoods@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-2 gx-md-3">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group col-12">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3 col-12">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center col-12"><button type="submit">Send Message</button></div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </main>
@endsection
