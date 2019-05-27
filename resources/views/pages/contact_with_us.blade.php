@extends('master')

@section('contain')
<div id="googlemaps" class="google-map mt-0" style="height: 500px;">
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uttara%2011%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
</div>

<div class="container">

    <div class="row py-4">
        <div class="col-lg-6">

            <div class="overflow-hidden mb-1">
                <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
            </div>
            <div class="overflow-hidden mb-4 pb-3">
                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel
                    free to ask for details, don't save any questions!</p>
            </div>

            <form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                            class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address."
                            data-msg-email="Please enter a valid email address." maxlength="100" class="form-control"
                            name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="font-weight-bold text-dark text-2">Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100"
                            class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="required font-weight-bold text-dark text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                            class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern"
                            data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-6">

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 1234
                        Street Name, City Name, United States</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a
                            href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>
            </div>

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                <h4 class="pt-5">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                    <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                    <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                </ul>
            </div>

            <h4 class="pt-5">Get in <strong>Touch</strong></h4>
            <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at
                velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit.</p>

        </div>

    </div>

</div>

<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="call-to-action-content">
                    <h2 class="font-weight-normal text-6 mb-0">Porto is <strong
                            class="font-weight-extra-bold">everything</strong> you need to create an <strong
                            class="font-weight-extra-bold">awesome</strong> website!</h2>
                    <p class="mb-0">The <strong class="font-weight-extra-bold">Best</strong> HTML Site Template on
                        ThemeForest</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="call-to-action-btn">
                    <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank"
                        class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span
                        class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft"
                        style="top: -40px; left: 70%;"></span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
