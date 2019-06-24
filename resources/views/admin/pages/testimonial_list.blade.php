
@extends('admin.master')
@section('body')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>List Of Project</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					           @if(session('msg'))
                                  <h1 style="color:red">  {{session('msg')}}  </h1><br>
                               @endif
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Testimonial</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

                          @foreach($data as $data)
							<tr>
								
								<td class="center">{{$data->name}}</td>
								<td class="center">{{$data->testimonial}}</td>
								
								 <td class="center">
									
									
									
									 <a class="btn btn-danger" href="{{url('admin/testimonial-deletion')}}/{{$data->id}}">
										<i class="halflings-icon white trash"></i> 
									</a>
							    </td>
							</tr>
							@endforeach

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection()