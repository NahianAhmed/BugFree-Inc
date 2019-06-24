@php
use App\Setting;
$count=Setting::where('field','counting')->first();
$counting = explode(',',$count->values);
@endphp

<div class="container">
    <div class="row counters counters-sm py-4 mt-5">
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="counter">
                <i class="icons icon-user text-color-dark"></i>
                <strong class="text-color-dark font-weight-extra-bold" data-to="{{$counting[0]}}" data-append="+">0</strong>
                <label class="text-4 mt-1">Happy Clients</label>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="counter">
                <i class="icons icon-badge text-color-dark"></i>
                <strong class="text-color-dark font-weight-extra-bold" data-to="{{$counting[1]}}">0</strong>
                <label class="text-4 mt-1">Years In Business</label>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
            <div class="counter">
                <i class="icons icon-graph text-color-dark"></i>
                <strong class="text-color-dark font-weight-extra-bold" data-to="{{$counting[2]}}">0</strong>
                <label class="text-4 mt-1">High Score</label>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="counter">
                <i class="icons icon-cup text-color-dark"></i>
                <strong class="text-color-dark font-weight-extra-bold" data-to="{{$counting[3]}}">0</strong>
                <label class="text-4 mt-1">Cups of Coffee</label>
            </div>
        </div>
    </div>

    <hr class="solid my-5">

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-4 mb-4 mb-md-0">
            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{asset('public/asset/theme')}}/img/layout-styles.png"
                alt="layout styles" />
        </div>
        <div class="col-md-8 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Layout</strong> Styles
                &amp; Variants</h2>
            <p class="text-4">There are so many styles you can combine that is possible to create almost any kind of
                layout based on Porto Template, navigate in our preview and see the header variations, the colors, and
                the page content types that you will be able to use.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in
                nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
        </div>
    </div>

    <hr class="solid my-5">

    <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Exclusive</strong> Style
                Switcher</h2>
            <p class="text-4">With our exlusive Style Switcher you will be able to choose any color you want for your
                website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css
                that will be compiled by a {less} proccessor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in
                nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
        </div>
        <div class="col-md-4 px-5 px-md-3">
            <img class="img-fluid scale-2 my-4" src="{{asset('public/asset/theme')}}/img/style-switcher.png"
                alt="style switcher" />
        </div>
    </div>

    <hr class="solid my-5">

    
</div>
