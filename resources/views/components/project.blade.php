@php
use App\OurProject;
$project=OurProject::all();
@endphp

<div class="container pt-5 pb-2">
<div class="row text-center">
        <div class="col">
            <h2 class="font-weight-normal text-6 mt-4">Our <strong class="font-weight-extra-bold">Project</strong>
            </h2>
        </div>
    </div>
    <!-- <div class="overflow-hidden">
        <h2 class="text-color-dark font-weight-normal text-6 mb-0 appear-animation text-center" data-appear-animation="maskUp">
            <strong class="font-weight-extra-bold"> Projects </strong></h2>
    </div> -->
    <!-- <div class="overflow-hidden mb-3">
        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum
            dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
    </div> -->
    <div class="row">
        <div class="col">

            <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="owl-carousel owl-theme pb-3"
                    data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                    @foreach($project as $project)
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{$project->image}}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        {{$project->title}}</span>
                                    <!-- <span class="thumb-info-type">Brand</span> -->
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{url('/our-project')}}/{{$project->id}}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                class="fas fa-link"></i></span>
                                    </a>
                                    <a href="{{$project->image}}" class="lightbox-portfolio">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                class="fas fa-search text-dark"></i></span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>

                    @endforeach

                </div>
            </div>



        </div>
    </div>
</div>
