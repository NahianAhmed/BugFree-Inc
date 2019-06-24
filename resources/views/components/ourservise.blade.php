
@php
use App\Services;
$services = Services::all();
@endphp

<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-normal text-center text-6 pb-3">Our <strong
                        class="font-weight-extra-bold">Services</strong></h2>
            </div>
        </div>

        <div class="row mb-lg-4">
        @foreach ($services as $data)
            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                data-appear-animation-delay="300">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="icons icon-screen-desktop text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <a href="{{url('/our-service')}}/{{$data->id}}"><h4 class="font-weight-bold mb-2">{{$data->name}}</h4></a>
                        <p> {{$data->short_description}} </p>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
            <!-- <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="icons icon-layers text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold mb-2">Sliders</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                            imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="300">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="icons icon-menu text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold mb-2">Buttons</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                            imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                data-appear-animation-delay="300">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="icons icon-doc text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold mb-2">HTML5 / CSS3 / JS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                            imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="icons icon-user text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold mb-2">Icons</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span
                                class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="300">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="icons icon-screen-desktop text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold mb-2">Lightbox</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                            imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
