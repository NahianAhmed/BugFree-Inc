@extends('master')

@section('contain')

<div role="main" class="main">

				<section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url(img/patterns/wild_oliva.png);">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1>Meet the <strong>Team</strong></h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="{{url('/')}}">Home</a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
						<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Our Experts</a></li>
						
					</ul>

					<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
						<div class="row team-list sort-destination" data-sort-id="team">
                            
                            @foreach ($data as $data)

							<div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="{{url('/about-expert//')}}/{{$data->id}}">
											<img src="{{asset($data->image)}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">{{$data->name}}</span>
												<span class="thumb-info-type"><?php echo $data->designation; ?></span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										
										<span class="thumb-info-social-icons mb-4">
											
										</span>
									</span>
								</span>
							</div>

                            @endforeach


							
						</div>

					</div>

				</div>

			</div>

			

@endsection
