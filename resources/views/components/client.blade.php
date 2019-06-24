@php
use App\OurProject;
$client=OurProject::all();
$title=\App\Setting::where('field','title')->first();
@endphp
<div class="container">
    <div class="row text-center pt-4 mt-5">
        <div class="col">
            <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                <span>We're not the only ones </span>
                <span class="word-rotator-words bg-primary">
                    <b class="is-visible">excited</b>
                    <b>happy</b>
                </span>
                <span> about {{$title->values}}</span>
            </h2>
            <h4 class="text-primary lead tall text-4"> MEET OUR
                CUSTOMERS.</h4>
        </div>
    </div>

    <div class="row text-center mt-5 pb-5 mb-5">
        <div class="owl-carousel owl-theme carousel-center-active-item mb-0"
            data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
           @foreach($client as $client)
            <div>
                <img class="img-fluid" src="{{$client->image}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>