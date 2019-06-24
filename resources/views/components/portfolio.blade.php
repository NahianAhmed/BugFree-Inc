@php 
 use App\Testimonial;
 $data = Testimonial::all();

@endphp

<section
    class="section section-height-3 section-background section-text-light section-center overlay overlay-show overlay-op-9 overlay-color-primary m-0 appear-animation"
    data-appear-animation="fadeIn"
    style="background-image: url(img/bg-corporate-1-1.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                <div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0"
                    data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">

            @foreach($data as $data)

                    <div>
                        <div class="col">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                <div class="testimonial-author">
                                    <img src="{{$data->image}}"
                                        class="img-fluid rounded-circle" alt="">
                                </div>
                                <blockquote>
                                    <p>{{$data->testimonial}}</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="text-2 opacity-10">- {{$data->name}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                  @endforeach 


                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="call-to-action-content">
                    <h2 class="font-weight-normal text-6 mb-0">Porto is <strong>everything</strong> you need to create
                        an <strong>awesome</strong> website!</h2>
                    <p class="mb-0">The best HTML template for your new website.</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="call-to-action-btn">
                    <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank"
                        class="btn btn-modern btn-primary">Buy Now!</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
