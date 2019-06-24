@extends('master')

@section('contain')
<div class="container pt-5">

					<div class="row py-4 mb-2">
						<div class="col-md-7 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{$data->name}}</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<!-- <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Marketing</p> -->
							</div>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"> {{$data->designation}}</p>
                            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Experience in Field For {{$data->exprience}} Years</p>
                            
							<p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"> <?php echo $data->description ?>  </p>
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<div class="col-lg-6">
									<a href="{{url('/contact-with-us')}}" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
									<a href="{{url('/contact-with-us')}}" class="btn btn-modern btn-primary mt-3">Hire Us</a>
								</div>
								
							</div>
						</div>
						<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<img src="{{asset($data->image)}}" class="img-fluid mb-2" alt="">
						</div>
					</div>
				</div>
 @endsection