@extends('layout.layout')
@section('content')
<!-- ***** Breadcumb Area Start ***** -->
<div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(images/conatc-bg.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content text-center">
                    <h2>Contact Us</h2>
                    <p>Tell us about your story and your project.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<div class="fancy-contact-area section-padding-100">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-8">
                <!-- Contact Details -->
                <div class="row">
                    <h2>Contact Us</h2>
                    <p class="mb-5">There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                    <div class="col-12 col-lg-4">
                        <div class="contact-details-area">
                            <h4>HEAD QUATERS</h4>
                            <p>+ 91 9623838002  <br> info@amyindia.com<br>
                                03, Vimal Accord, New Link Road,<br>Opp Punjab & Maharashtra Bank,<br>Vasant Nagri, Vasai (E),<br>Thane - 401208,<br>Maharashtra (India)</p>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="contact-details-area">
                            <h4>GURGAON OFFICE</h4>
                            <p>+91 9325981376  <br> gurgaon@amyindia.com<br>
                                F-12/8 DLF, Phase-I ,<br>Gurgaon-122002,<br>Haryana, India </p>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="contact-details-area">
                            <h4>AUSTRALIA OFFICE</h4>
                            <p>+91 61425672925  <br> melborne@amyindia.com<br>
                                26 Maple street,<br>Seaford Victoria 3198,<br>Australia</p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">
                <!-- Contact Form -->
                <div class="contact-form-area">
                    <div class="section-heading">
                        <h3>Get In Touch With Us!</3>
                        <p>Fill out the form below to recieve a free and confidential.</p>
                    </div>
                    <div class="contact-form">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>

                                        </div>
                                    </div>
                                    <!-- Single Input Area -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="website" id="website" placeholder="Website" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Messages" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area -->
                                    <div class="col-12">
                                        <button type="submit" class="btn fancy-btn fancy-dark bg-transparent">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Google Map -->
                <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1795658856786!2d72.82547641490625!3d19.40464598690019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a93579cd4e57%3A0xe64a47d21b35f30f!2sPunjab%20and%20Maharashtra%20Co%20-Operative%20Bank!5e0!3m2!1sen!2sin!4v1576042617437!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</div>
@endsection