<footer id="footer" class="border-0"
    style="background: url('{{asset('public/asset/theme')}}/img/parallax/parallax-8.jpg'); background-size:cover; background-position: 0 100%;">
    <div class="container py-4">
        <div class="row justify-content-md-center py-5 mt-3">
            <div
                class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
                <a href="index.html"><img src="{{asset('public/asset/theme')}}/img/logo-dark.png" alt="Logo"
                        class="img-fluid" style="max-width: 110px;"></a>
            </div>
            <div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
                <ul class="list list-unstyled">
                    <li class="mb-1"><a href="page-services.html" class="link-hover-style-1"> Our Services</a></li>
                    <li class="mb-1"><a href="about-us.html" class="link-hover-style-1"> About Us</a></li>
                    <li class="mb-1"><a href="contact-us.html" class="link-hover-style-1"> Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Links</h5>
                <ul class="list list-unstyled">
                    <li class="mb-1"><a href="page-faq.html" class="link-hover-style-1"> FAQ's</a></li>
                    <li class="mb-1"><a href="sitemap.html" class="link-hover-style-1"> Sitemap</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-5 text-center text-lg-left">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Success!</strong> You've been added to our email list.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mb-3 mb-md-0">
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light" placeholder="Email Address"
                            name="newsletterEmail" id="newsletterEmail" type="text">
                        <span class="input-group-append">
                            <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                        </span>
                    </div>
                </form>
                <p class="mt-3 mb-0 text-center text-lg-left">
                    <i class="fab fa-whatsapp text-color-primary"></i><span
                        class="text-color-light opacity-7 pl-2">(800) 123-4567</span>
                    <i class="far fa-envelope text-color-primary ml-4"></i><a href="mailto:mail@example.com"
                        class="opacity-7 pl-2 text-color-light">mail@example.com</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                    <p>© Copyright 2019. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
