@extends('master')

@section('contain')

<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
					<div class="container-fluid">
						<div class="row align-items-center">

							<!-- <div class="col">
								<a href="#" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
									<div class="d-flex align-items-center line-height-1">
										<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
										<div class="d-none d-sm-block line-height-1">
											<span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>
											<h4 class="font-weight-bold text-3 mb-0">Okler Website Design</h4>
										</div>
									</div>
								</a>
							</div> -->
							<div class="col">
								<div class="row">
									<div class="col-md-12 align-self-center p-static order-2 text-center">
										<div class="overflow-hidden pb-2">
											<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Our Project</h2><br>
                                            
										</div>
									</div>
									<div class="col-md-12 align-self-center order-1">
										<ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
											<li><a href="{{url('/')}}">Home</a></li>
											
										</ul>
									</div>
								</div>
							</div>

							<!-- <div class="col">
								<a href="#" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
									<div class="d-flex align-items-center text-right line-height-1">
										<div class="d-none d-sm-block line-height-1">
											<span class="text-dark opacity-4 text-1">NEXT PROJECT</span>
											<h4 class="font-weight-bold text-3 mb-0">Porto Admin Dev</h4>
										</div>
										<i class="fas fa-arrow-right text-dark text-4 ml-3"></i>
									</div>
								</a>
							</div> -->
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<!-- <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

							<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">
								<div>
									<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
										<img src="img/projects/project-short.jpg" class="img-fluid border-radius-0" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
										<img src="img/projects/project-short-2.jpg" class="img-fluid border-radius-0" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
										<img src="img/projects/project-short-3.jpg" class="img-fluid border-radius-0" alt="">
									</div>
								</div>
							</div>

						</div> -->

						<iframe src="<?php echo $data->link;?>" 
						height="400px" width="100%"></iframe> 


					</div>
					<div class="row pt-4 mt-2 mb-5">
						<div class="col-md-7 mb-4 mb-md-0">

							<h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Description</strong></h2>

							<p>
                            <?php echo $data->description ?>
                            </p>

							<hr class="solid my-5">

							<strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>

						</div>
						<div class="col-md-5">
							<h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Details</strong></h2>
							<ul class="list list-icons list-primary list-borders text-2">
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong>
                                 {{ $data->client  }}</li>
								
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong>
                                {{ $data->technology  }}
                                 </li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="{{$data->link}}" target="_blank" class="text-dark">{{$data->link}}
						
								 </a></li>
							</ul>
						</div>
					</div>

				</div>

			</div>


@endsection
