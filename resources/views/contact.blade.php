@extends('layouts.layout')

@section('content')


<section class="w3l-contact-main w3l-contact3">
    <div class="contact1-bg py-5">
        <div class="container py-lg-5">
            <div class="row contact-main">
                <div class="grid col-lg-6">
                    <div class="column">
                        <h3 class="hny-title">How We Can Help</h3>
                        <p class="head-main">For more info or inquiry about our products project, and pricing please feel free to
                            get in touch with us.</p>
                    </div>
                    <div class="column2">
                        <div class="contact-para contact-info-align">
                            <div class="icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div>
                                <strong class="info">Office Address :</strong class="info">
                                <p>Phase 3, Wadhwan, Surendranagar, Gujarat 363001</p>
                            </div>
                        </div>
                        <div class="contact-info-align">
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div div class="icon-con-info">
                                <strong class="info">Phone :</strong class="info"> <a href="tel:+404 11-22-89"> +91 9054145123</a>
                            </div>
                        </div>
                        <div class="contact-info-align">
                            <div class="icon">
                                <span class="fa fa-envelope-open-o"> </span>
                            </div>
                            <div>
                                <strong class="info">Email Address :</strong> <a href="mailto:example@mail.com">Codeport@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="column3">
                        <h4 class="header">Follow us </h4>
                        <a href="#facebook" class="facebook" title="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter" title="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#linkedin" class="linkedin" title="linkedin"><span class="fa fa-linkedin"></span></a>
                        <a href="#instagram" class="instagram" title="instagram"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
                <div class="map col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1775525769062!2d71.6541282147634!3d22.721641085106295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395940d74f8aee27%3A0xf4a4a0641daf9e60!2sC.U.%20Shah%20Commerce%20College!5e0!3m2!1sen!2sin!4v1663949837327!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="contact-form py-5">
        <div class="container py-lg-5">
            <div class="contacts12-main">
                <h3 class="hny-title text-center">Get In Touch</h3>
                <form class="f-hnyv mt-md-5 mt-4" action="https://sendmail.w3layouts.com/submitForm" method="post">
                    <div class="main-input">
                        <div>
                            <label class="field-info">Name <span class="compulsary">*</span></label>
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name" class="contact-input" />
                        </div>
                        <div>
                            <label class="field-info">Email <span class="compulsary">*</span></label>
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email id" class="contact-input" required />
                        </div>
                        <div>
                            <label class="field-info">Subject <span class="compulsary">*</span></label>
                            <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject" class="contact-input" />
                        </div>
                    </div>
                    <label class="field-info">Message <span class="compulsary">*</span></label>
                    <textarea class="contact-textarea" name="w3lMessage" id="w3lMessage" placeholder="Type your message here" required></textarea>
                    <div class="text-right">
                        <button class="btn btn-contact">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</section>

@endsection